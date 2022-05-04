<?php
// SET A SPECIFIC DESTINATION FOLDER FOT THE COMPILED CSS BUNDLES
function picostrap_get_css_optional_subfolder_name() { return "css-output/"; }

// SET A CUSTOM NAME FOR THE CSS BUNDLE FILE
function picostrap_get_base_css_filename() { return "bundle.css"; }

// DISABLE APPLICATION PASSWORDS for security
add_filter( 'wp_is_application_passwords_available', '__return_false' );

// LOAD CHILD THEME TEXTDOMAIN
//add_action( 'after_setup_theme', function() { load_child_theme_textdomain( 'picostrap-child', get_stylesheet_directory() . '/languages' ); } );

// OPTIONAL ADDITIONAL CSS FILE - [NOT RECOMMENDED]: USE the /sass folder, add your css code to /sass/_custom.sass
//add_action( 'wp_enqueue_scripts',  function  () {	wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/custom.css' ); });

// OPTIONAL ADDITIONAL JS FILE - just uncomment the row below
//add_action( 'wp_enqueue_scripts', function() {	wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/js/custom.js', array(/* 'jquery' */), null, true); });
 
// OPTIONAL: ADD FONTAWESOME FROM CDN IN FOOTER 
/* 
add_action("wp_footer",function(){ ?> <link rel='stylesheet' id='fontawesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' media='all' /> <?php }); 
*/

//OPTIONAL: ADD ANOTHER CUSTOM GOOGLE FONT, EXAMPLE: Hanalei Fill
// After uncommenting the following code, you will also need to set the font in the BS variable. Here's how:
// Open the WordPress Customizer 
// In the field/s: "Font Family Base" or "Headings Font Family" enter the font name, in this case "Hanalei Fill"

/*
add_action("wp_head",function(){ ?> 
 <link rel="dns-prefetch" href="//fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
 <link href="https://fonts.googleapis.com/css?family=Hanalei+Fill" rel="stylesheet">
<?php }); 
*/

// OPTIONAL: ADD MORE NAV MENUS
//register_nav_menus( array( 'third' => __( 'Third Menu', 'picostrap' ), 'fourth' => __( 'Fourth Menu', 'picostrap' ), 'fifth' => __( 'Fifth Menu', 'picostrap' ), ) );
// THEN USE SHORTCODE:  [lc_nav_menu theme_location="third" container_class="" container_id="" menu_class="navbar-nav"]



//ADD CUSTOM SECTIONS AND BLOCKS FROM THE THEME
add_filter('lc_load_cpt_lc_section', function (array $sections) {
    foreach (glob(get_stylesheet_directory() . '/template-livecanvas-sections/*.html') as $section) {
        $pathInfo = pathinfo($section);
        $name = ucwords(str_replace('-', ' ', $pathInfo['filename']));
        $sections[] = [
            'id' => 'section-' . rand(),
            'name' => $name,
            'description' => $name,
            'template' => file_get_contents($section)
        ];
    }
    return $sections;
}, PHP_INT_MAX);

add_filter('lc_load_cpt_lc_block', function (array $blocks) {
    foreach (glob(get_stylesheet_directory() . '/template-livecanvas-blocks/*.html') as $block) {
        $pathInfo = pathinfo($block);
        $name = ucwords(str_replace('-', ' ', $pathInfo['filename']));
        $blocks[] = [
            'id' => 'block-' . rand(),
            'name' => $name,
            'description' => $name,
            'template' => file_get_contents($block)
        ];
    }
    return $blocks;
}, PHP_INT_MAX);


//NEW ADDED ESGALLA
$understrap_includes = array(
    '/cpt_producto.php',
    '/cpt_landing.php',
    '/enqueues.php',
    '/autocompiler-custom.php'
);


// Include files.
foreach ( $understrap_includes as $file ) {
require_once get_theme_file_path() . '/inc' . $file;
}

// Remove Guttenberg
add_filter( 'use_block_editor_for_post', '__return_false' );


if( function_exists('acf_add_options_page') ){
  acf_add_options_page(array(
    'page_title' 	=> 'Opciones del tema',
    'menu_title'	=> 'Opciones del tema',
    'menu_slug' 	=> 'opciones-tema',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));
}

function register_custom_navwalker(){
	require_once get_theme_file_path() . '/inc/bootstrap-navwalker-ext.php';
}
add_action( 'after_setup_theme', 'register_custom_navwalker' );



function template_part_ajax() {
    $return = [];
    $page_id = $_REQUEST['page_id'];
    $page_name = $_REQUEST['page_name'];
    $return = load_template_part('page-templates/custom', 'template-'.$page_name, array('page_id'=>$page_id,'page_name'=>$page_name));
    wp_send_json($return);
}

// creating Ajax call for WordPress
add_action('wp_ajax_nopriv_template_part_ajax', 'template_part_ajax');
add_action('wp_ajax_template_part_ajax', 'template_part_ajax');


//FUNCTION TO LOAD CACHED CODE
function load_template_part($template_name, $part_name=null, $params) {
	ob_start();
	get_template_part($template_name, $part_name, $params);
	$var = ob_get_contents();
	ob_end_clean();
	return $var;
}
