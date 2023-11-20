<?php

/**
 * Prevents from creating different image sizes than default thumbnail, medium, large
 * Images are created on demand
 * @global array $_wp_additional_image_sizes
 * @param type $out
 * @param int $id
 * @param string $size
 * @return boolean|array
 */

add_filter( 'image_downsize', 'inspiro_media_downsize', 10, 3 );

function inspiro_media_downsize( $out, $id, $size ) {

	// If image size exists let WP serve it like normally
	$imagedata = wp_get_attachment_metadata($id);
	
	if ( ! is_string( $size ) ) {
		return false;
	}
	
	if ( is_array( $imagedata ) && isset( $imagedata[ 'sizes' ][ $size ] ) ) {
		return false;
	}

	// Check that the requested size exists, or abort
	global $_wp_additional_image_sizes;
	if ( ! isset( $_wp_additional_image_sizes[ $size ] ) ) {
		return false;
	}

	// Make the new thumb
	if ( !$resized = image_make_intermediate_size(
		get_attached_file( $id ),
		$_wp_additional_image_sizes[ $size ][ 'width' ],
		$_wp_additional_image_sizes[ $size ][ 'height' ],
		$_wp_additional_image_sizes[ $size ][ 'crop' ]
	) )
	
	return false;

	// Save image meta, or WP can't see that the thumb exists now
	$imagedata[ 'sizes' ][ $size ] = $resized;
	wp_update_attachment_metadata( $id, $imagedata );

	// Return the array for displaying the resized image
	$att_url = wp_get_attachment_url( $id );
	
	return array( dirname( $att_url ) . '/' . $resized[ 'file' ], $resized[ 'width' ], $resized[ 'height' ], true );
}

/**
 * Prevent resize on upload
 * @param array $sizes
 * @return array
 */
function inspiro_media_prevent_resize_on_upload( $sizes ) {
	// Removing these defaults might cause problems, so we don't
	return array(
		'thumbnail' => $sizes[ 'thumbnail' ],
		'medium'    => $sizes[ 'medium' ],
		'large'     => $sizes[ 'large' ]
	);
}
add_filter( 'intermediate_image_sizes_advanced', 'inspiro_media_prevent_resize_on_upload' );