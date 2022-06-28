<?php
/**
 * The template for displaying website footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ELITE Design
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


$elitedesign_schema_check = $option_fields['elitedesign_schema_check'];
if($elitedesign_schema_check){
	$elitedesign_schema_business_name 			= html_entity_remove($option_fields['elitedesign_schema_business_name']);
	$elitedesign_schema_business_legal_name 	= html_entity_remove($option_fields['elitedesign_schema_business_legal_name']);
	$elitedesign_schema_street_address 		= html_entity_remove($option_fields['elitedesign_schema_street_address']);
	$elitedesign_schema_locality 				= html_entity_remove($option_fields['elitedesign_schema_locality']);
	$elitedesign_schema_region 				= html_entity_remove($option_fields['elitedesign_schema_region']);
	$elitedesign_schema_postal_code 			= html_entity_remove($option_fields['elitedesign_schema_postal_code']);
	$elitedesign_schema_map_short_link 		= html_entity_remove($option_fields['elitedesign_schema_map_short_link']);
	$elitedesign_schema_latitude 				= html_entity_remove($option_fields['elitedesign_schema_latitude']);
	$elitedesign_schema_longitude 				= html_entity_remove($option_fields['elitedesign_schema_longitude']);
	$elitedesign_schema_opening_hours 			= html_entity_remove($option_fields['elitedesign_schema_opening_hours']);
	$elitedesign_schema_telephone 				= html_entity_remove($option_fields['elitedesign_schema_telephone']);
	$elitedesign_schema_business_email 		= html_entity_remove($option_fields['elitedesign_schema_business_email']);
	$elitedesign_schema_business_logo 			= html_entity_remove($option_fields['elitedesign_schema_business_logo']);
	$elitedesign_schema_price_range 			= html_entity_remove($option_fields['elitedesign_schema_price_range']);
	$elitedesign_schema_type 					= html_entity_remove($option_fields['elitedesign_schema_type']);
}
// Custom - ACF variables.

$elitedesign_ftr_phone = ( isset( $option_fields['elitedesign_ftr_phone'] ) ) ? $option_fields['elitedesign_ftr_phone'] : null;
$elitedesign_ftr_email = ( isset( $option_fields['elitedesign_ftr_email'] ) ) ? $option_fields['elitedesign_ftr_email'] : null;

$elitedesign_social_in = ( isset( $option_fields['elitedesign_social_in'] ) ) ? $option_fields['elitedesign_social_in'] : null;
$elitedesign_social_fb = ( isset( $option_fields['elitedesign_social_fb'] ) ) ? $option_fields['elitedesign_social_fb'] : null;
$elitedesign_social_tw = ( isset( $option_fields['elitedesign_social_tw'] ) ) ? $option_fields['elitedesign_social_tw'] : null;
$elitedesign_social_li = ( isset( $option_fields['elitedesign_social_li'] ) ) ? $option_fields['elitedesign_social_li'] : null;

// Copyright Text
$elitedesign_ftr_copyright_text = ( isset( $option_fields['elitedesign_ftr_copyright_text'] ) ) ? $option_fields['elitedesign_ftr_copyright_text'] : null;


?> </main>
<footer id="footer-section" class="footer-section">
	<!-- Footer Start -->
	<div class="wrapper">
		<?php get_template_part( 'partials/cta' ); ?>
	</div>
		<div class="wrapper">
			<div class="footer-ctn flex-ctn">
				<div class="footer-left">
					<div class="footer-logo">
						<a href="#">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.svg" alt="Footer Logo" />
						</a>
					</div>
					<div class="site-socials">
						<div class="big-body">Follow Us</div>
						<ul class="flexarea">
							<li>
								<a href="#">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook-icon.svg" alt="" />
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/twitter-icon.svg" alt="" />
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram-icon.svg" alt="" />
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pinterest-icon.svg" alt="" />
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="footer-right">
					<div class="footer-menu-widgets flexarea">
						<div class="footer-widget footer-nav animated-hover">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer-nav-one',
									'fallback_cb'    => 'nav_fallback',
								)
							);
							?> 
						</div>
						<div class="footer-widget footer-nav animated-hover">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'footer-nav-two',
										'fallback_cb'    => 'nav_fallback',
									)
								);
							?>
						</div>
					</div>
					<div class="elitedesign-contact animated-hover">
						<div class="big-body"><b>Phone:</b> <a href="tel:<?php echo $elitedesign_ftr_email; ?>"><?php echo $elitedesign_ftr_phone; ?></a></div>
						<div class="big-body"><b>Email:</b> <a href="mailto:<?php echo $elitedesign_ftr_email; ?>"><?php echo $elitedesign_ftr_email; ?></a></div>
					</div>
				</div>
				<!-- <div class="single-widget"> <?php if ( $elitedesign_ftrop_title ) { ?>
					<div class="footer-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo-white.svg" alt="Logo" />
						</a>
					</div>
					<h5> <?php echo html_entity_decode( $elitedesign_ftrop_title ); ?></h5> <?php } ?>
					<?php if($elitedesign_ftrop_text){ ?>
						<div class="address"><?php echo $elitedesign_ftrop_text; ?></div>
					<?php } ?>
					<div class="social-icons d-flex">
						<?php if($elitedesign_social_fb){ ?><a href="<?php echo $elitedesign_social_fb; ?>" target="_blank" class="facebook flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/facebook-icon.svg" alt="Facebook Icon" /></a><?php } ?>
						<?php if($elitedesign_social_tw){ ?><a href="<?php echo $elitedesign_social_tw; ?>" target="_blank" class="tweeter flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/linkedin-icon.svg" alt="LinkedIn Icon" /></a><?php } ?>
						<?php if($elitedesign_social_li){ ?><a href="<?php echo $elitedesign_social_li; ?>" target="_blank" class="linkdhin flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/twitter-icon.svg" alt="Twitter Icon" /></a><?php } ?>
						<?php if($elitedesign_social_in){ ?><a href="<?php echo $elitedesign_social_in; ?>" target="_blank" class="instagram flex-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/instagram-icon.svg" alt="Instagram Icon" /></a><?php } ?>
					</div>
				</div> -->
			</div>
			<div class="footer-bottom flex">
					<div class="copyright-area big-body animated-hover">
						<?php if($elitedesign_ftr_copyright_text){ ?>
							<p><?php echo $elitedesign_ftr_copyright_text; ?> Site by <a href="#">ELITE</a></p>
						<?php } ?>
				</div>
				<div class="legal-nav animated-hover">
				<?php
						wp_nav_menu(
							array(
								'theme_location' => 'legal-nav',
								'fallback_cb'    => 'nav_fallback',
							)
						);
						?>
				</div>
			</div>
			
		</div>
	<!-- Footer End --> <?php if($elitedesign_schema_check){ ?> <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "<?php echo $elitedesign_schema_type; ?>",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "<?php echo $elitedesign_schema_locality; ?>",
			"addressRegion": "<?php echo $elitedesign_schema_region; ?>",
			"postalCode": "<?php echo $elitedesign_schema_postal_code; ?>",
			"streetAddress": "<?php echo $elitedesign_schema_street_address; ?>"
		},
		"hasMap": "<?php echo $elitedesign_schema_map_short_link; ?>",
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "<?php echo $elitedesign_schema_latitude; ?>",
			"longitude": "<?php echo $elitedesign_schema_longitude; ?>"
		},
		"name": "<?php echo $elitedesign_schema_business_name; ?>",
		"openingHours": "<?php echo $elitedesign_schema_opening_hours; ?>",
		"telephone": "<?php echo $elitedesign_schema_telephone; ?>",
		"email": "<?php echo $elitedesign_schema_business_email; ?>",
		"url": "<?php echo esc_url( home_url() ); ?>",
		"image": "<?php echo $elitedesign_schema_business_logo; ?>",
		"legalName": "<?php echo $elitedesign_schema_business_legal_name; ?>",
		"priceRange": "<?php echo $elitedesign_schema_price_range; ?>"
	}
	</script> <?php } ?>
</footer> <?php wp_footer(); ?> <?php if ( $footer_scripts != '' ) { ?> <div style="display: none;">
	<?php echo html_entity_decode($footer_scripts,ENT_QUOTES ); ?> </div> <?php } ?> </body>

</html>
