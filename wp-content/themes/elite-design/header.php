<?php
/**
 * The template for displaying website header
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ELITE Design
 * @since 1.0.0
 *
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
// Page Tags - Advanced custom fields variables
$tracking 			= (isset($option_fields['tracking_code'])) ? $option_fields['tracking_code'] : null;
$ccss 			= (isset($option_fields['custom_css'])) ? $option_fields['custom_css'] : null;
$hscripts 			= (isset($option_fields['head_scripts'])) ? $option_fields['head_scripts'] : null;
$bscripts 			= (isset($option_fields['body_scripts'])) ? $option_fields['body_scripts'] : null;

$elitedesign_tohdr_btn = $option_fields["elitedesign_tohdr_btn"];

// Page variables - Advanced custom fields variables
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> <?php
		// Add Head Scripts
		if ( $hscripts != '' ) {
			echo html_entity_decode($hscripts,ENT_QUOTES);
		}
	?>
	<link rel="apple-touch-icon" sizes="180x180"
		href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32"
		href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16"
		href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/favicon-16x16.png">
	<link rel="icon" sizes="any" href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/favicon.ico">
	<link rel="icon" type="image/svg+xml" href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/icon.svg">
	<link rel="manifest" href="<?php echo esc_url( get_template_directory_uri()) ?>/assets/img/pwa/site.webmanifest">
	<meta name="theme-color" content="#0047FE">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="application-name" content="ELITE Design">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton_color" content="#0047FE">
	<meta name="msapplication-TileColor" content="#0047FE">
	<meta name="msapplication-tap-highlight" content="no">
	<meta name="msapplication-TileImage"
		content="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/pwa/pwa-icon-144.png">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0047FE"> <?php
		// Tracking Code
		if ( $tracking != '' ) {
			echo html_entity_decode($tracking,ENT_QUOTES);
		}

		// Custom CSS
		if ( $ccss != '' ) {
			echo '<style type="text/css">';
			echo html_entity_decode($ccss ,ENT_QUOTES);
			echo '</style>';
		}
	?> <?php wp_head(); ?> <script>
	"serviceWorker" in navigator && window.addEventListener("load", function() {
		navigator.serviceWorker.register("/sw.js").then(function(e) {
			console.log("ServiceWorker registration successful with scope: ", e.scope)
		}, function(e) {
			console.log("ServiceWorker registration failed: ", e)
		})
	});
	</script>
</head>

<body <?php body_class(); ?>> <?php wp_body_open(); ?> <?php if ( $bscripts != '' ) { ?> <div style="display: none;">
		<?php echo html_entity_decode($bscripts,ENT_QUOTES); ?> </div> <?php } ?> <a class="skip-link screen-reader-text"
		href="#page-section"><?php esc_html_e( 'Skip to content', 'elitedesign_td' ); ?></a>
	<header id="header-section" class="header-section">
		<!-- Header Start -->
		<div class="header-wrapper header-inner">
			<div class="header-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/site-logo.svg"
						alt="Site Logo" /></a>
			</div>
			<div class="right-header header-navigation">
				<div class="nav-overlay">
					<div class="nav-container">
						<div class="header-nav animated-hover"> <?php wp_nav_menu(
								array(
									'theme_location' => 'header-nav',
									'fallback_cb' => 'nav_fallback',
								)
							); ?> </div>

					</div>
				</div>
				<div class="menu-btn">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
			</div>
			 <?php if($elitedesign_tohdr_btn){ ?>
				 <div class="header-btns">
					 <?php if( $elitedesign_tohdr_btn ) {
							echo glide_acf_button( $elitedesign_tohdr_btn, 'button' );
						} ?>
				</div>
			<?php } ?>
			<!-- header buttons -->
		</div>
		<!-- Header End -->
	</header>
	<!-- Main Area Start -->
	<main id="main-section" class="main-section">
