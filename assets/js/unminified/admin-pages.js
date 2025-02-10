//Init tabs
jQuery(document).ready(($) => {	

	var $tabs = $("#tabs").tabs({
		activate: function (event, ui) {
			var newHash = ui.newTab.find("a").attr("href");
			history.replaceState(null, null, newHash); // Update the URL with the new hash
		}
	});

	const ACTION_NAME = 'install_activate_inspiro_starter_sites_plugin';
	const PLUGIN_SLUG = 'inspiro-starter-sites';

	const handleAjaxRequest = (btn, btnTextContainer, originalText, spinIcon) => {
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: ACTION_NAME,
				plugin_slug: PLUGIN_SLUG,
			},
			success: () => {
				spinIcon.addClass('hidden-element');
				btn.removeClass('button-disabled');
				btnTextContainer.text(originalText);  // Restore original button text
				window.location.reload();  // Reload page
			},
			error: (error) => {
				// console.log('Error:', error);
				btnTextContainer.text(originalText);  // Restore original button text on error
			}
		});
	};

	$('#install-inspiro-starter-sites-btn').on('click', function() {
		const btn = $(this);
		btn.addClass('button-disabled');

		const btnTextContainer = btn.find('#install-inspiro-starter-sites-btn-text');
		const originalText = btnTextContainer.text();
		const installingText = btnTextContainer.data('installing-text');

		btnTextContainer.text(installingText);

		const spinIcon = btn.find('.dashicons-update.spin-icon');
		spinIcon.removeClass('hidden-element');

		handleAjaxRequest(btn, btnTextContainer, originalText, spinIcon);
	} );

	$('#wpz-notice-inspiro-plugin-handle').on( 'click', function( e ) {
		
		const btn = $(this);
		const dataPluginStatus = btn.data('plugin-status');
		
		if ( dataPluginStatus === 'active' ) {
			return;
		}

		e.preventDefault();

		const originalText = btn.text();
		const installingText = inspiro_admin_pages_vars.installingText;
		const redirectingText = inspiro_admin_pages_vars.redirectingText;

		btn.text( installingText );

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: ACTION_NAME,
				plugin_slug: 'inspiro-starter-sites',
			},
			success: () => {
				btn.text( redirectingText );  // Restore original button text
				window.location = inspiro_admin_pages_vars.import_url;  // Redirect to the URL
			},
			error: (error) => {
				// console.log('Error:', error);
				btn.text(originalText);  // Restore original button text on error
			}
		} );

	} );

});


( function( $ ) {
	const $wrapper = $('.wpz-onboard_wrapper');
	const activePlugins = [];
	const requiredPlugins = [];
	const recommendedPlugins = [];

	/**
	 * Hook up functionality when the document loads.
	 */
	$( function( $ ) {
		if ( window.location.hash ) {
			setDashboardTab( window.location.hash );
		}

	} );

	/**
		 * Sets the selected tab to the tab with the given ID.
		 *
		 * @param {string} id The ID of the tab to set as selected.
		 */
	function setDashboardTab( id, updateHash = false ) {
		if ( id ) {
			const $target = $wrapper.find( '#wpz-onboard_tabs .wpz-onboard_tab a[href="' + id + '"]' ),
				$tabs   = $target.closest( '.wpz-onboard_wrapper' ).find( '.wpz-onboard_content .wpz-onboard_content-main .wpz-onboard_content-main-tab' );

			$target.closest( '#wpz-onboard_tabs' ).find( '.wpz-onboard_tab' ).removeClass( 'active' );
			$target.closest( '.wpz-onboard_tab' ).addClass( 'active' );

			$tabs.removeClass( 'active' );
			$tabs.filter( '[data-id="' + id + '"]' ).addClass( 'active' );

		}
	}


} )( jQuery );

