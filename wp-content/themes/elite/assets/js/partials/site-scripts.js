/**
 * Sticky Header
 * Adds a class to header on scroll
 */

jQuery(document).on("scroll", function () {
	if (jQuery(document).scrollTop() > 0) {
		jQuery("header, body").addClass("shrink");
	} else {
		jQuery("header, body").removeClass("shrink");
	}
});

/**
 * Document Ready Function
 * Triggered when document get's ready
 */
jQuery(document).ready(function (jQuery) {

	/**
	 * Toggle menu for mobile
	 */
	jQuery(".menu-btn").click(function () {
		jQuery(this).toggleClass("active");
		jQuery(".nav-overlay").toggleClass("open");
		jQuery("html, body").toggleClass("no-overflow");
		jQuery(".header-nav ul li.active").removeClass("active");
		jQuery(".header-nav ul.sub-menu").slideUp();
	});

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */
	jQuery("li").each(function () {
		if (jQuery(this).hasClass("menu-item-has-children")) {
			jQuery(this).prepend('<span class="submenu-icon"></span>');
		}
	});

	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */
	jQuery(".header-nav .submenu-icon").click(function () {
		const link = jQuery(this);
		const closestUl = link.closest("ul");
		const parallelActiveLinks = closestUl.find(".active");
		const closestLi = link.closest("li");
		const linkStatus = closestLi.hasClass("active");
		let count = 0;

		closestUl.find("ul").slideUp(function () {
			if (++count === closestUl.find("ul").length) {
				parallelActiveLinks.removeClass("active");
			}
		});

		if (!linkStatus) {
			closestLi.children("ul").slideDown();
			closestLi.addClass("active");
		}
	});

	/**
	 *
	 * Video
	 *
	 */

	jQuery('a.video-btn').magnificPopup({
		type: 'iframe'
	});

});
