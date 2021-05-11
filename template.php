<?php

function bootstrap_component_preprocess_page(&$variables) {
    drupal_add_library('system', 'ui.slider');
  if (isset($variables['node']->type)) {
    // If the content type's machine name is "my_machine_name" the file
    // name will be "page--my-machine-name.tpl.php".
    $variables['theme_hook_suggestions'][] = 'page__' . $variables['node']->type;
  }
}

function bootstrap_component_css_alter(&$css){
  $css['sites/all/themes/f4s_bs/bootstrap/css/bootstrap.min.css']['weight']=11;
  $css['sites/all/themes/f4s_bs/bootstrap/css/bootstrap-theme.min.css']['weight']=12;
  $css['sites/all/themes/aesbs337/css/fonts-style.css']['weight']=13;
  $css['sites/all/themes/aesbs337/css/regions-style.css']['weight']=14;
  $css['sites/all/themes/aesbs337/css/block-style.css']['weight']=15;
  $css['sites/all/themes/aesbs337/css/field-style.css']['weight']=16;
  $css['sites/all/themes/aesbs337/css/jquery.scrolling-tabs.min.css']['weight']=17;
  $css['sites/all/themes/f4s_bs/css/fonts-style.css']['weight']=18;
  $css['sites/all/themes/f4s_bs/css/regions-style.css']['weight']=19;
  $css['sites/all/themes/f4s_bs/css/block-style.css']['weight']=20;
  $css['sites/all/themes/f4s_bs/css/field-style.css']['weight']=21;
}


function bootstrap_component_preprocess_node(&$variables) {

  // Get a list of all the regions for this theme
  foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

    // Get the content for each region and add it to the $region variable
    if ($blocks = block_get_blocks_by_region($region_key)) {
      $variables['region'][$region_key] = $blocks;
    }
    else {
      $variables['region'][$region_key] = array();
    }
  }
}
/**
 * @file
 * template.php
 */
