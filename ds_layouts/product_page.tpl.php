<?php
/**
 * @file
 * Bootstrap 2-8-2 template for Display Suite.
 */
 
  global $base_path, $base_url;
?>


<script src="/sites/all/themes/bootstrap_component/js/jquery.elevateZoom-3.0.8.min.js"> </script>
<script>
    $(function() {
      $('.field-name-field-cross-section, .field-name-field-productimg ').each(function(){
        var $link = $('a', this);
        var $thumb = $('img', this)
        var $fullimage = $thumb.attr("src");
        $link.attr("href","#");
        $('#unzoomed').attr('src', $fullimage);
      //  $('a', this).attr("data-zoom-image", $fullimage);
       // $('a', this).attr("data-image", $fullimage);
      });
      
      $('.field-name-field-cross-section a, .field-name-field-productimg a ').click(function(){
        var $source = $('img', this).attr('src');
        $('#unzoomed').attr('src', $source )
        $("#unzoomed").elevateZoom({zoomType:'inner', cursor: 'crosshair'}); 
        
      });
    });
    
</script>

<!--Stock Code Lines for svgDraw.js  to manipulate , you can find that in the scripts folder-->

<div id="svgContainer" style="margin: 50px 50px;" class="hidden-xs">
    <svg id="svg1" width="0" height="0" >
     <path id="rotary1" d="M0 0" stroke="#330080" fill="none" stroke-width="2px"stroke-linecap="round"stroke-dasharray="1, 5";/>
     <path id="stationary1" d="M0 0" stroke="#e60073"  fill="none" stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/>
     <path id="elastomer1" d="M0 0" stroke="#ff761a" fill="none" stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/> 
     <path id="rotary2" d="M0 0" stroke="#330080" fill="none" stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/>          
     <path id="stationary2" d="M0 0" stroke="#e60073" fill="none" stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/> 
     <path id="elastomer2" d="M0 0" stroke="#ff761a" fill="none" stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/>          
     <path id="build1" d="M0 0" stroke="#2980b9" fill="none"  stroke-width="2px" stroke-linecap="round" stroke-dasharray="1, 5";/>
    </svg>
 </div>


<<?php print $layout_wrapper; print $layout_attributes; ?> class="<?php print $classes; ?>">
  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  
  <div class="row">
    <<?php print $topleft_wrapper; ?> <?php if(($field_modular_seal_range_) && ($field_modular_seal_range_['und'][0]['value'] == '1')):?>class="col-md-12 col-sm-12"<?php else:?>class="col-sm-6 col-md-6<?php endif;?> <?php print $topleft_classes; ?>">
      <?php print $topleft; ?>

    <<?php print $thumbnails_wrapper; ?> class="col-sm-12 col-md-12 <?php print $thumbnails_classes; ?>">
        <div id="gal1" class="gallery">
      <?php print $thumbnails; ?>
      </div>
    </<?php print $thumbnails_wrapper; ?>>
    </<?php print $topleft_wrapper; ?>>
   
    <<?php print $topright_wrapper; ?> <?php if(($field_modular_seal_range_) && ($field_modular_seal_range_['und'][0]['value'] == '1')):?>class="col-md-12 col-sm-12 modular-diagram"<?php else:?>class="col-sm-6 col-md-6<?php endif;?> <?php print $topright_classes; ?>">
      <?php print $topright; ?>
 
      
  <img id="unzoomed" class="img-responsive zoomed-image"></div>
      
    </<?php print $topright_wrapper; ?>>
  </div>
  
 
 <?php if(empty($field_primary_rotary_face) && empty($field_primary_stationary_face) && empty($field_primary_elastomer)):?>
 
 <?php else: ?>
   
    <div class='row'>
        <div class="col-md-12 stockcode" id="stockcode">


      <span class="label">Stock Code:</span><br>
        <?php if (($field_industry_type) && (in_array("112", $field_industry_type['und'][0]))): ?>
           <span class="prefix">F-</span>
        <?php else:?>
        <span class="prefix">N-</span>
        <?php endif?>
       
        <?php $trimmed_title = explode(' ',trim($title));?>
        <?php if (!empty($title)): ?><span><?php print $trimmed_title[0]; ?>-</span><?php endif; ?>
        <?php if ($field_primary_rotary_face): ?><span class="Rotary1">X</span><?php else: ?><span>-</span><?php endif?>
        <?php if ($field_primary_stationary_face): ?><span class="Stationary1">X</span><?php else: ?><span>-</span><?php endif?>
        <?php if ($field_primary_elastomer): ?><span class="Elastomer1">X</span><?php else:?><span>-</span><?php endif?>
        <?php if (($field_secondary_rotary_face) && (($field_arrangement['und'][0]['value'] != 'Tandem')||(empty($field_arrangement)))): ?><span class="Rotary2">X</span><?php endif?>
        <?php if ($field_secondary_stationary_face): ?><span class="Stationary2">X</span><?php endif?>
        <?php if (($field_secondary_rotary_face) && ($field_arrangement['und'][0]['value'] == 'Tandem')): ?><span class="Rotary2">X</span><?php endif?>
        <?php if ($field_secondary_elastomer): ?><span class="Elastomer2">X</span><?php endif?>
        <?php if ($field_build_code): ?><span class="build-code">X</span><?php endif?>
        <span class="size-code">-XXXX</span>
        </div>
    </div>
    
    <?php endif; ?>

    <<?php print $mid_left_wrapper; ?> class="col-md-12 build-mats clearfix <?php print $mid_left_classes; ?>">
        <?php print $mid_left; ?>
    </<?php print $mid_left_wrapper; ?>>

    <<?php print $mid_right_wrapper; ?> class="col-md-2 <?php print $mid_right_classes; ?>">
        <?php print $mid_right; ?>
    </<?php print $mid_right_wrapper; ?>>

    <<?php print $central_wrapper; ?> class="col-md-12 <?php print $central_classes; ?>">
        <?php print $central; ?>
    </<?php print $central_wrapper; ?>>
    
</<?php print $layout_wrapper ?>>


<!-- Needed to activate display suite support on forms -->
<?php if (!empty($drupal_render_children)): ?>
 <?php print $drupal_render_children ?>
<?php endif; ?>

<script src="/sites/all/themes/bootstrap_component/js/svgDraw.js"> </script>
