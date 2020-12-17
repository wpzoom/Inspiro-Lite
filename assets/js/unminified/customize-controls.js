/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hex control and informs the preview
 * when users open or close the front page sections section.
 */

(function() {
	wp.customize.bind( 'ready', function() {

		// Only show the color hex control when there's a custom color scheme.
		wp.customize( 'colorscheme', function( setting ) {
			wp.customize.control( 'colorscheme_hex', function( control ) {
				var visibility = function() {
					if ( 'custom' === setting.get() ) {
						control.container.slideDown( 180 );
					} else {
						control.container.slideUp( 180 );
					}
				};

				visibility();
				setting.bind( visibility );
			});
		});
	});
})();
