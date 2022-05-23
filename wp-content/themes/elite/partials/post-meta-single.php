<?php
/**
 * Template part for displaying content of about us page.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package BaseTheme Package
 * @since 1.0.0
 *
 */

$pID = get_the_ID();
$author_id = $post->post_author;

// Post ACf fields
// Author profile image
if (function_exists('get_field') ) {
	$basthemevar_author_avatar = get_field('basthemevar_author_avatar', 'user_'.$author_id);
}

if(!$basthemevar_author_avatar){
	$basthemevar_author_avatar =  get_avatar_url($author_id);
}

// Get author name with fallback to display name
 if ( get_the_author_meta( 'first_name', $author_id ) || get_the_author_meta( 'last_name', $author_id ) ) {
	$basethemevar_author_name = get_the_author_meta( 'first_name', $author_id ) . ' ' . get_the_author_meta( 'last_name', $author_id );
} else if ( get_the_author_meta( 'display_name', $author_id ) ) {
	$basethemevar_author_name = get_the_author_meta( 'display_name', $author_id );
}

// Post Tags & Categories
$basethemevar_post_tags = get_the_tags($pID);
$basethemevar_post_categories = get_categories($pID);

?> <div class="post-meta-ctn">
	<div class="post-date"><?php the_time( project_dtformat ); ?></div>
	<div class="post-author">
		<div class="post-author-img"
			style="background-image: url(<?php echo $basthemevar_author_avatar; ?>); width:50px; height:50px; background-size:cover">
		</div>
		<div class="post-author-name">By: <?php echo $basethemevar_author_name; ?></div>
	</div> <?php if($basethemevar_post_tags){ ?> <div class="post-tags"> <?php foreach ($basethemevar_post_tags as $tag ) { ?> <a
			href="<?php echo get_tag_link($tag); ?>"><?php echo $tag->name; ?></a> <?php } ?> </div>
	<!-- /.post-tags --> <?php } ?> <?php if($basethemevar_post_categories){ ?> <div class="post-cat">
		<?php foreach ($basethemevar_post_categories as $category ) { ?> <a
			href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a> <?php } ?> </div>
	<!-- /.post-cat --> <?php } ?>
</div>