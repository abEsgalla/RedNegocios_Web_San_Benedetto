<?php

//AUTOCOMPILER

add_action( 'wp_head', function  () {
  if (!current_user_can('administrator') or isset($_GET['customize_theme']) or get_theme_mod("picostrap_disable_livereload")) return; //exit if not admin
    ?>
    <script>
        var picostrap_livereload_timeout_custom=1500;
        function picostrap_livereload_woodpecker_custom(){
            //console.log("picostrap_livereload_woodpecker_custom start");
            fetch("<?php echo admin_url() ?>?ps_check_sass_changes_custom")
                .then(function(response) {
                    return response.text();
                }).then(function(text) {
                    if (text==="N") {
                        setTimeout(function(){ picostrap_livereload_woodpecker_custom(); }, picostrap_livereload_timeout_custom);
                    }
                    if (text==="Y") {
                        picostrap_recompile_sass_custom();
                    }
                }).catch(function(err) {
                    console.log("picostrap_livereload_woodpecker_custom Fetch Error");
                }); 
        } //end function
        function picostrap_recompile_sass_custom(){
            console.log("picostrap_recompile_sass_custom start");
            fetch("<?php echo admin_url() ?>?ps_compile_scss_custom&ps_compiler_api=1")
                .then(function(response) {
                    return response.text();
                }).then(function(text) {
                    console.log(text);
                    if (text.includes("New Custom CSS bundle")) {
                        document.querySelector("#esgalla_custom_bundle-css").innerHTML = ''; //as there are no errors  
                        var split = text.split(": ");
                        var url = split[1];
                        document.getElementById('esgalla_custom_bundle-css').href = url;
                        setTimeout(function(){ picostrap_livereload_woodpecker_custom(); }, picostrap_livereload_timeout_custom);
                    }
                    else {
                        //COMPILE ERRORS
                        document.querySelector("#scss-compiler-output").innerHTML = text; //display errors
                        setTimeout(function(){ picostrap_recompile_sass_custom(); }, picostrap_livereload_timeout_custom);
                    }
                    
                }).catch(function(err) {
                    console.log(err);
                    console.log("picostrap_recompile_sass_custom Fetch Error");
                }); 
        } //end function
        document.addEventListener('DOMContentLoaded', function(event) {
            document.querySelector("html").insertAdjacentHTML("afterbegin","<div id='scss-compiler-output' style=' position: fixed; z-index: 99999999;'></div>");
            picostrap_livereload_woodpecker_custom();
        });
    </script>
    <?php
});

add_action("admin_init", function (){
  if(!is_user_logged_in() OR !current_user_can("administrator")) return;
  if (isset($_GET['ps_check_sass_changes_custom'])) {
    if(get_theme_mod("picostrap_scss_last_filesmod_timestamp",0)==0) { echo "Y"; die(); }
    if (get_theme_mod("picostrap_scss_last_filesmod_timestamp",0)!=picostrap_get_scss_last_filesmod_timestamp()) echo "Y"; else echo ("N");
    die();
  } 
});

use ScssPhp\ScssPhp\Compiler; //https://scssphp.github.io/scssphp/docs/
use ScssPhp\ScssPhp\ValueConverter;

add_action("admin_init", function (){
  if (!current_user_can("administrator")) return; //ADMINS ONLY
  if (isset($_GET['ps_compile_scss_custom'])) {		picostrap_generate_css_custom();		die();	}
});

function picostrap_generate_css_custom(){	

  set_theme_mod("picostrap_scss_last_filesmod_timestamp",picostrap_get_scss_last_filesmod_timestamp());

  require_once WP_CONTENT_DIR."/themes/".wp_get_theme()->parent()->template."/inc/customizer-assets/scssphp/scss.inc.php";
  $scss = new Compiler();
  try {

    $scss->setImportPaths(WP_CONTENT_DIR.'/themes/'.get_stylesheet().'/sass/');
    if (is_child_theme()) $scss->addImportPath(WP_CONTENT_DIR.'/themes/'.picostrap_get_active_parent_theme_slug().'/sass/');
    if(function_exists("picostrap_add_scss_import_path")) $scss->addImportPath(picostrap_add_scss_import_path());
    
    if(method_exists($scss,'setOutputStyle')){
      $scss->setOutputStyle(ScssPhp\ScssPhp\OutputStyle::COMPRESSED);
    }else{
      $scss->setFormatter('ScssPhp\ScssPhp\Formatter\Crunched');
    }	
    if(method_exists($scss,'replaceVariables')){
      $scss->replaceVariables(picostrap_get_active_scss_variables_array());
    }else{
      $scss->setVariables(picostrap_get_active_scss_variables_array());
    }	
    //NOW COMPILE
    if(method_exists($scss,'compileString')){
      $compiled_css = $scss->compileString(picostrap_get_active_scss_code_custom('esgalla_custom'))->getCss();
    }else{
      $compiled_css = $scss->compile(picostrap_get_active_scss_code_custom('esgalla_custom'));
    }

  } catch (Exception $e) {
    //COMPILER ERROR: TYPICALLY INVALID SCSS CODE
    die("<div id='compile-error' style='font-size:20px;background:#212337;color:lime;font-family:courier;border:8px solid red;padding:15px;display:block'><h1>SCSS error</h2>".$e->getMessage()."</div>");
  }
  //CHECK CSS IS REALLY THERE
  if ($compiled_css=="") die("Compiled CSS is empty, aborting.");
  //ADD SOME COMMENT
  $compiled_css .= " /********/ ";
  //INIT WP FILESYSTEM 
  global $wp_filesystem;
  if (empty($wp_filesystem)) {
    require_once (ABSPATH . '/wp-admin/includes/file.php');
    WP_Filesystem();
  }
  //SAVE THE FILE
  $name_custom_css="esgalla_custom_bundle.css";
  $saving_operation = $wp_filesystem->put_contents('../wp-content/themes/'.get_stylesheet() . '/' . picostrap_get_css_optional_subfolder_name() . $name_custom_css, $compiled_css, FS_CHMOD_FILE ); // , 0644 ?
  if ($saving_operation) { // IF UPLOAD WAS SUCCESSFUL 
    //GIVE POSITIVE FEEDBACK	
    if (isset($_GET['ps_compiler_api'])) {
      echo "New Custom CSS bundle: ". get_stylesheet_directory_uri() . '/' . picostrap_get_css_optional_subfolder_name() . $name_custom_css;
    } else {		
      echo "File was successfully uploaded<br><br>";
      echo "<a href='".picostrap_get_css_url()."' target='new'>View File</a>";
      echo "<br><br><b>Size: </b><br>".round(mb_strlen($compiled_css, '8bit')/1000)." kB - ".round(mb_strlen(gzcompress($compiled_css), '8bit')/1000)." kB gzipped";
    }
  } else {
    //GIVE NEGATIVE FEEDBACK
    if (isset($_GET['ps_compiler_api'])) {
      echo  "<br><br><span id='saving-error'>Error saving CSS file "."</span>";
    } else {
      echo  "<div id='savingfile-error' style='font-size:20px;background:#212337;color:lime;font-family:courier;border:8px solid red;padding:15px;display:block'><h1>Error writing file</h1></div>";
    die();
    }
  }
  //PRINT A CLOSE BUTTON
  if (!isset($_GET['ps_compiler_api'])) echo  " <button style='font-size:30px;width:100%' class='cs-close-compiling-window'>OK </button>";
}

function picostrap_get_active_scss_code_custom($namefile="main"){
  //INIT WP FILESYSTEM 
  global $wp_filesystem;
  if (empty($wp_filesystem)) {
    require_once (ABSPATH . '/wp-admin/includes/file.php');
    WP_Filesystem();
  }
  //READ THE FILE
  $tmp_dir='/sass/'.$namefile.'.scss';
  //$the_scss_code = $wp_filesystem->get_contents('../wp-content/themes/'.get_stylesheet().$tmp_dir);  
  $the_scss_code = $wp_filesystem->get_contents('../wp-content/themes/'.get_stylesheet().$tmp_dir);  
  //FOR STYLE PACKAGES
  if(function_exists("picostrap_alter_scss")) $the_scss_code = picostrap_alter_scss ($the_scss_code);	 
  return $the_scss_code;
}

/////*****/////

?>