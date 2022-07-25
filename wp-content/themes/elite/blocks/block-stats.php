<?php
/**
 * Block Name: Stats
 *
 * The template for displaying the custom gutenberg block named Stats.
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
$elitedesign_blkstats_kckrtext = $block_fields['elitedesign_blkstats_kckrtext'];

$elitedesign_blkstats_title = $block_fields['elitedesign_blkstats_title'];

$elitedesign_blkstats_stats = $block_fields['elitedesign_blkstats_stats'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	<div class="wrapper">
		<div class="stats-ctn">
			<div class="section-head mb-70 ma-900">

				<?php if($elitedesign_blkstats_kckrtext) { ?>
					<div class="overline"><?php echo $elitedesign_blkstats_kckrtext; ?></div>
				<?php } ?>

				<?php if($elitedesign_blkstats_title) { ?>
					<h2 class="heading-3"><?php echo $elitedesign_blkstats_title; ?></h2>
				<?php } ?>

			</div>
			<div class="stats-inner-area four-cols flexarea">
				<?php if($elitedesign_blkstats_stats) { 
					foreach ($elitedesign_blkstats_stats as $single_stat) {

						$value 			= $single_stat['value'];
						$value_text 	= $single_stat['value_text'];
						$description 	= $single_stat['description'];
						
					?>
					<div class="single-stat col">

						<div class="stat-numbers red">
							<?php if($value) { ?>
								<span class="fig-number" data-number="<?php echo $value; ?>">0</span>
							<?php } ?>

							<?php if($value_text) { ?>
								<span class="overline black"><?php echo $value_text; ?></span>
							<?php } ?>
						</div>

						<?php if($description) { ?>
							<h3 class="heading-6"><?php echo $description; ?></h3>
						<?php } ?>

					</div>
				<?php } }?>
			</div>
		</div>
	</div>

</div>
