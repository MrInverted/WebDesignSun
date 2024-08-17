<?php

add_action( 'wp_enqueue_scripts', function (){
    wp_enqueue_style( 'basic', get_stylesheet_uri() );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Marcellus&display=swap' );
    wp_enqueue_style( 'icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/styles/style.css', array('fonts') );

    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '1.0', true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/scripts/main.js', array('swiper'), '1.0', true );
} );

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter( 'script_loader_tag', 'add_type_attribute' , 10, 3 );

function add_type_attribute($tag, $handle, $src) {
	if ( 'script' !== $handle ) {
		return $tag;
	}

	$tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
	return $tag;
}

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'header',
		'footer_menu_left' => 'footer (our stores)',
		'footer_menu_right' => 'footer (useful links)',
	] );
} );

add_filter( 'upload_mimes', 'svg_upload_allow' );
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	} else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}
	
	if( $dosvg ){
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

function my_cfs_options_screens( $screens ) {
	$screens[] = array(
		'name'            => 'options',
		'menu_title'      => __( 'Site Options' ),
		'page_title'      => __( 'Customize Site Options' ),
		'menu_position'   => 100,
		'icon'            => 'dashicons-admin-generic', // optional, dashicons-admin-generic is the default
		'field_groups'    => array( 'Basics' ), // Field Group name(s) of CFS Field Group to use on this page (can also be post IDs)
	);

	return $screens;
}

add_filter( 'cfs_options_screens', 'my_cfs_options_screens' );

add_filter( 'excerpt_more', function( $more ) {
	return '...';
} );

add_filter( 'excerpt_length', function(){
	return 22;
} );