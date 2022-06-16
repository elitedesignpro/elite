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



	/**
	 *
	 * Images Slider
	 *
	 */
	 jQuery('.images-slider-ctn').owlCarousel({
		loop:true,
		nav:false,
		dots: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	});



	/**
	 *
	 * Testimonial Slider
	 *
	 */

	 jQuery('.testi-ctn').owlCarousel({
		loop:false,
		nav:true,
		dots: false,
		margin: 30,
		responsive:{
			0:{
				items:1
			}
		}
	});


	/**
	 *
	 * Large Text Slider
	 *
	 */

	 jQuery('.cta-bottom-text').owlCarousel({
		loop:true,
		nav:false,
		dots: false,
		autowwidth: true,
		autoplay:true,
		slideTransition: "linear",
		autoplayTimeout: 10000,
		autoplaySpeed: 10000,
		responsive:{
			0:{
				items:1,
			}
		}
	});

		  /**
	 *
	 *
	 *	Stat counter
	 *
	 *
	 */




	 if (jQuery(".stats-inner-area").length > 0) {
		let a = 0;
		jQuery(window).scroll(function() {
			const oTop = jQuery(".stats-ctn").offset().top - window.innerHeight;
			if (a == 0 && jQuery(window).scrollTop() > oTop) {
				jQuery(".fig-number").each(function() {
					const $this = jQuery(this),
						countTo = $this.attr("data-number");
					jQuery({
						countNum: $this.text(),
					}).animate(
						{
							countNum: countTo,
						},

						{
							duration: 1000,
							easing: "swing",
							step() {
								//$this.text(Math.ceil(this.countNum));
								$this.text(Math.ceil(this.countNum).toLocaleString("en"));
							},
							complete() {
								$this.text(Math.ceil(this.countNum).toLocaleString("en"));
							},
						},
					);
				});
				a = 1;
			}
		});
	}
	jQuery.noConflict();

	/**
	 *
	 *    Scroll Magic For Slider
	 *
	 **/


	//Create new scrollmagic controller
    var controller = new ScrollMagic.Controller();

    //Create horizontal scroll slide gsap function
    var horizontalSlide = new TimelineMax()
      .to(".horizontal-scroll", 3,   {x: "-65%"}); //Depends on the final width you want to scroll.

    // Create scrollmagic scene to pin and link horzontal scroll animation
    new ScrollMagic.Scene({
        triggerElement: ".horizontal-scroll-container", //Div that will trigger the animation.
        triggerHook: "onLeave", //The animation will start on leaving the .horizontal-scroll-container section.
        duration: "200%" //Scroll Duration, the amount of pixels you want to scroll to see the entire animation.
    })
    .setPin(".horizontal-scroll-container")
    .setTween(horizontalSlide)
    .addIndicators() // add indicators (requires scrollmagic indicators plugin)
    .addTo(controller);

});
