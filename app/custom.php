<?php 
// Allow uploads of SVGs
function add_svg_to_upload_mimes( $upload_mimes ) {
	$upload_mimes['svg'] = 'image/svg+xml';
	$upload_mimes['svgz'] = 'image/svg+xml';
	return $upload_mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes', 10, 1 );


// Hide front-end admin menu when logged in
add_action( 'init', 'disable_admin_bar', 1 );
function disable_admin_bar() {
    add_filter( 'show_admin_bar', '__return_false' );
}
