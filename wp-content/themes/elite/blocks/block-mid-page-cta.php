<?php
/**
 * Block Name: Mid Page CTA
 *
 * The template for displaying the custom gutenberg block named Mid Page CTA.
 *
 * @link https://www.advancedcustomfields.com/resources/blocks/
 *
 * @package ELITE Design
 * @since 1.0.0
 */

// Get all the fields from ACF for this block ID
// $block_fields = get_fields( $block['id'] );
$block_fields = get_fields_escaped( $block['id'] );
// $block_fields = get_fields_escaped( $block['id'] ,'sanitize_text_field' ); // if want to remove all html

// Set the block name for it's ID & class from it's file name
$block_glide_name = $block['name'];
$block_glide_name = str_replace("acf/" , "" , $block_glide_name);

// Set the preview thumbnail for this block for gutenberg editor view.
if( isset( $block['data']['preview_image_help'] )  ) {    /* rendering in inserter preview  */
	echo '<img src="'. $block['data']['preview_image_help'] .'" style="width:100%; height:auto;">';
}

// create align class ("alignwide") from block setting ("wide").
$align_class = $block['align'] ? 'align' . $block['align'] : '';

// Get the class name for the block to be used for it.
$class_name = (isset($block['className'])) ? $block['className'] : null;

// Making the unique ID for the block.
$id = 'block-' .$block_glide_name . "-" . $block['id'];

// Making the unique ID for the block.
if($block['name']){
	$block_name = $block['name'];
	$block_name = str_replace("/" , "-" , $block_name);
	$name = 'block-' .  $block_name;
}

// Block variables
$elitedesign_mdcta_kicker = html_entity_decode($block_fields['elitedesign_mdcta_kicker']); // for keeping html from input
$elitedesign_mdcta_title = html_entity_decode($block_fields['elitedesign_mdcta_title']); // for removing html from input
$elitedesign_mdcta_text = html_entity_remove($block_fields['elitedesign_mdcta_text']); // for keeping html from input
$elitedesign_mdcta_button = $block_fields['elitedesign_mdcta_button']; // for keeping html from input

?>

<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="job-cta center-align center ma-800">
		<?php if($elitedesign_mdcta_kicker) { ?>
			<div class="overline black"><?php echo $elitedesign_mdcta_kicker; ?></div>
		<?php } 

		if($elitedesign_mdcta_title) { ?>
			<h2 class="heading-3"><?php echo $elitedesign_mdcta_title; ?></h2>
		<?php } 

		if($elitedesign_mdcta_text) { 
			echo '<p>'.$elitedesign_mdcta_text.'</p>';
		}

		if( $elitedesign_mdcta_button ) {
			echo glide_acf_button( $elitedesign_mdcta_button, 'button' );
		} ?>
	</div>

</div>
