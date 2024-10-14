/*
 * This script is specific to Inspiro custom and WP generate Admin pages.
 * It initializes jQuery UI tabs on an element with the ID 'tabs' and handles
 * the click event on a button with the ID 'install-one-click-demo-btn'.
 * When the button is clicked, an AJAX POST request is sent to the
 * WordPress backend to invoke the 'install_activate_one_click_demo_plugin' action.
 * A spinner icon is displayed while the request is processed.
 * On success, the page is reloaded, and on error, an error message is logged to the console.
 */
jQuery(document).ready(function ($) {
	$(function () {
		$("#tabs").tabs();
	});

	// work with install btn
	$('#install-one-click-demo-btn').on('click', function (e) {
		e.preventDefault();

		// btn changes
		$(this).addClass('button-disabled');

		// work with spinner
		let spinIcon = $(this).find('.dashicons-update.spin-icon');
		spinIcon.removeClass('hidden-element');

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'install_activate_one_click_demo_plugin',
				plugin_slug: 'one-click-demo-import'
			},
			success: function (response) {
				spinIcon.addClass('hidden-element');
				$(this).removeClass('button-disabled');
				window.location.reload();
			},
			error: function (error) {
				console.log('Error:', error);
			}
		});
	});
});
