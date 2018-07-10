<?php

/**
 * @file field.tpl.php
 * Default template implementation to display the value of a field.
 *
 * This file is not used and is here as a starting point for customization only.
 * @see theme_field()
 *
 * Available variables:
 * - $items: An array of field values. Use render() to output them.
 * - $label: The item label.
 * - $label_hidden: Whether the label display is set to 'hidden'.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - field: The current template type, i.e., "theming hook".
 *   - field-name-[field_name]: The current field name. For example, if the
 *     field name is "field_description" it would result in
 *     "field-name-field-description".
 *   - field-type-[field_type]: The current field type. For example, if the
 *     field type is "text" it would result in "field-type-text".
 *   - field-label-[label_display]: The current label position. For example, if
 *     the label position is "above" it would result in "field-label-above".
 *
 * Other variables:
 * - $element['#object']: The entity to which the field is attached.
 * - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
 * - $element['#field_name']: The field name.
 * - $element['#field_type']: The field type.
 * - $element['#field_language']: The field language.
 * - $element['#field_translatable']: Whether the field is translatable or not.
 * - $element['#label_display']: Position of label display, inline, above, or
 *   hidden.
 * - $field_name_css: The css-compatible field name.
 * - $field_type_css: The css-compatible field type.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_field()
 * @see theme_field()
 *
 * @ingroup themeable
 */
?>

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
    <a href="/node/<?php print ($element['#items']['0']['target_id']) ?>">
    
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="153.667px" height="138px" viewBox="0 0 153.667 138" style="enable-background:new 0 0 153.667 138;" xml:space="preserve"
	>


<text transform="matrix(1 0 0 1 36.1226 73.3467)" style="fill:#062047; font-family:'Helvetica'; font-size:26px;">UP</text>
<text transform="matrix(1 0 0 1 67.7085 83.7363)" style="fill:#062047; font-family:'Helvetica'; font-size:20px;">Grade</text>
<g>
	<defs>
		<rect id="SVGID_1_" x="9.612" y="11.458" width="133.699" height="95.906"/>
	</defs>
	<clipPath id="SVGID_2_">
		<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
	</clipPath>
	<path style="clip-path:url(#SVGID_2_);fill:#DD052B;" d="M76.115,11.457c3.227,0,5.552,3.819,5.552,3.819l26.221,40.594
		c0,0,1.479,2.173,0.424,4.212c-0.906,1.74-3.374,1.881-3.374,1.881H76.433c0,0-1.003-0.08-1.544-0.389
		c-0.521-0.294-1.097-1.071-1.097-1.071l-7.309-11.928c0,0-0.64-0.768-1.188-1.056c-0.647-0.34-1.84-0.37-1.84-0.37h-8.576
		c0,0-1.922,0.157-2.411-0.89c-0.565-1.221,0.632-2.611,0.632-2.611l17.18-27.957C70.28,15.693,72.33,11.457,76.115,11.457"/>
	<path style="clip-path:url(#SVGID_2_);fill:#062047;" d="M31.576,80.362h30.172c0,0,0.855,0.042,1.298,0.318
		c0.364,0.225,0.755,0.8,0.755,0.8l2.941,4.904c0,0,2.942,4.899,3.425,5.353c0,0,0.011,0.248,0.485,0.445
		c0.393,0.167,1.081,0.125,1.081,0.125h54.283c0,0,2.894,0.033,4.45,0.865c1.455,0.778,3.038,2.934,3.038,2.934l1.79,2.967
		c0,0,1.789,2.97,1.836,4.941c0,0,1.145,0.29,0.047,1.975c-0.917,1.413-3.244,1.375-3.244,1.375H77.14c0,0-1.09-0.031-1.673-0.355
		c-0.589-0.328-1.198-1.249-1.198-1.249l-7.299-12.1c0,0-0.4-0.795-0.853-1.081c-0.536-0.337-1.596-0.271-1.596-0.271H27.976
		c0,0-2.396,0-3.292-0.252c0,0-0.51,0.394-0.896-0.249c-0.461-0.771,0.189-1.664,0.189-1.664l5.292-8.391
		c0,0,0.476-0.852,0.994-1.132C30.721,80.367,31.576,80.362,31.576,80.362"/>
</g>
<text transform="matrix(1 0 0 1 73.4878 104.6826)" style="fill:#FFFFFF; font-family:'Helvetica'; font-size:13px;"><?php print render($item); ?></text>
</svg>


</a>


    <?php endforeach; ?>
  </div>
</div>