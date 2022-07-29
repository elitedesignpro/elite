<?php
/**
 * Template part for displaying posts in an archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ELITE Design
 * @since 1.0.0
 */


?> 
<div class="single-project">
	<a href="<?php the_permalink(); ?>"> 
					<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail('thumb_600',array(
							'alt'   => get_the_title(),
							'title' => get_the_title(),
						)
					); ?> 
					<?php } else { ?> 
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/default-project-image.jpg" class=""
		alt="<?php get_the_title(); ?>" title="<?php get_the_title(); ?>">
		<?php } ?> 
	</a>
	<div class="project-desc">
		<h3 class="heading-4"><a href="<?php the_permalink(); ?>"><?php get_the_title(); ?></a></h3>
		<div class="project-cat">
			<a href="#">Branding </a> / 
			<a href="#">Product </a> / 
			<a href="#">Development</a>
		</div>
	</div>
</div>
