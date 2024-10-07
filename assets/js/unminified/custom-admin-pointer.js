jQuery(document).ready(function($) {
	// Check if the target element exists.
	let pointerTarget = $(customAdminPointer.pointer_target);

	if (pointerTarget.length) {
		pointerTarget.pointer({
			content: customAdminPointer.pointer_text,
			position: {
				edge: 'left', // Positioning of the pointer relative to the target.
				align: 'center' // Align the pointer.
			},
			close: function() {
				// Perform any action after the pointer is closed (like updating user meta to avoid showing it again).
				$.post(ajaxurl, {
					pointer: 'custom_admin_pointer', // Unique identifier for the pointer.
					action: 'dismiss-wp-pointer'
				});
			}
		}).pointer('open');
	}
});
