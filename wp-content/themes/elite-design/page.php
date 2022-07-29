<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ELITE Design
 * @since 1.0.0
 *
 */

// Include header
get_header();

// Global variables
global $option_fields;
global $pID;
global $fields;


$elitedesign_dflt_hero_kicker = (isset($fields['elitedesign_dflt_hero_kicker'])) ? $fields['elitedesign_dflt_hero_kicker'] : null;
$elitedesign_dflt_hero_title = (isset($fields['elitedesign_dflt_hero_title'])) ? $fields['elitedesign_dflt_hero_title'] : null;
$elitedesign_dflt_hero_text = (isset($fields['elitedesign_dflt_hero_text'])) ? $fields['elitedesign_dflt_hero_text'] : null;
$elitedesign_dflt_hero_btn_one = (isset($fields['elitedesign_dflt_hero_btn_one'])) ? $fields['elitedesign_dflt_hero_btn_one'] : null;
$elitedesign_dflt_hero_btn_two = (isset($fields['elitedesign_dflt_hero_btn_two'])) ? $fields['elitedesign_dflt_hero_btn_two'] : null;
if(!$elitedesign_dflt_hero_title){
	$elitedesign_dflt_hero_title = get_the_title();
}

?>

	<!-- Hero Start -->
	<section id="hero-section" class="hero-section">
		<div class="hero-ctn">
			<div class="wrapper">
				<div class="hero-content">
					<div class="overline">Toolkit page</div>
					<h1><?php echo $elitedesign_dflt_hero_title; ?></h1>
					<p><?php echo $elitedesign_dflt_hero_text; ?></p>
					<a href="<?php echo $elitedesign_dflt_hero_btn_one['url']; ?>" target="<?php echo $elitedesign_dflt_hero_btn_one['target']; ?>" class="button"><?php echo $elitedesign_dflt_hero_btn_one['title']; ?></a>
					<a href="<?php echo $elitedesign_dflt_hero_btn_two['url']; ?>" target="<?php echo $elitedesign_dflt_hero_btn_two['target']; ?>" class="button"><?php echo $elitedesign_dflt_hero_btn_two['title']; ?></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero End -->

<section id="page-section" class="page-section">
	<!-- Content Start -->

	<?php while ( have_posts() ) { the_post();
		//Include specific template for the content.
		get_template_part( 'partials/content', 'page' );

	} ?>

	<div class="clear"></div>
	<div class="ts-80"></div>

	<!-- Content End -->
</section>

<?php get_footer(); ?>
