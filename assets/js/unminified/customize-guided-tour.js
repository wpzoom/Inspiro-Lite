/* global jQuery */

/**
 * Scripts for Guided Tour feature. guided tour feature
 */

(function (wp, $) {
	'use strict';

	if (!wp || !wp.customize) {
		return;
	}

	// set up our namespace.
	const api = wp.customize;

	// init steps object
	api.SFGuidedTourSteps = [];

	// merging plugin options with default settings.
	if (typeof _wpCustomizeSFGuidedTourSteps !== 'undefined') {
		$.extend(api.SFGuidedTourSteps, _wpCustomizeSFGuidedTourSteps);
	}

	/**
	 * Defines a guided tour feature
	 * set up user interface within the WordPress Customizer environment
	 * wp.customize.SFGuidedTour
	 *
	 */
	api.SFGuidedTour = {
		$container: null,  // Stores the tour container element
		currentStep: -1,   // Tracks the current step in the tour

		// Initializes the guided tour UI
		init() {
			this._setupUI();
		},

		// Sets up the guided tour interface
		_setupUI() {
			const self = this, // used to maintain context inside callbacks

				// Select the WordPress Customizer's main overlay container (the area where content is displayed)
				$wpCustomizerContainer = $('body.wp-customizer .wp-full-overlay');

			// Creates a div with 'sf-guided-tour' class and adds it to the customizer container
			this.$container = $('<div/>').addClass('sf-guided-tour');
			$wpCustomizerContainer.prepend(this.$container); // Insert container at the top of the Customizer overlay

			// Adds event listeners for tour interaction (e.g., navigation between steps)
			this._addListeners();

			// Initial container position, wrapp in condition for safety
			if (this.$container && this.$container.length > 0) {
				this.$container
					.css(
						// ! $( 'body' ).hasClass( 'rtl' ) ? 'left' : 'right',
						$('#customize-controls').width() + 10 + 'px'
					)
				// .on('transitionend', function () {
				// 	self.$container.addClass('sf-loaded');
				// });
					self.$container.addClass('sf-loaded');
			}



			// console.dir(self);
		}, // End of _setupUI() method

		// Adds event listeners (e.g., for navigation)
		_addListeners() {
			const self = this;

			api.state('expandedSection').bind(function () {
				// self._adjustPosition();
			});

			api.state('expandedPanel').bind(function () {
				// self._adjustPosition();
			});
		}
	}

	$(document).ready(function () {
		api.SFGuidedTour.init();
	});
})(window.wp, jQuery);
