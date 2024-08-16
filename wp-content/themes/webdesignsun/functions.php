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



// class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
// 	// Opening <li> and navigation
// 	function start_lvl( &$output, $depth = 0, $args = null ) {
// 			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 					$t = '';
// 					$n = '';
// 			} else {
// 					$t = "\t";
// 					$n = "\n";
// 			}
// 			$indent = str_repeat( $t, $depth );
// 			$classes = array( 'header__sub-nav-list' );
// 			$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
// 			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
			
// 			$output .= "{$n}{$indent}<hidden-content><ul$class_names>{$n}";
// 	}

// 	// Closing the list and navigation
// 	function end_lvl( &$output, $depth = 0, $args = null ) {
// 			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 					$t = '';
// 					$n = '';
// 			} else {
// 					$t = "\t";
// 					$n = "\n";
// 			}
// 			$indent = str_repeat( $t, $depth );
// 			$output .= "$indent</ul></hidden-content></nav-content>{$n}";
// 	}

// 	// Displaying a menu item
// 	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
// 			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 					$t = '';
// 					$n = '';
// 			} else {
// 					$t = "\t";
// 					$n = "\n";
// 			}
// 			$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

// 			$classes = empty( $item->classes ) ? array() : (array) $item->classes;
// 			$classes[] = 'header__nav-item';

// 			$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
// 			$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

// 			$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
// 			$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

// 			$output .= $indent . '<li' . $id . $class_names . '>';

// 			$atts = array();
// 			$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
// 			$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
// 			$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
// 			$atts['href']   = ! empty( $item->url )        ? $item->url        : '';

// 			$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

// 			$attributes = '';
// 			foreach ( $atts as $attr => $value ) {
// 					if ( ! empty( $value ) ) {
// 							$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
// 							$attributes .= ' ' . $attr . '="' . $value . '"';
// 					}
// 			}

// 			$title = apply_filters( 'the_title', $item->title, $item->ID );

// 			$item_output = $args->before;
// 			$item_output .= '<nav-trigger><span>' . $title . '</span><img src="' . get_template_directory_uri() . '/images/header-chevron-down.svg" alt=""></nav-trigger>';
// 			$item_output .= $args->after;

// 			$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
// 	}

// 	// Закрытие <li>
// 	function end_el( &$output, $item, $depth = 0, $args = null ) {
// 			if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
// 					$t = '';
// 					$n = '';
// 			} else {
// 					$t = "\t";
// 					$n = "\n";
// 			}
// 			$output .= "</li>{$n}";
// 	}
// }
