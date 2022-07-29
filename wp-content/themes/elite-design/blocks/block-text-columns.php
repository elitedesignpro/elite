<?php
/**
 * Block Name: Text Columns
 *
 * The template for displaying the custom gutenberg block named Text Columns.
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

// Title
$elitedesign_txt_clms_title = html_entity_decode($block_fields['elitedesign_txt_clms_title']); // for keeping html from input
// Kicker
$elitedesign_txt_clms_kicker = html_entity_decode($block_fields['elitedesign_txt_clms_kicker']); // for removing html from input

// Text Colunms Repeater
$elitedesign_txt_clms_columns =$block_fields['elitedesign_txt_clms_columns']; // for removing html from input

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="wrapper">
		<div class="text-columns-ctn">
			<div class="section-head ma-800 mb-70">

				<?php if($elitedesign_txt_clms_kicker) { ?>

					<div class="overline"><?php echo $elitedesign_txt_clms_kicker; ?></div>

				<?php }

 				if($elitedesign_txt_clms_title) { ?>

					<h2><?php echo $elitedesign_txt_clms_title; ?></h2>

				<?php } ?>

			</div>
			<?php if($elitedesign_txt_clms_columns) { ?>
				<div class="text-columns flex align-start">
					<?php foreach ($elitedesign_txt_clms_columns as $text_colum) {
							$title = html_entity_decode($text_colum['title']);
							$text  = html_entity_decode($text_colum['text']); ?>

							<div class="text-column col-645">

									<?php if($title) { ?>

										<h3 class="heading-4"><?php echo $title; ?></h3>

									<?php } ?>

									<?php if($text) { ?>

										<?php echo $text; ?>

									<?php } ?>
							</div>
					<?php } ?>
				</div>
			<?php } ?>
		</div>
	</div>

</div>
