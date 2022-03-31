<?php
  $fields = wp_parse_args( $args );
  $seccion = $fields;
?>

<?php echo wp_get_attachment_image($seccion['fondo'], "full", '', array('class' => 'w-100')); ?>