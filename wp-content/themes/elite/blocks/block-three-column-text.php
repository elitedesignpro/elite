<?php
/**
 * Block Name: Three Column Text
 *
 * The template for displaying the custom gutenberg block named Three Column Text.
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
$elitedesign_thrcoltxt_title = html_entity_decode($block_fields['elitedesign_thrcoltxt_title']); // for keeping html from input

$elitedesign_thrcoltxt_text = html_entity_remove($block_fields['elitedesign_thrcoltxt_text']); // for removing html from input

$elitedesign_thrcoltxt_columns = $block_fields['elitedesign_thrcoltxt_columns'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="blue-bg ctn">
		<div class="wrapper">
			<div class="tct-ctn">
				<div class="section-head center-align mb-70 ma-900 text-center">
					<?php if($elitedesign_thrcoltxt_title) { ?>
						<h2 class="heading-3"><?php echo $elitedesign_thrcoltxt_title; ?></h2>
						<?php } ?>
						
						<?php if($elitedesign_thrcoltxt_text) { ?>
							<div class="big-body">
								<?php echo $elitedesign_thrcoltxt_text; ?>
							</div>
						<?php } ?>
				</div>
				<div class="tct-columns three-cols flexarea">
					<?php if($elitedesign_thrcoltxt_columns) {
						foreach ($elitedesign_thrcoltxt_columns as $three_col) {
							$title = $three_col['headline'];
							$text = html_entity_remove($three_col['text']);
						?>
						<div class="tct-column col rd-10">
							<?php if($title) { ?>
								<h3 class="heading-5"><?php echo $title; ?></h3>
							<?php } ?>
							<?php if($text) { ?>
								<div class="med-body">
									<?php echo $text; ?>
								</div>
							<?php } ?>
						</div>
					<?php } }?>
				</div>
			</div>
		</div>
	</div>

</div>
