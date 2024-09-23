/* global _wpCustomizeInspiroGuidedTourSteps */
/**
 * Scripts for Guided Tour feature.
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
	if (typeof _wpCustomizeInspiroGuidedTourSteps !== 'undefined') {
		$.extend(api.SFGuidedTourSteps, _wpCustomizeInspiroGuidedTourSteps);
	}

	/**
	 * Defines a guided tour feature
	 * set up user interface within the WordPress Customizer environment
	 * wp.customize.InspiroGuidedTour
	 */
	api.InspiroGuidedTour = {
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

			// Creates a div with 'ins-guided-tour' class and adds it to the customizer container
			this.$container = $('<div/>').addClass('ins-guided-tour');
			$wpCustomizerContainer.prepend(this.$container); // Insert container at the top of the Customizer overlay

			// Adds event listeners for tour interaction (e.g., navigation between steps)
			this._addEventListeners();

			// Initial container position, wrapping in condition for safety
			if (this.$container && this.$container.length > 0) {
				this.$container
					.css(
						! $( 'body' ).hasClass( 'rtl' ) ? 'left' : 'right',
						$('#customize-controls').width() + 10 + 'px'
					)
					.on('transitionend', function () {
						self.$container.addClass('ins-loaded');
					});
			}

			// Show first step
			this._showNextStep();

			$( document ).on(
				'click',
				'.ins-guided-tour-step .ins-nux-button',
				function () {
					self._showNextStep();
					return false;
				}
			);

			$( document ).on(
				'click',
				'.ins-guided-tour-step .ins-guided-tour-skip',
				function () {
					if ( self.currentStep === 0 ) {
						self._hideTour( true );
					} else {
						self._showNextStep();
					}

					return false;
				}
			);
		}, // End of _setupUI() method

		// Adds event listeners (e.g., for navigation)
		_addEventListeners() {
			const self = this;

			api.state('expandedSection').bind(function () {
				self._adjustPosition();
			});

			api.state('expandedPanel').bind(function () {
				self._adjustPosition();
			});
		},

		_adjustPosition() {
			const step = this._getCurrentStep();

			if ( ! step ) {
				return;
			}

			this.$container.removeClass( 'ins-inside-section' );

			const expandedSection = api.state( 'expandedSection' ).get();
			const expandedPanel = api.state( 'expandedPanel' ).get();

			if ( expandedSection && step.section === expandedSection.id ) {
				this._moveContainer(
					$( expandedSection.container[ 1 ] ).find(
						'.customize-section-title'
					)
				);
				this.$container.addClass( 'ins-inside-section' );
			} else if ( expandedSection === false && expandedPanel === false ) {
				if ( this._isTourHidden() ) {
					this._revealTour();
				} else {
					const selector = this._getSelector( step.section );
					this._moveContainer( selector );
				}
			} else {
				this._hideTour();
			}
		},

		_hideTour( remove ) {
			const self = this;

			// Already hidden?
			if ( this._isTourHidden() ) {
				return;
			}

			const containerOffset = this.$container.offset();

			this.$container.css( {
				transform: '',
				top: containerOffset.top,
			} );

			$( 'body' )
				.addClass( 'ins-exiting' )
				.on(
					'animationend.storefront webkitAnimationEnd.storefront',
					function () {
						$( this )
							.removeClass( 'ins-exiting' )
							.off(
								'animationend.storefront webkitAnimationEnd.storefront'
							)
							.addClass( 'ins-hidden' );
						self.$container.hide();

						if (
							typeof remove !== 'undefined' &&
							remove === true
						) {
							self._removeTour();
						}
					}
				);
		},

		_revealTour() {
			const self = this;

			$( 'body' ).removeClass( 'ins-hidden' );

			self.$container.show();

			const containerOffset = this.$container.offset();
			const offsetTop = parseInt( containerOffset.top, 10 );

			$( 'body' )
				.addClass( 'ins-entering' )
				.on(
					'animationend.storefront webkitAnimationEnd.storefront',
					function () {
						$( this )
							.removeClass( 'ins-entering' )
							.off(
								'animationend.storefront webkitAnimationEnd.storefront'
							);

						self.$container.css( {
							top: 'auto',
							transform: 'translateY(' + offsetTop + 'px)',
						} );
					}
				);
		},

		_removeTour() {
			this.$container.remove();
		},

		_closeAllSections() {
			api.section.each( function ( section ) {
				section.collapse( { duration: 0 } );
			} );

			api.panel.each( function ( panel ) {
				panel.collapse( { duration: 0 } );
			} );
		},

		_showNextStep() {
			if ( this._isLastStep() ) {
				this._hideTour( true );
				return;
			}

			this._closeAllSections();

			// Get next step
			const step = this._getNextStep();

			// Convert line breaks to paragraphs
			step.message = this._lineBreaksToParagraphs( step.message );

			// Load template
			const template = wp.template( 'ins-guided-tour-step' );

			this.$container.removeClass( 'ins-first-step' );

			if ( this.currentStep === 0 ) {
				step.first_step = true;
				this.$container.addClass( 'ins-first-step' );
			}

			if ( this._isLastStep() ) {
				step.last_step = true;
				this.$container.addClass( 'ins-last-step' );
			}

			this._moveContainer( this._getSelector( step.section ) );

			this.$container.html( template( step ) );
		},

		_moveContainer( $selector ) {
			const self = this;

			if ( ! $selector ) {
				return;
			}

			const position =
				parseInt( $selector.offset().top, 10 ) +
				$selector.height() / 2 -
				44;

			this.$container
				.addClass( 'ins-moving' )
				.css( {
					transform: 'translateY(' + position + 'px)',
				} )
				.on( 'transitionend.storefront', function () {
					self.$container.removeClass( 'ins-moving' );
					self.$container.off( 'transitionend.storefront' );
				} );
		},

		_getSelector( pointTo ) {
			const sectionOrPanel = api.section( pointTo )
				? api.section( pointTo )
				: api.panel( pointTo );

			// Check whether this is a section, panel, or a regular selector
			if ( typeof sectionOrPanel !== 'undefined' ) {
				return $( sectionOrPanel.container[ 0 ] );
			}

			return $( pointTo );
		},

		_getCurrentStep() {
			return api.SFGuidedTourSteps[ this.currentStep ];
		},

		_getNextStep() {
			this.currentStep = this.currentStep + 1;
			return api.SFGuidedTourSteps[ this.currentStep ];
		},

		_isTourHidden() {
			return $( 'body' ).hasClass( 'ins-hidden' ) ? true : false;
		},

		_isLastStep() {
			return this.currentStep + 1 < api.SFGuidedTourSteps.length
				? false
				: true;
		},

		_lineBreaksToParagraphs( message ) {
			return '<p>' + message.replace( '\n\n', '</p><p>' ) + '</p>';
		},
	}

	$(document).ready(function () {
		api.InspiroGuidedTour.init();
	});
})(window.wp, jQuery);
