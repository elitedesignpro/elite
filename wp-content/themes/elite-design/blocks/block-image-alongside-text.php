<?php
/**
 * Block Name: Image Alongside Text
 *
 * The template for displaying the custom gutenberg block named Image Alongside Text.
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

$elitedesign_iat_title 	= $block_fields['elitedesign_iat_title'];
$elitedesign_iat_text 		= html_entity_decode($block_fields['elitedesign_iat_text']);
$elitedesign_iat_button	= $block_fields['elitedesign_iat_button'];
$elitedesign_iat_img_location 	= $block_fields['elitedesign_iat_img_location'];
$elitedesign_iat_image 	= $block_fields['elitedesign_iat_image'];




if($elitedesign_iat_img_location == 'left'){
	$elitedesign_iat_img_location = "image-at-left";
}else{
	$elitedesign_iat_img_location = "image-at-right";
}


?>
<div id="<?php echo $id; ?>" class="<?php echo $align_class . ' ' . $class_name. ' ' . $name; ?> glide-block-<?php echo $block_glide_name; ?>">

		<section>
			<div class="wrapper">
				<div class="iat-ctn flex <?php echo $elitedesign_iat_img_location; ?>">
					<?php if($elitedesign_iat_image) { ?>
						<div class="iat-img-area img-cover col-645 rd-10">
							<img src="<?php echo $elitedesign_iat_image; ?>" alt="Image alongside text image" />
						</div>
					<?php } ?>
					<div class="iat-content-area col-595">
						<?php if($elitedesign_iat_title) { ?>
							<h2><?php echo $elitedesign_iat_title; ?></h2>
						<?php } ?>
						<?php if($elitedesign_iat_text) { ?>
							<div class="big-body">
								<?php echo $elitedesign_iat_text; ?>
							</div>
						<?php } ?>
						<?php if($elitedesign_iat_button) { ?>
							<a href="<?php echo $elitedesign_iat_button['url'] ?>" target="<?php echo $elitedesign_iat_button['target'] ?>" class="button arrow-btn fill"><?php echo $elitedesign_iat_button['title']; ?></a>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>

</div>
