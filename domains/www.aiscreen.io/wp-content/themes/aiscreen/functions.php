<?php

//remove_action('rest_api_init', 'create_initial_rest_routes', 99); 

function aiscreen_modern_images( $mime_types ) {
 $mime_types['heic'] = 'image/heic';
 $mime_types['heif'] = 'image/heif';
 $mime_types['heics'] = 'image/heic-sequence';
 $mime_types['heifs'] = 'image/heif-sequence';
 $mime_types['avif'] = 'image/avif';
 $mime_types['avifs'] = 'image/avif-sequence';
 return $mime_types;
}
add_filter( 'upload_mimes', 'aiscreen_modern_images');




function aiscreen_theme_support() {

	add_theme_support( 'post-thumbnails' );
	//set_post_thumbnail_size( 1200, 9999 );
	//add_image_size( 'aiscreen-fullscreen', 1980, 9999 );
	add_theme_support( 'title-tag' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	load_theme_textdomain( 'aiscreen' );
	//add_theme_support( 'align-wide' );
	//add_theme_support( 'responsive-embeds' );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary menu', 'aiscreen1' ),
			'footer'  => esc_html__( 'Secondary menu', 'aiscreen1' ),
		)
	);


}
add_action( 'after_setup_theme', 'aiscreen_theme_support' );


function aiscreen_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), $theme_version );
	//wp_style_add_data( 'aiscreen-style', 'rtl', 'replace' );
    //wp_enqueue_style( 'aiscreen-style2', get_template_directory_uri() . '/css/mobile.min.css', null, $theme_version, true );


}
add_action( 'wp_enqueue_scripts', 'aiscreen_register_styles' );


function aiscreen_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

   //  wp_deregister_script( 'jquery' );
     
wp_enqueue_script( 'jquery' );
     wp_enqueue_script( 'jquery1', get_template_directory_uri() . '/libs/jquery-3.6.0.min.js', array(), null, true);


	 wp_enqueue_script( 'swiper', get_template_directory_uri() . '/libs/swiper-bundle.min.js', array(), null, true);
	 wp_enqueue_script( 'masonry', get_template_directory_uri() . '/libs/masonry.pkgd.min.js', array(), null, true);
//	 wp_enqueue_script( 'plyr', 'https://cdn.plyr.io/3.6.12/plyr.js', array(), null, true);
     wp_enqueue_script( 'jquery_formstyler',  get_template_directory_uri() .'/libs/jquery.formstyler.min.js', array(), null,  true);   
     wp_enqueue_script( 'fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), null, true);
    
          //wp_enqueue_script( 'libs', get_template_directory_uri() . '/js/libs.min.js', array(), null, true);

    wp_enqueue_script( 'libs1', get_template_directory_uri() . '/js/script.js', array(), time(), true);
    wp_enqueue_script( 'libs2', get_template_directory_uri() . '/js/script_jq.js', array(), time(), true);
//    wp_enqueue_script( 'wistia1', 'https://fast.wistia.com/embed/medias/tvik13ecf6.jsonp', array(), null, true);
//    wp_enqueue_script( 'wistia2', 'https://fast.wistia.com/assets/external/E-v1.js', array(), null, true);

	 //wp_script_add_data( 'aiscreen-js', 'async', true );

}
add_action( 'wp_enqueue_scripts', 'aiscreen_register_scripts' );


/*
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});
*/


class Main_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='submenu'><ul>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}


class Main_Sublevel_Mob_Walker extends Walker_Nav_Menu
{
   
   function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='submenu'><ul>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

}


add_filter('nav_menu_link_attributes', 'aiscreen_nav_menu_link_attributes', 10, 3);

function aiscreen_nav_menu_link_attributes($atts, $item, $args)
{

   if (is_object($args->walker)){

		if ((get_class($args->walker) == 'Main_Sublevel_Mob_Walker') &&  ($args->walker->has_children == 1)) {
			$atts['class'] = "btn_submenu";
		}

	} 	
	return $atts;
}




require('include/widgets.php');
//require('main-menu-walker.php');
require('include/blog.php');
require('include/template.php');
require('include/appstore.php');
require('include/guides.php');



/* search my title filter */

function title_filter( $where, &$wp_query ){
    global $wpdb;
    if ( $search_term = $wp_query->get( 'search_prod_title' ) ) {
        $where .= ' AND ' . $wpdb->posts . '.post_title LIKE \'%' . esc_sql( like_escape( $search_term ) ) . '%\'';
    }
    return $where;
}


/* remove script ver ? */

//add_filter( 'script_loader_src', '_remove_script_version' );
//add_filter( 'style_loader_src', '_remove_script_version' );
function _remove_script_version( $src ){
	$parts = explode( '?', $src );
	return $parts[0];
}



//add_filter( 'script_loader_src', 'hb_remove_wp_version_from_src' );
//add_filter( 'style_loader_src', 'hb_remove_wp_version_from_src' );
function hb_remove_wp_version_from_src( $src ) {
	 global $wp_version;
	 parse_str( parse_url( $src, PHP_URL_QUERY ), $query );
	 if ( ! empty($query['ver']) && $query['ver'] === $wp_version ) {
		  $src = remove_query_arg('ver', $src);
	 }
	 return $src;
}




/**
 * Function to calculate the estimated reading time of the given text.
 * 
 * @param string $text The text to calculate the reading time for.
 * @param string $wpm The rate of words per minute to use.
 * @return Array
 */
function estimateReadingTime($text, $wpm = 200) {
    $totalWords = str_word_count(strip_tags($text));
    $minutes = floor($totalWords / $wpm);
    $seconds = floor($totalWords % $wpm / ($wpm / 60));
    
    return array(
        'minutes' => $minutes,
        'seconds' => $seconds
    );
}





function remove_extra_image_sizes() {
    foreach ( get_intermediate_image_sizes() as $size ) {
        if ( !in_array( $size, array( 'thumbnail', 'medium', 'medium_large', 'large' ) ) ) {
            remove_image_size( $size );
        }
    }
 
    remove_image_size( '1536x1536' );
    remove_image_size( '2048x2048' );
}
add_action('init', 'remove_extra_image_sizes');




//add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );
function aw_custom_add_image_sizes() {
    add_image_size( 'small', 300, 9999 ); // 300px wide unlimited height
    add_image_size( 'medium-small', 450, 9999 ); // 300px wide unlimited height
    add_image_size( 'xl', 1200, 9999 ); // 1200px wide unlimited height
    add_image_size( 'xxl', 2000, 9999 ); // 2000px wide unlimited height
    add_image_size( 'xxxl', 3000, 9999 ); // 3000px wide unlimited height
    add_image_size( 'portfolio_full', 9999, 900 ); // 900px tall unlimited width

}

//add_filter( 'image_size_names_choose', 'aw_custom_add_image_size_names' );
function aw_custom_add_image_size_names( $sizes ) {
  return array_merge( $sizes, array(
    'small' => __( 'Small' ),
    'medium-small' => __( 'Medium Small' ),
    'xl' => __( 'Extra Large' ),
    'xxl' => __( '2x Extra Large' ),
    'xxxl' => __( '3x Extra Large' ),
    'portfolio_full' => __( 'Portfolio Full Size' ),
  ) );
}



function adjust_image_sizes_attr( $sizes, $size ) {
    $sizes = '768px';
       return $sizes;
 }
 add_filter( 'wp_calculate_image_sizes', 'adjust_image_sizes_attr', 10 , 2 );

add_filter( 'max_srcset_image_width', 'max_srcset_image_width', 10 , 2 );

function max_srcset_image_width() {
    return 1024; // Desired max width in pixels.
}

add_filter('jpeg_quality', function($arg){return  95;});

/*function wpcf7_dequeue_redundant_scripts() {
    $post = get_post();
    if ( is_singular() && !has_shortcode( $post->post_content, 'contact-form-7' ) ) {
        wp_dequeue_script( 'contact-form-7' );
        wp_dequeue_style( 'contact-form-7' );
        wp_dequeue_script( 'wpcf7-recaptcha' );
        wp_dequeue_style( 'wpcf7-recaptcha' );
        wp_dequeue_script( 'google-recaptcha' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpcf7_dequeue_redundant_scripts', 99 );*/

