// script specific to Inspiro custom and WP generate Admin pages
jQuery(document).ready(function ($) {
	console.log(ajaxurl);

	$(function () {
		$("#tabs").tabs();
	});

	// work with Install btn
	$('#install-one-click-demo-admin-page-btn').on('click', function (e) {
		e.preventDefault();

		console.log('clicked');
		$.ajax({
			url: ajaxurl,
			type: 'POST',
			data: {
				action: 'install_activate_one_click_demo_plugin',
				plugin_slug: 'one-click-demo-import'
			},
			success: function (response) {
				console.log('Success:', response);
				// Handle success response
			},
			error: function (error) {
				console.log('Error:', error);
				// Handle error response
			}
		});
	});
});
