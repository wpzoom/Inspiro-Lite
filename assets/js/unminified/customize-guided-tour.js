/* global jQuery */

/**
 * Scripts for Guided Tour feature. guided tour feature
 */

(function (wp, $) {
	'use strict';

	if ( ! wp || ! wp.customize ) {
		return;
	}

	// set up our namespace.
	const api = wp.customize;

	// init steps object
	api.SFGuidedTourSteps = [];

	// merging plugin options with default settings.
	if ( typeof _wpCustomizeSFGuidedTourSteps !== 'undefined' ) {
		$.extend( api.SFGuidedTourSteps, _wpCustomizeSFGuidedTourSteps );
	}

	/**
	 * Defines a guided tour feature
	 * set up user interface within the WordPress Customizer environment
	 * wp.customize.SFGuidedTour
	 *
	 */
	api.SFGuidedTour = {
		// Store the container element for the guided tour
		$container: null,
		// Store the current step index of the guided tour
		currentStep: -1,

		// Initialize the guided tour, called to set up the user interface
		init() {
			this._setupUI(); // call user interface configurator
		},

		// Set up the user interface for the guided tour
		_setupUI() {
			// Save reference to the current object (used to maintain context inside callbacks)
			const self = this,

			// Select the WordPress Customizer's main overlay container (the area where content is displayed)
			$wpCustomizerContainer = $( 'body.wp-customizer .wp-full-overlay' );

			// Create a new <div> element in memory, which will act as the container for the guided tour
			this.$container = $( '<div/>' ).addClass( 'sf-guided-tour' );

			// Insert the newly created container at the beginning (top) of the WordPress Customizer overlay
			$wpCustomizerContainer.prepend( this.$container );

			// Call the method to add event listeners for the guided tour (e.g., navigation between steps)
			this._addListeners();


			// console.dir(self);
		}, // End of _setupUI() method

		// Method for adding event listeners (like button clicks) to control the guided tour
		_addListeners() {
			// Logic for adding event listeners goes here
		}
	}

	// api.SFGuidedTour.init();
})( window.wp, jQuery );
