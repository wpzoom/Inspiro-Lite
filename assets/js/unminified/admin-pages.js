/*
 * This script is specific to Inspiro custom and WP generate Admin pages.
 * It initializes jQuery UI tabs on an element with the ID 'tabs' and handles
 * the click event on a button with the ID 'install-one-click-demo-btn'.
 * When the button is clicked, an AJAX POST request is sent to the
 * WordPress backend to invoke the 'install_activate_one_click_demo_plugin' action.
 * A spinner icon is displayed while the request is processed.
 * On success, the page is reloaded, and on error, an error message is logged to the console.
 */
jQuery(document).ready(($) => {	

	$("#tabs").tabs();

	const ACTION_NAME = 'install_activate_one_click_demo_plugin';
	const PLUGIN_SLUG = 'one-click-demo-import';

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

	$('#install-one-click-demo-btn').on('click', function() {
		const btn = $(this);
		btn.addClass('button-disabled');

		const btnTextContainer = btn.find('#install-one-click-demo-btn-text');
		const originalText = btnTextContainer.text();
		const installingText = btnTextContainer.data('installing-text');

		btnTextContainer.text(installingText);

		const spinIcon = btn.find('.dashicons-update.spin-icon');
		spinIcon.removeClass('hidden-element');

		handleAjaxRequest(btn, btnTextContainer, originalText, spinIcon);
	} );

	$('#wpz-notice-inspiro-plugin-handle').on( 'click', function( e ) {
		e.preventDefault();

		const btn = $(this);
		const originalText = btn.text();
		const installingText = inspiro_admin_pages_vars.installingText;
		const redirectingText = inspiro_admin_pages_vars.redirectingText;

		console.log( redirectingText );

		btn.text( installingText );

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: ACTION_NAME,
				plugin_slug: 'inspiro-toolkit',
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
