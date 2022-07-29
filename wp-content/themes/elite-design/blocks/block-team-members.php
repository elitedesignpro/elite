<?php
/**
 * Block Name: Team Members
 *
 * The template for displaying the custom gutenberg block named Team Members.
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
$elitedesign_tmmmbrs_title = $block_fields['elitedesign_tmmmbrs_title']; 
$elitedesign_tmmmbrs_sl_vari = $block_fields['elitedesign_tmmmbrs_sl_vari']; 
$elitedesign_tmmmbrs_select = $block_fields['elitedesign_tmmmbrs_select']; 
$elitedesign_tmmmbrs_text = html_entity_decode($block_fields['elitedesign_tmmmbrs_text']);
$elitedesign_tmmmbrs_btn1 = $block_fields['elitedesign_tmmmbrs_btn1']; 
$elitedesign_tmmmbrs_btn2 = $block_fields['elitedesign_tmmmbrs_btn2']; 





?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

	

		<section>
			<div class="wrapper">
				<div class="team-ctn team-blk flex">
					<div class="team-blk-images col-50 blue-bg rd-10">

						<?php
							global $post;
							$lp_select_posts = array();
							$lp_select_posts = $block_fields['elitedesign_tmmmbrs_select'];
							if ( $lp_select_posts ) :
								foreach ( $lp_select_posts as $lp_posts ) :
									$post = $lp_posts;
									setup_postdata( $post );
									$pID         = $post->ID;
									$post_fields = get_fields( $pID );
									$src         = wp_get_attachment_image_src( get_post_thumbnail_id( $pID ), 'full', false );
									if ( ! $src ) {
										$src = get_template_directory_uri() . '/assets/img/default-project-image.jpg';
									} else {
										$src = $src[0]; 
									} ?>
										<div class="member-image">
											<img src="<?php echo $src; ?>" alt="" />
										</div>
									<?php

							endforeach; endif; wp_reset_query();
						?>
						
					</div>
					<div class="team-blk-content col-50">
		
						<?php if($elitedesign_tmmmbrs_title) { ?>
							<h2 class="heading-3"><?php echo $elitedesign_tmmmbrs_title; ?></h2>
						<?php } ?>

						<div class="med-body">
							<?php 
								if($elitedesign_tmmmbrs_text){
									echo $elitedesign_tmmmbrs_text;
								}
							?>
						</div>

						<?php
							if( $elitedesign_tmmmbrs_btn1 ) :
								echo glide_acf_button( $elitedesign_tmmmbrs_btn1, 'button arrow-btn fill' );
							endif;
						?>

						<?php
							if( $elitedesign_tmmmbrs_btn1 ) :
								echo glide_acf_button( $elitedesign_tmmmbrs_btn1, 'button arrow-btn' );
							endif;
						?>
					</div>
				</div>
			</div>
		</section>
</div>
<svg class="svg">
		<clipPath id="small-team" clipPathUnits="objectBoundingBox">
			<path
				d="M0.725,0.05 C0.816,0.091,0.903,0.148,0.953,0.232 C1,0.315,1,0.414,0.999,0.509 C0.997,0.605,0.995,0.705,0.939,0.784 C0.883,0.862,0.786,0.899,0.696,0.936 C0.605,0.973,0.512,1,0.414,0.998 C0.315,0.986,0.225,0.936,0.153,0.869 C0.082,0.804,0.037,0.718,0.014,0.627 C-0.008,0.537,-0.003,0.444,0.025,0.355 C0.054,0.267,0.103,0.186,0.175,0.124 C0.249,0.061,0.339,0.017,0.436,0.004 C0.535,-0.009,0.634,0.01,0.725,0.05">
			</path>
		</clipPath>
	</svg>
	<svg class="svg">
		<clipPath id="large-team" clipPathUnits="objectBoundingBox">
			<path
				d="M0.612,0.025 C0.74,0.057,0.866,0.117,0.937,0.232 C1,0.348,1,0.491,0.982,0.625 C0.951,0.759,0.887,0.89,0.77,0.957 C0.656,1,0.519,1,0.393,0.967 C0.271,0.934,0.155,0.877,0.084,0.77 C0.01,0.658,-0.016,0.52,0.01,0.388 C0.037,0.252,0.109,0.123,0.226,0.053 C0.341,-0.017,0.482,-0.008,0.612,0.025">
			</path>
		</clipPath>
	</svg>