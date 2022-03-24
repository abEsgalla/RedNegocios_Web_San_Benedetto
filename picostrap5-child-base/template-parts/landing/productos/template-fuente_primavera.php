<?  $acf_fields = get_fields();
    $id_producto=get_the_ID();
?>
<section>
    <div class="container-fluid position-relative zi-99">
        <div class="bg-custom-image w-100 h-100 position-absolute top-0 start-0" 
        style="background:url('<?=wp_get_attachment_image_url($acf_fields['cabecera']['fondo'], "full")?>')"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-12 text-center">
                        <?=wp_get_attachment_image($acf_fields['cabecera']['producto_central'], "full", "", array( 'class' => 'mtn-custom-25' , 'alt' => '' , 'title' => '') ); ?>
                </div>
            </div>
        </div>
    </div>
</section>