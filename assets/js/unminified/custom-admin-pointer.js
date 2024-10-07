jQuery(document).ready(function ($) {
	console.log(ajaxurl);
	console.log('este');
	// Check if the target element exists.
	let pointerTarget = $(customAdminPointer.pointer_target);

	if (pointerTarget.length) {
		pointerTarget.pointer({
			content: customAdminPointer.pointer_text,
			position: {
				edge: 'left', // Positioning of the pointer relative to the target.
				align: 'center' // Align the pointer.
			},
			close: function () {
				console.log('click close btn');
				// Perform any action after the pointer is closed (like updating user meta to avoid showing it again).
				$.post(ajaxurl, {
					action: 'dismiss_wp_pointer',
					pointer: 'custom_admin_pointer' // Unique identifier for the pointer.
				})
				.done(function (response) {
					console.log('Success:', response);
				})
				.fail(function (jqXHR, textStatus, errorThrown) {
					console.log('Error:', textStatus, errorThrown);
				});
			}
		}).pointer('open');
	}
});
