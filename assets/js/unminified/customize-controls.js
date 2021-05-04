/* global jQuery */

/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hex control and informs the preview
 * when users open or close the front page sections section.
 */

( function ( api, $ ) {
	api.bind( 'ready', function () {
		// Only show the color hex control when there's a custom color scheme.
		api( 'colorscheme', function ( setting ) {
			api.control( 'colorscheme_hex', function ( control ) {
				const visibility = function () {
					if ( 'custom' === setting.get() ) {
						control.container.slideDown( 180 );
					} else {
						control.container.slideUp( 180 );
					}
				};

				visibility();
				setting.bind( visibility );
			} );
		} );
	} );

	// Extends our custom "upgrade-pro" section.
	api.sectionConstructor[ 'upgrade-pro' ] = api.Section.extend( {
		// No events for this type of section.
		attachEvents() {},

		// Always make the section active.
		isContextuallyActive() {
			return true;
		},
	} );

	api.controlConstructor[ 'inspiro-range' ] = api.Control.extend( {
		ready() {
			const control = this,
				$input = this.container.find( '.inspiro-control-range-value' ),
				$slider = this.container.find( '.inspiro-control-range' );

			$slider.on( 'input change keyup', function () {
				$input.val( $( this ).val() ).trigger( 'change' );
			} );

			if ( control.setting() === '' ) {
				$slider.val( parseFloat( $slider.attr( 'min' ) ) );
			}

			$input.on( 'change keyup', function () {
				const value = $( this ).val();
				control.setting.set( value );
				if ( value ) {
					$slider.val( parseFloat( value ) );
				} else {
					$slider.val( parseFloat( $slider.attr( 'min' ) ) );
				}
			} );

			// Update the slider if the setting changes.
			control.setting.bind( function ( value ) {
				$slider.val( parseFloat( value ) );
			} );
		},
	} );
} )( wp.customize, jQuery );
