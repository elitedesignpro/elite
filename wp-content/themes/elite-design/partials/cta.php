<?php
/**
 * Template part for footer cta
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/
 *
 * @package ELITE Design
 * @since 1.0.0
 */


// Global variables
global $option_fields;
global $pID;
global $fields;



$elitedesign_pgecta_visibility = (isset($fields['elitedesign_pgecta_visibility'])) ? $fields['elitedesign_pgecta_visibility'] : null;

// Theme options CTA Title
$elitedesign_ftrcta_title = ( isset($option_fields['elitedesign_ftrcta_title']) ) ? $option_fields['elitedesign_ftrcta_title'] : null;
// Page options CTA Title
$elitedesign_pgecta_title = ( isset($fields['elitedesign_pgecta_title']) ) ? $fields['elitedesign_pgecta_title'] : $elitedesign_ftrcta_title;

// Theme options CTA Button
$elitedesign_ftrcta_button = ( isset($option_fields['elitedesign_ftrcta_button']) ) ? $option_fields['elitedesign_ftrcta_button'] : null;
// Page options CTA Button
$elitedesign_pgecta_button = ( isset($fields['elitedesign_pgecta_button']) ) ? $fields['elitedesign_pgecta_button'] : $elitedesign_ftrcta_button;




?>
 <section id="cta-section" class="cta-section">
	<!-- cta Start -->
		<?php if($elitedesign_pgecta_visibility) { ?>
			<div class="cta-ctn">
				<div class="flex">
					<?php if($elitedesign_pgecta_title) { ?>
						<h4><?php echo $elitedesign_pgecta_title; ?></h4>
					<?php } ?>
					<?php if($elitedesign_pgecta_button) { ?>
						<a href="<?php echo $elitedesign_pgecta_button['url']; ?>" class="button"><?php echo $elitedesign_pgecta_button['title']; ?></a>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
	<!-- cta End -->
</section>
