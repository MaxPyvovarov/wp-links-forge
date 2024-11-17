<?php


add_action( 'wp_enqueue_scripts', function () {
	
	wp_enqueue_style( 'fonts-googleapis', 'https://fonts.googleapis.com');
	wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap');
	// wp_enqueue_style( 'icon', get_template_directory_uri() . '../assets/icons/favicon.svg');
	wp_enqueue_style( 'global', get_template_directory_uri() . '/assets/css/global.css');
	
	
	wp_enqueue_script( 'ScrollMagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), null, true );
	wp_enqueue_script( 'ScrollMagic-debug', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array(), null, true );
	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', null, true );
	wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/js/index.js', array('ScrollMagic', 'ScrollMagic-debug', 'gsap'), null, true );
	
	//HOME PAGES scripts and styles  
	$home_page_slugs = array( 'ua-front-page', 'ru-front-page', 'en-front-page' );
	
	if ( is_page($home_page_slugs) ) {
		wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css');
		wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
		
		wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
		wp_enqueue_script( 'home', get_template_directory_uri() . '/assets/js/home.js', array('ScrollMagic', 'ScrollMagic-debug', 'gsap', 'swiper', 'index'), null, true );
	}

	//SERVICES PAGES scripts and styles  
	$services_pages_slugs = array( 'ua-crowd', 'ua-outreach', 'ua-submits', 'ua-signals', 'ua-reviews', 'ua-linkbuilding','ru-crowd', 'ru-outreach', 'ru-submits', 'ru-signals', 'ru-reviews', 'ru-linkbuilding', 'en-crowd', 'en-outreach', 'en-submits', 'en-signals', 'en-reviews', 'en-linkbuilding', );

	 if ( is_page( $services_pages_slugs ) ) {
		wp_enqueue_style( 'services', get_template_directory_uri() . '/assets/css/services.css');

		wp_enqueue_script( 'services', get_template_directory_uri() . '/assets/js/services.js', array('ScrollMagic', 'ScrollMagic-debug', 'gsap', 'index'), null, true );
	 }

	//CONTACTS PAGES scripts and styles  
	$contacts_page_slugs = array( 'ua-contacts', 'ru-contacts', 'en-contacts' );
	
	if ( is_page($contacts_page_slugs) ) {
		wp_enqueue_style( 'contacts', get_template_directory_uri() . '/assets/css/contacts.css');

		wp_enqueue_script( 'contacts', get_template_directory_uri() . '/assets/js/contacts.js', array('ScrollMagic', 'ScrollMagic-debug', 'gsap', 'index'), null, true );
	 }

	//FAQ PAGES scripts and styles  
	$faq_page_slugs = array( 'ua-faq', 'ru-faq', 'en-faq' );
	
	if ( is_page($faq_page_slugs) ) {
		wp_enqueue_style( 'faq', get_template_directory_uri() . '/assets/css/faq.css');

		wp_enqueue_script( 'faq', get_template_directory_uri() . '/assets/js/faq.js', array('ScrollMagic', 'ScrollMagic-debug', 'gsap', 'index'), null, true );
	 }

	 //404 PAGES scripts and styles  
	$not_found_page_slugs = array( 'ua-404', 'ru-404', 'en-404' );
	
	if ( is_page($not_found_page_slugs) ) {
		wp_enqueue_style( 'not_found', get_template_directory_uri() . '/assets/css/notFound.css');
	 }
	 
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


add_filter( 'upload_mimes', 'svg_upload_allow' );

# Adds SVG to the list of allowed file uploads.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Fixing the MIME type for SVG files.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// the mime type was reset, let's fix it
	// and also check user rights
	if( $dosvg ){

		// allow
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// forbid
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
?>