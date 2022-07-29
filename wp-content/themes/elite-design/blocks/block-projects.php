<?php
/**
 * Block Name: Projects
 *
 * The template for displaying the custom gutenberg block named Projects.
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

$elitedesign_blk_prjt_tkicker_text = $block_fields['elitedesign_blk_prjt_tkicker_text'];

$elitedesign_blk_prjt_title = $block_fields['elitedesign_blk_prjt_title'];

$elitedesign_blk_prjt_slct_projects = $block_fields['elitedesign_blk_prjt_slct_projects'];

?>

<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">
	<section class="overflow-hidden cat-bg ctn">
		<div class="wrapper">
			<div class="projects-ctn horizontal-scroll-container">
				<div class="section-head mb-50 ma-900">
					<?php if($elitedesign_blk_prjt_tkicker_text){ ?>
						<div class="overline"><?php echo $elitedesign_blk_prjt_tkicker_text; ?></div>
					<?php } ?>

					<?php if($elitedesign_blk_prjt_title){ ?>
						<h2><?php echo $elitedesign_blk_prjt_title; ?></h2>
					<?php } ?>
				</div>
				<div class="projects-area  horizontal-scroll">
					<?php 
						global $post;
						$lp_select_posts = array();
						$lp_select_posts = $block_fields['elitedesign_blk_prjt_slct_projects'];
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
								}
								?>
								<div class="single-project">
									<a href="<?php the_permalink(); ?>" class="project-image img-cover">
										<img src="<?php echo $src; ?>" alt="<?php the_title(); ?>" class="rd-10">
									</a>
									<div class="project-desc">
										<h3 class="heading-4">
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</h3>
										<div class="project-cat">
											<a href="#">Branding </a> / 
											<a href="#">Product </a> / 
											<a href="#">Development</a>
										</div>
									</div>
								</div>
								<?php
						
							endforeach; 
						endif; wp_reset_query();
							



					?>
				</div>
			</div>
		</div>
	</section>
	

</div>
