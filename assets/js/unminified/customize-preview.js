/* eslint-disable no-var */
/* global inspiroCustomizePreview, jQuery */

/**
 * File customize-preview.js.
 *
 * Instantly live-update customizer settings in the preview for improved user experience.
 */

/**
 * Build <style> tag.
 *
 * @since x.x.x
 *
 * @param {wp.customize} control The WordPress Customize API control.
 * @param {string} value The control value.
 * @param {string} cssProperty The CSS property.
 */
function inspiroBuildStyleTag( control, value, cssProperty ) {
	var style = '';
	var selector = '';
	var hasMediaQuery = false;

	var fakeControl = control.replace( '-' + cssProperty, '' );
	fakeControl = 'typo-' + fakeControl;

	const mediaQuery = fakeControl + '-media';
	if ( mediaQuery in inspiroCustomizePreview.selectors ) {
		hasMediaQuery = true;
	}

	if ( fakeControl in inspiroCustomizePreview.selectors ) {
		if ( hasMediaQuery ) {
			selector += inspiroCustomizePreview.selectors[ mediaQuery ];
		}
		selector += inspiroCustomizePreview.selectors[ fakeControl ];

		// Build <style>.
		style =
			'<style id="' +
			control +
			'-' +
			cssProperty +
			'">' +
			selector +
			'	{ ' +
			cssProperty +
			': ' +
			value +
			' }' +
			( hasMediaQuery ? ' }' : '' ) +
			'</style>';
	}

	return style;
}

( function ( $ ) {
	// Site title and description.
	wp.customize( 'header_site_title', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'header_site_description', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	wp.customize( 'custom_logo_text', function ( value ) {
		value.bind( function ( to ) {
			$( '.site-header .custom-logo-text' ).text( to );
		} );
	} );
	wp.customize( 'header_button_title', function ( value ) {
		value.bind( function ( to ) {
			if ( to === '' ) {
				$( '.custom-header-button' ).css( 'display', 'none' );
			} else {
				$( '.custom-header-button' )
					.css( 'display', 'inline-block' )
					.text( to );
			}
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function ( value ) {
		value.bind( function ( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					clip: 'rect(1px, 1px, 1px, 1px)',
					position: 'absolute',
				} );
				// Add class for different logo styles if title and description are hidden.
				$( 'body' ).addClass( 'title-tagline-hidden' );
			} else {
				// Check if the text color has been removed and use default colors in theme stylesheet.
				if ( ! to.length ) {
					$( '#inspiro-custom-header-styles' ).remove();
				}
				$( '.site-title, .site-description' ).css( {
					clip: 'auto',
					position: 'relative',
				} );
				$(
					'.site-branding-text, .site-branding-text a, .site-description, .site-description a'
				).css( {
					color: to,
				} );
				// Add class for different logo styles if title and description are visible.
				$( 'body' ).removeClass( 'title-tagline-hidden' );
			}
		} );
	} );

	// Header button text color.
	wp.customize( 'header_button_textcolor', function ( value ) {
		value.bind( function ( to ) {
			if ( 'blank' === to ) {
				$( '.custom-header-button' ).css( {
					color: '#ffffff',
				} );
			} else {
				$( '.custom-header-button' ).css( {
					color: to,
				} );
			}
		} );
	} );

	// Color scheme.
	wp.customize( 'colorscheme', function ( value ) {
		value.bind( function ( to ) {
			// Update color body class.
			$( 'body' )
				.removeClass( 'colors-light colors-dark colors-custom' )
				.addClass( 'colors-' + to );
		} );
	} );

	// Custom color hex.
	wp.customize( 'colorscheme_hex', function ( value ) {
		value.bind( function ( to ) {
			// Update custom color CSS.
			const style = $( '#custom-theme-colors' );
			const hex = style.data( 'hex' );
			var css = style.html();

			css = css.replaceAll( hex, to );
			style.html( css ).data( 'hex', to );
		} );
	} );

	// Whether a header image is available.
	function hasHeaderImage() {
		const image = wp.customize( 'header_image' )();
		return '' !== image && 'remove-header' !== image;
	}

	// Whether a header video is available.
	function hasHeaderVideo() {
		const externalVideo = wp.customize( 'external_header_video' )(),
			video = wp.customize( 'header_video' )();

		return '' !== externalVideo || ( 0 !== video && '' !== video );
	}

	// Toggle a body class if a custom header exists.
	$.each(
		[ 'external_header_video', 'header_image', 'header_video' ],
		function ( index, settingId ) {
			wp.customize( settingId, function ( setting ) {
				setting.bind( function () {
					if ( hasHeaderImage() ) {
						$( document.body ).addClass( 'has-header-image' );
					} else {
						$( document.body ).removeClass( 'has-header-image' );
					}

					if ( ! hasHeaderVideo() ) {
						$( document.body ).removeClass( 'has-header-video' );
					}
				} );
			} );
		}
	);

	$.each(
		[
			'body-font-family',
			'headings-font-family',
			'slider-title-font-family',
			'slider-text-font-family',
			'slider-button-font-family',
			'mainmenu-font-family',
			'mobilemenu-font-family',
		],
		function ( index, control ) {
			/**
			 * Generate Font Family CSS
			 *
			 * @see https://github.com/brainstormforce/astra/blob/663761d3419f25640af9b59e64384bd07f810bc4/assets/js/unminified/customizer-preview.js#L369
			 */
			wp.customize( control, function ( value ) {
				value.bind( function ( newValue ) {
					const cssProperty = 'font-family';
					const style = inspiroBuildStyleTag(
						control,
						newValue,
						cssProperty
					);
					var link = '';

					var fontName = newValue.split( ',' )[ 0 ];
					// Replace ' character with space, necessary to separate out font prop value.
					fontName = fontName.replace( /'/g, '' );

					// Remove <style> first!
					$( 'style#' + control + '-' + cssProperty ).remove();

					if ( fontName in inspiroCustomizePreview.googleFonts ) {
						fontName = fontName.split( ' ' ).join( '+' );

						// Remove old.
						$( 'link#' + control ).remove();
						link =
							'<link id="' +
							control +
							'" href="https://fonts.googleapis.com/css?family=' +
							fontName +
							'" rel="stylesheet">';
					}

					// Concat and append new <style> and <link>.
					$( 'head' ).append( style + link );
				} );
			} );
		}
	);

	$.each(
		[
			'body-font-weight',
			'headings-font-weight',
			'slider-title-font-weight',
			'slider-text-font-weight',
			'slider-button-font-weight',
			'mainmenu-font-weight',
			'mobilemenu-font-weight',
		],
		function ( index, control ) {
			/**
			 * Generate Font Weight CSS
			 *
			 * @see https://github.com/brainstormforce/astra/blob/663761d3419f25640af9b59e64384bd07f810bc4/assets/js/unminified/customizer-preview.js#L409
			 */
			wp.customize( control, function ( value ) {
				value.bind( function ( newValue ) {
					const cssProperty = 'font-weight';
					const style = inspiroBuildStyleTag(
						control,
						newValue,
						cssProperty
					);
					const fontControl = control.replace(
						'font-weight',
						'font-family'
					);
					var link = '';

					if ( newValue ) {
						var fontName =
							wp.customize._value[ fontControl ]._value;
						fontName = fontName.split( ',' );
						fontName = fontName[ 0 ].replace( /'/g, '' );

						// Remove old.
						$( 'style#' + control + '-' + cssProperty ).remove();

						if ( fontName in inspiroCustomizePreview.googleFonts ) {
							// Remove old.
							$( '#' + fontControl ).remove();

							if ( newValue === 'inherit' ) {
								link =
									'<link id="' +
									fontControl +
									'" href="https://fonts.googleapis.com/css?family=' +
									fontName +
									'"  rel="stylesheet">';
							} else {
								link =
									'<link id="' +
									fontControl +
									'" href="https://fonts.googleapis.com/css?family=' +
									fontName +
									'%3A' +
									newValue +
									'"  rel="stylesheet">';
							}
						}

						// Concat and append new <style> and <link>.
						$( 'head' ).append( style + link );
					} else {
						// Remove old.
						$( 'style#' + control ).remove();
					}
				} );
			} );
		}
	);
} )( jQuery );
