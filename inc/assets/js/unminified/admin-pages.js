// script specific to Inspiro custom and WP generate Admin pages
jQuery(document).ready(function ($) {
	console.log(ajaxurl);

	$(function () {
		$("#tabs").tabs();
	});

	// work with Install btn
	$('#install-one-click-demo-admin-page-btn').on('click', function (e) {
		e.preventDefault();

		// work with spinner
		let updateIconSelector = '.dashicons-update.spin-icon';
		let iconTag = $(this).find(updateIconSelector);

		iconTag.removeClass('hidden-element');

		// function waitForMilliseconds(ms) {
		// 	return new Promise(resolve => setTimeout(resolve, ms));
		// }
		//
		// waitForMilliseconds(2000).then(() => {
		// 	// Your code after 3 seconds wait
		// 	console.log("Waited for 3 seconds");
		// 	iconTag.addClass('hidden-element');
		// 	// Refresh the page
		// 	window.location.reload();
		// 	// 	http://localhost:8888/wp-admin/admin.php?page=inspiro-demo
		// });

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
				// window.location.reload();
				// Handle success response
			},
			error: function (error) {
				console.log('Error:', error);
				// Handle error response
			}
		});
	});
});
