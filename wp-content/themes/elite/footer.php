<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BaseTheme Package
 * @since 1.0.0
 */
// Global variables
global $option_fields;
global $pID;
global $fields;

$pID = get_the_ID();

if ( is_home() ) {
	$pID = get_option( 'page_for_posts' );
}

if ( is_404() || is_archive() || is_category() || is_search() ) {
	$pID = get_option( 'page_on_front' );
}

if (function_exists('get_fields') && function_exists('get_fields_escaped')) {
	$option_fields = get_fields_escaped( 'option' );
	$fields        = get_fields_escaped( $pID );
}
?> <?php

// Default Footer Options

$footer_scripts = (isset($option_fields['footer_scripts'])) ? $option_fields['footer_scripts'] : null;



// Schema Markup - ACF variables.


$basethemevar_schema_check = $option_fields['basethemevar_schema_check'];
if($basethemevar_schema_check){
	$basethemevar_schema_business_name 			= html_entity_remove($option_fields['basethemevar_schema_business_name']);
	$basethemevar_schema_business_legal_name 	= html_entity_remove($option_fields['basethemevar_schema_business_legal_name']);
	$basethemevar_schema_street_address 		= html_entity_remove($option_fields['basethemevar_schema_street_address']);
	$basethemevar_schema_locality 				= html_entity_remove($option_fields['basethemevar_schema_locality']);
	$basethemevar_schema_region 				= html_entity_remove($option_fields['basethemevar_schema_region']);
	$basethemevar_schema_postal_code 			= html_entity_remove($option_fields['basethemevar_schema_postal_code']);
	$basethemevar_schema_map_short_link 		= html_entity_remove($option_fields['basethemevar_schema_map_short_link']);
	$basethemevar_schema_latitude 				= html_entity_remove($option_fields['basethemevar_schema_latitude']);
	$basethemevar_schema_longitude 				= html_entity_remove($option_fields['basethemevar_schema_longitude']);
	$basethemevar_schema_opening_hours 			= html_entity_remove($option_fields['basethemevar_schema_opening_hours']);
	$basethemevar_schema_telephone 				= html_entity_remove($option_fields['basethemevar_schema_telephone']);
	$basethemevar_schema_business_email 		= html_entity_remove($option_fields['basethemevar_schema_business_email']);
	$basethemevar_schema_business_logo 			= html_entity_remove($option_fields['basethemevar_schema_business_logo']);
	$basethemevar_schema_price_range 			= html_entity_remove($option_fields['basethemevar_schema_price_range']);
	$basethemevar_schema_type 					= html_entity_remove($option_fields['basethemevar_schema_type']);
}
// Custom - ACF variables.

$basethemevar_ftrop_title = ( isset( $option_fields['basethemevar_ftrop_title'] ) ) ? $option_fields['basethemevar_ftrop_title'] : null;
$basethemevar_ftrop_text = html_entity_decode($option_fields['basethemevar_ftrop_text']);
$basethemevar_ftrop_copyright = html_entity_decode($option_fields['basethemevar_ftrop_copyright']);
$basethemevar_social_fb = ( isset( $option_fields['basethemevar_social_fb'] ) ) ? $option_fields['basethemevar_social_fb'] : null;
$basethemevar_social_tw = ( isset( $option_fields['basethemevar_social_tw'] ) ) ? $option_fields['basethemevar_social_tw'] : null;
$basethemevar_social_li = ( isset( $option_fields['basethemevar_social_li'] ) ) ? $option_fields['basethemevar_social_li'] : null;
$basethemevar_social_in = ( isset( $option_fields['basethemevar_social_in'] ) ) ? $option_fields['basethemevar_social_in'] : null;

?> <?php get_template_part( 'partials/cta' ); ?> </main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="footer-ctn">
		<div class="wrapper">

			<div class="footer-widgets d-flex justify-content-between flex-wrap">
				<div class="single-widget"> <?php if ( $basethemevar_ftrop_title ) { ?>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo-white.svg" alt="Logo" />
						</a>
					</div>
					<h5> <?php echo html_entity_decode( $basethemevar_ftrop_title ); ?></h5> <?php } ?>
					<?php if($basethemevar_ftrop_text){ ?>
						<div class="address"><?php echo $basethemevar_ftrop_text; ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php if($basethemevar_social_fb){ ?><a href="<?php echo $basethemevar_social_fb; ?>" target="_blank" class="facebook flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook-icon.svg" alt="Facebook Icon" /></a><?php } ?>
						<?php if($basethemevar_social_tw){ ?><a href="<?php echo $basethemevar_social_tw; ?>" target="_blank" class="tweeter flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/linkedin-icon.svg" alt="LinkedIn Icon" /></a><?php } ?>
						<?php if($basethemevar_social_li){ ?><a href="<?php echo $basethemevar_social_li; ?>" target="_blank" class="linkdhin flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/twitter-icon.svg" alt="Twitter Icon" /></a><?php } ?>
						<?php if($basethemevar_social_in){ ?><a href="<?php echo $basethemevar_social_in; ?>" target="_blank" class="instagram flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram-icon.svg" alt="Instagram Icon" /></a><?php } ?>
					</div>
				</div>
				<div class="single-widget">
					<div class="footer-nav"> <?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'nav_fallback',
								)
							);
							?> </div>
				</div>
				<div class="single-widget">
					<div class="footer-nav"> <?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-two',
									'fallback_cb'    => 'nav_fallback',
								)
							);
							?> </div>
				</div>
				<div class="single-widget">
					<div class="footer-nav"> <?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-three',
									'fallback_cb'    => 'nav_fallback',
								)
							);
							?> </div>
				</div>
			</div>
			<div class="s-80"></div>
			<div class="footer-bottom d-flex align-items-center justify-content-between">
				<?php if($basethemevar_ftrop_copyright){ ?>
					<div class="copy-right"><?php echo $basethemevar_ftrop_copyright; ?></div>
				<?php } ?>
				<div class="legal-nav"> <?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'nav_fallback',
							)
						);
						?> </div>
			</div>
		</div>
	</div>
	<!-- Footer End --> <?php if($basethemevar_schema_check){ ?> <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo $basethemevar_schema_type; ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo $basethemevar_schema_locality; ?>",
			"addressRegion": "<?php echo $basethemevar_schema_region; ?>",
			"postalCode": "<?php echo $basethemevar_schema_postal_code; ?>",
			"streetAddress": "<?php echo $basethemevar_schema_street_address; ?>"
		},
		"hasMap": "<?php echo $basethemevar_schema_map_short_link; ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo $basethemevar_schema_latitude; ?>",
			"longitude": "<?php echo $basethemevar_schema_longitude; ?>"
		},
		"name": "<?php echo $basethemevar_schema_business_name; ?>",
		"openingHours": "<?php echo $basethemevar_schema_opening_hours; ?>",
		"telephone": "<?php echo $basethemevar_schema_telephone; ?>",
		"email": "<?php echo $basethemevar_schema_business_email; ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo $basethemevar_schema_business_logo; ?>",
		"legalName": "<?php echo $basethemevar_schema_business_legal_name; ?>",
		"priceRange": "<?php echo $basethemevar_schema_price_range; ?>"
	}
	</script> <?php } ?>
</footer> <?php wp_footer(); ?> <?php if ( $footer_scripts != '' ) { ?> <div style="display: none;">
	<?php echo html_entity_decode($footer_scripts,ENT_QUOTES ); ?> </div> <?php } ?> </body>

</html>
