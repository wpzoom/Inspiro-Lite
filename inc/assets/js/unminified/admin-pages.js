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
	console.log(ajaxurl);

	$(function () {
		$("#tabs").tabs();
	});

	// work with Install btn
	$('#install-one-click-demo-btn').on('click', function (e) {
		e.preventDefault();

		// work with spinner
		let updateIconSelector = '.dashicons-update.spin-icon';
		let iconTag = $(this).find(updateIconSelector);

		iconTag.removeClass('hidden-element');

		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'install_activate_one_click_demo_plugin',
				plugin_slug: 'one-click-demo-import'
			},
			success: function (response) {
				console.log('Success:', response);
				iconTag.addClass('hidden-element');
				window.location.reload();
			},
			error: function (error) {
				console.log('Error:', error);
			}
		});
	});
});
