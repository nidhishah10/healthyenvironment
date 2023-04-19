/* Custom General jQuery
/*--------------------------------------------------------------------------------------------------------------------------------------*/
;
(function ($, window, document, undefined) {
	//Genaral Global variables
	//"use strict";
	var $win = $(window);
	var $doc = $(document);
	var $winW = function () {
		return $(window).width();
	};
	var $winH = function () {
		return $(window).height();
	};
	var $screensize = function (element) {
		$(element).width($winW()).height($winH());
	};

	var screencheck = function (mediasize) {
		if (typeof window.matchMedia !== "undefined") {
			var screensize = window.matchMedia("(max-width:" + mediasize + "px)");
			if (screensize.matches) {
				return true;
			} else {
				return false;
			}
		} else { // for IE9 and lower browser
			if ($winW() <= mediasize) {
				return true;
			} else {
				return false;
			}
		}
	};

	$doc.ready(function () {
		/*--------------------------------------------------------------------------------------------------------------------------------------*/
		// Remove No-js Class
		$("html").removeClass('no-js').addClass('js');

		$('.play').click(function () {
			var mediaVideo = $("#banner-video").get(0);
			if (mediaVideo.paused) {
				mediaVideo.play();
			}
		});
		$('.stop').click(function () {
			var mediaVideo = $("#banner-video").get(0);
			if (mediaVideo.play) {
				mediaVideo.pause();
			}
		});

		/* Get Screen size
		---------------------------------------------------------------------*/
		$win.on('load', function () {
			$win.on('resize', function () {
				$screensize('your selector');
			}).resize();
		});


		$(document).ready(function () {

			$('.fmenu li').removeClass('active ');

		});

		/* Menu ICon Append prepend for responsive
		---------------------------------------------------------------------*/
		$(window).on('resize', function () {
			if (screencheck(1023)) {
				if (!$('#menu').length) {
					$('#mainmenu').prepend('<a href="#" id="menu" class="menulines-button"><span class="menulines"></span> <em>Menu</em></a>');
				}
			} else {
				$("#menu").remove();
			}
		}).resize();

		$('#mainmenu > ul > li > .sub-menu').parent('li').addClass('has-submenu');
		$("#mainmenu > ul > li.has-submenu").prepend('<span class="navtrigger"></span>');

		$(".navtrigger").on('click', function () {
			if (screencheck(1023)) {
				if ($(this).parents("li.has-submenu").find("ul").is(':hidden')) {
					$(this).addClass('open');
					$(this).parents("li.has-submenu").find("ul").slideDown('normal');
				} else {
					$(this).removeClass('open');
					$(this).parents("li.has-submenu").find("ul").slideUp('normal');
				}
				return false;
			}
		});



		/* Tab Content box 
		---------------------------------------------------------------------*/
		var tabBlockElement = $('.tab-data');
		$(tabBlockElement).each(function () {
			var $this = $(this),
				tabTrigger = $this.find(".tabnav li"),
				tabContent = $this.find(".tabcontent");
			var textval = [];
			tabTrigger.each(function () {
				textval.push($(this).text());
			});
			$this.find(tabTrigger).first().addClass("active");
			$this.find(tabContent).first().show();

			$(tabTrigger).on('click', function () {
				$(tabTrigger).removeClass("active");
				$(this).addClass("active");
				$(tabContent).hide().removeClass('visible');
				var activeTab = $(this).find("a").attr("data-rel");
				$this.find('#' + activeTab).fadeIn('normal').addClass('visible');

				return false;
			});

			var responsivetabActive = function () {
				if (screencheck(767)) {
					if (!$this.find('.tabMobiletrigger').length) {
						$(tabContent).each(function (index) {
							$(this).before("<h2 class='tabMobiletrigger'>" + textval[index] + "</h2>");
							$this.find('.tabMobiletrigger:first').addClass("rotate");
						});
						$('.tabMobiletrigger').click('click', function () {
							var tabAcoordianData = $(this).next('.tabcontent');
							if ($(tabAcoordianData).is(':visible')) {
								$(this).removeClass('rotate');
								$(tabAcoordianData).slideUp('normal');
								//return false;
							} else {
								$this.find('.tabMobiletrigger').removeClass('rotate');
								$(tabContent).slideUp('normal');
								$(this).addClass('rotate');
								$(tabAcoordianData).not(':animated').slideToggle('normal');
							}
							return false;
						});
					}

				} else {
					if ($('.tabMobiletrigger').length) {
						$('.tabMobiletrigger').remove();
						tabTrigger.removeClass("active");
						$this.find(tabTrigger).removeClass("active").first().addClass('active');
						$this.find(tabContent).hide().first().show();
					}
				}
			};
			$(window).on('resize', function () {
				if (!$this.hasClass('only-tab')) {
					responsivetabActive();
				}
			}).resize();
		});

		/* Accordion box JS
		---------------------------------------------------------------------*/
		$('.accordion-databox').each(function () {
			var $accordion = $(this),
				$accordionTrigger = $accordion.find('.accordion-trigger'),
				$accordionDatabox = $accordion.find('.accordion-data');

			$accordionTrigger.first().addClass('open');
			$accordionDatabox.first().show();

			$accordionTrigger.on('click', function (e) {
				var $this = $(this);
				var $accordionData = $this.next('.accordion-data');
				if ($accordionData.is($accordionDatabox) && $accordionData.is(':visible')) {
					$this.removeClass('open');
					$accordionData.slideUp(400);
					e.preventDefault();
				} else {
					$accordionTrigger.removeClass('open');
					$this.addClass('open');
					$accordionDatabox.slideUp(400);
					$accordionData.slideDown(400);
				}
			});
		});


		/* Mobile menu click
		---------------------------------------------------------------------*/
		$(document).on('click', "#menu", function () {
			$(this).toggleClass('menuopen');
			$(this).next('ul').slideToggle('normal');
			return false;
		});


		/* Header Sticky
		---------------------------------------------------------------------*/
		if ($("#header").length) {
			$(window).scroll(function () {
				var headerHeight = 10;
				if ($(this).scrollTop() > headerHeight) {
					$("#header").addClass("sticky");
				} else {
					$("#header").removeClass("sticky");
				}
			});
			var header = document.querySelectorAll('#header');
			Stickyfill.add(header);
		}


		if ($('.top-product-slider').length) {
			$('.top-product-slider').owlCarousel({
				loop: true,
				nav: true,
				items: 3,
				dots: false,
				smartSpeed: 700,
				responsive: {
					0: {
						items: 1
					},
					568: {
						items: 1
					},
					1024: {
						items: 2
					},
					1200: {
						items: 3
					}
				}

			})
		}

		if ($('.partner-slider').length) {
			$('.partner-slider').owlCarousel({
				loop: true,
				nav: true,
				items: 2,
				smartSpeed: 700,
				responsive: {
					0: {
						items: 1,
					},
					568: {
						items: 2,
					}
				}
			})
		}

		if ($('.alert-slider').length) {
			$('.alert-slider').owlCarousel({
				loop: true,
				nav: true,
				dots: false,
				items: 3,
				margin: 60,
				smartSpeed: 700,
				responsive: {
					0: {
						items: 1,
						margin: 20,
					},
					768: {
						items: 2,
						margin: 30,
					},
					1024: {
						items: 3,
						margin: 30,
					},
					1200: {
						margin: 40,
					},
					1400: {
						margin: 60,
					}
				}

			})
		}

		if ($('.environment-slider').length) {
			$('.environment-slider').owlCarousel({
				animateIn: 'fadeIn',
				animateOut: 'fadeOut',
				autoplay: true,
				items: 1,
				dots: false,
				nav: false,
			});
		}


		$(".close-this").click(function () {
			$(this).parents(".heg-alert-box").fadeOut("500");
			$('.heg-alert-box-icon-block').fadeIn(1000);
			return false
		});


		$(document).on('click', '.search-open', function () {
			if ($(this).next('.search-box').is(':visible')) {
				$(this).next('.search-box').slideUp();
				$(this).removeClass('open');
			} else {
				$(this).next('.search-box').slideDown();
				$(this).addClass('open');
			}
			return false
		})

		$('body').on('click', function (e) {
			if (screencheck(567)) {
				if ($(e.target).parents('.search-box').length === 0) {
					$('.search-box').slideUp();
					$('.search-open').removeClass('open');
				}
			}
		})



		// var owl = $('.hero-slider');
		// owl.owlCarousel({
		// 	loop: true,
		// 	autoplay: true,
		// 	items: 1,
		// 	dots: false,
		// 	autoplaySpeed: 1000,
		// 	autoplayTimeout: 3000,
		// 	touchDrag : false,
		// 	mouseDrag : false,
		// 	animateOut: 'fadeOut',
		// 	nav: true,
		// 	navText: ["<i class='icon-prev'></i>","<i class='icon-next'></i>"]
		// });

		// owl.trigger('refresh.owl.carousel');

		// $('.play').on('click', function(){
		// 	owl.trigger('play.owl.autoplay',[3000]);
		// });

		// $('.stop').on('click', function(){
		// 	owl.trigger('stop.owl.autoplay');
		// });


		// Assign some jquery elements we'll need
		var $swiper = $(".swiper-container");
		var $bottomSlide = null; // Slide whose content gets 'extracted' and placed
		// into a fixed position for animation purposes
		var $bottomSlideContent = null; // Slide content that gets passed between the
		// panning slide stack and the position 'behind'
		// the stack, needed for correct animation style

		var mySwiper = new Swiper(".swiper-container", {
			spaceBetween: 1,
			slidesPerView: 1,
			spaceBetween: 38,
			centeredSlides: true,
			roundLengths: true,
			loop: true,
			simulateTouch: false,
			loopAdditionalSlides: 30,
			navigation: {
				nextEl: ".sld-next",
				prevEl: ".sld-prev"
			},
			on: {
				slideChange: function (slider) {
					const activeIndex = slider.activeIndex;
					const realIndex = slider.realIndex + 1;
					const prevArrow = document.querySelector('.sld-prev');
					const nextArrow = document.querySelector('.sld-next');
					const nextTitle = slider.slides[activeIndex].nextElementSibling.querySelector('.slidetitle').innerText;
					const prevTitle = slider.slides[activeIndex].previousElementSibling.querySelector('.slidetitle').innerText;
					const prevIndexTitle = (realIndex == 1) ? slider.loopedSlides : (realIndex - 1);
					const nextIndexTitle = (realIndex == slider.loopedSlides) ? 1 : (realIndex + 1);
					prevArrow.querySelector('.title').innerText = prevTitle;
					nextArrow.querySelector('.title').innerText = nextTitle;
					prevArrow.querySelector('.number').innerText = (prevIndexTitle < 10) ? "0" + prevIndexTitle : prevIndexTitle;
					nextArrow.querySelector('.number').innerText = (nextIndexTitle < 10) ? "0" + nextIndexTitle : nextIndexTitle;
				},
			},
		});

		$('.heg-alert-box-icon-block').click(function () {
			$('.heg-alert-box').fadeIn(1000);
			$('.heg-alert-box-icon-block').fadeOut(200);
		});



		/*--------------------------------------------------------------------------------------------------------------------------------------*/
	});

	/*All function need to define here for use strict mode
	----------------------------------------------------------------------------------------------------------------------------------------*/



	/*--------------------------------------------------------------------------------------------------------------------------------------*/
})(jQuery, window, document);