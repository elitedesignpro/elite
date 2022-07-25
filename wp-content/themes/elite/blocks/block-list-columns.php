<?php
/**
 * Block Name: List Columns
 *
 * The template for displaying the custom gutenberg block named List Columns.
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
$elitedesign_blk_list_columns = $block_fields['elitedesign_blk_list_columns'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="wrapper">
		<div class="list-colums flex">
			<?php if($elitedesign_blk_list_columns) {
				foreach ($elitedesign_blk_list_columns as $list_column) { 
					
					$title = html_entity_decode($list_column['title']);
					$text = html_entity_decode($list_column['text']);

					?>
					<div class="list-column col-49">
						<?php if($title) { ?>
							<h2><?php echo $title; ?></h2>
						<?php } ?>

						<div class="med-body list-text"> 
							<?php if($text) {
								echo $text;
							} ?>
						</div>
					</div>
			<?php } }?>
		</div>
	</div>

</div>
