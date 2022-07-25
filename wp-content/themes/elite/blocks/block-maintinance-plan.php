<?php
/**
 * Block Name: Maintinance Plan
 *
 * The template for displaying the custom gutenberg block named Maintinance Plan.
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
$elitedesign_blkmplan_title = html_entity_decode($block_fields['elitedesign_blkmplan_title']);

$elitedesign_blkm_add_plans = $block_fields['elitedesign_blkm_add_plans'];

?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

		<section class="ctn blue-bg">
			<div class="wrapper">
				<div class="pricing-plan-ctn">

					<?php if($elitedesign_blkmplan_title) { ?>
						<div class="section-head center-align mb-70 ma-900 text-center">
							<h2 class="heading-3"><?php echo $elitedesign_blkmplan_title; ?></h2>
						</div>
					<?php } ?>

					<div class="pricing-cols three-cols valign-center flexarea">
						<?php if($elitedesign_blkm_add_plans) { 

							foreach ($elitedesign_blkm_add_plans as $plan) {
								$plan_name = html_entity_decode($plan['plan_name']);
								$price = 	html_entity_decode($plan['price']);
								$duration =	html_entity_decode($plan['duration']);
								$services = html_entity_decode($plan['services']);
								$button = 	$plan['button'];
							?>

							<div class="single-price-plan white-bg center col rd-10">

								<?php if($plan_name) { ?>
									<div class="overline"><?php echo $plan_name; ?></div>
								<?php }
								
								if($price) { ?>
									<h3><?php echo $price; ?></h3>
								<?php }
								
								if($duration) { ?>
									<div class="overline black"><?php echo $duration; ?></div>
								<?php }
								
								if($services) { ?>
									<div class="plan-desc">
										<?php echo $services; ?>
									</div>
								<?php } 

								if( $button ) {
									echo glide_acf_button( $button, 'button' );
								} ?>

							</div>

						<?php } } ?>
					</div>

				</div>
			</div>
		</section>

</div>
