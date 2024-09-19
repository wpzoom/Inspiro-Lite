/* global jQuery */

/**
 * Scripts for Guided Tour functionality.
 */

(function (wp, $) {
	'use strict';

	if ( ! wp || ! wp.customize ) {
		return;
	}

	// Set up our namespace.
	const api = wp.customize;

	api.SFGuidedTourSteps = [];

	if ( typeof _wpCustomizeSFGuidedTourSteps !== 'undefined' ) {
		$.extend( api.SFGuidedTourSteps, _wpCustomizeSFGuidedTourSteps );
	}

	console.log(api.SFGuidedTourSteps);
})( window.wp, jQuery );
