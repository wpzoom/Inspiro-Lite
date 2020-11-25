/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

(function( $ ) {
	'use strict';

	var $document = $(document);
	var $window = $(window);

	$.fn.TopMenuMargin = function() {
		$(window).on('resize orientationchange', update);

		function update() {

			var windowWidth = $(window).width();

			var $header = $('.site-header');
			var $main_content = $('#main, .PP_Wrapper');

			$main_content.css('paddingTop', $header.outerHeight());

			var $adminbar = $('#wpadminbar');

			var isHidden = true;
			var size = [$(window).width(), $(window).height()];

		}

		update();
	};

	$.fn.sideNav = function() {
	    var wasPlaying = false;

	    function toggleNav() {
	        $('body').toggleClass('side-nav-open').addClass('side-nav-transitioning');

	        var flex = $('#slider').data('flexslider');
	        if (flex) {
	            if ($('body').hasClass('side-nav-open')) {
	                wasPlaying = flex.playing;
	                if (flex.playing)  {
	                    flex.pause();
	                }
	            } else {
	                if (wasPlaying) {
	                    flex.play();
	                }
	            }
	        }

	        var called = false;
	        $('.site').one('transitionend', function () {
	            $('body').removeClass('side-nav-transitioning');
	            called = true;
	        });

	        setTimeout(function() {
	            if (!called) {
	                $('body').removeClass('side-nav-transitioning');
	            }

	            $window.trigger('resize');
	        }, 230);
	    }

	    /* touchstart: do not allow scrolling main section then overlay is enabled (this is done via css) */
	    $('.navbar-toggle, .side-nav-overlay').on('click touchend', function (event) {
	        if ($(document.body).hasClass('side-nav-transitioning')) {
	            return;
	        }

	        toggleNav();
	    });

	    /* allow closing sidenav with escape key */
	    $document.keyup(function (event) {
	        if (event.keyCode === 27 && $('body').hasClass('side-nav-open')) {
	            toggleNav();
	        }
	    });

	    /**
	     * ScrollFix
	     *
	     * https://github.com/joelambert/ScrollFix
	     */
	    $('.side-nav__scrollable-container').on('touchstart', function (event) {
	        var startTopScroll = this.scrollTop;

	        if (startTopScroll <= 0) {
	            this.scrollTop = 1;
	        }

	        if (startTopScroll + this.offsetHeight >= this.scrollHeight) {
	            this.scrollTop = this.scrollHeight - this.offsetHeight - 1;
	        }
	    });
	};

	$(function() {
		$.fn.sideNav();

		/**
		 * Activate superfish menu.
		 */
		$('.sf-menu').superfish({
			'speed': 'fast',
			'animation': {
				'height': 'show'
			},
			'animationOut': {
				'height': 'hide'
			}
		});

		if (true) {
			$.fn.TopMenuMargin();

			/**
			 * Activate Headroom.
			 */
			$('.site-header').headroom({
				tolerance: {
					up: 0,
					down: 0
				},
				offset: 70
			});
		}

		$('<span class="child-arrow">&#62279;</span>')
			.click(function(e) {
				e.preventDefault();

				var $li = $(this).closest('li'),
					$sub = $li.find('> ul');

				if ($sub.is(':visible')) {
					$sub.slideUp();
					$li.removeClass('open');
				} else {
					$sub.slideDown();
					$li.addClass('open');
				}
			})
			.appendTo('.side-nav .navbar-nav li.menu-item-has-children > a');
	});
})( jQuery );
