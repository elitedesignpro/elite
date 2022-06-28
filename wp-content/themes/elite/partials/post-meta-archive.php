<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */
$pID = get_the_ID();
$author_id = $post->post_author;

// Post ACf fields
// Author profile image

// Author profile image
if (function_exists('get_field') ) {
	$elitedesign_author_avatar = get_field('elitedesign_author_avatar', 'user_'.$author_id);
}

if(!$elitedesign_author_avatar){
	$elitedesign_author_avatar =  get_avatar_url($author_id);
}

// Get author name with fallback to display name
 if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$elitedesign_author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} else if ( get_the_author_meta( 'display_name', $author_id ) ) {
	$elitedesign_author_name = get_the_author_meta( 'display_name', $author_id );
}

// Post Tags & Categories
$elitedesign_post_tag = get_the_tags($pID);

 ?> <div class="post-box-meta d-flex justify-content-between">
	<div class="post-date"><?php the_time( project_dtformat ); ?></div> <?php if($elitedesign_post_tag){ ?> <div
		class="ac-post-cat"> <?php foreach ($elitedesign_post_tag as $category ) { ?> <a
			href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a> <?php } ?> </div> <?php } ?>
</div>
