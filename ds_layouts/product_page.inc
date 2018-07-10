<?php
function ds_product_page() {
  return array(
    'label' => t('Product Page Layout'),
    'regions' => array(
      'central' => t('Central'),
     'thumbnails' => t('Thumbnails'),
      'topleft' => t('Top Left'),
       'topright' => t('Top Right'),
      'mid_left' => t('Middle left'),
      'mid_right' => t('Middle Right')

     
      
    ),
    // Add this line if there is a default css file.
   // 'css' => TRUE,
    // Add this line if you're using DS 2.x for icon preview
   // 'image' => TRUE,
  );
}