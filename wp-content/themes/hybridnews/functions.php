<?php
/*This file is part of HybridNews child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function hybridnews_enqueue_child_styles() {
    $min = defined('SCRIPT_DEBUG') && SCRIPT_DEBUG ? '' : '.min';

    $parent_style = 'covernews-style';
    $fonts_url = 'https://fonts.googleapis.com/css?family=Jost:200,300,400,500,600,700,900|Noto%20Serif:400,400italic,700&subset=latin,latin-ext';
    wp_enqueue_style('newsback-google-fonts', $fonts_url, array(), null);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap' . $min . '.css');
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style(
        'hybridnews',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'bootstrap', $parent_style ),
        wp_get_theme()->get('Version') );


}
add_action( 'wp_enqueue_scripts', 'hybridnews_enqueue_child_styles' );


function hybridnews_filter_custom_header_args($header_args)
{
    $header_args['default-image'] = get_stylesheet_directory_uri() . '/assets/img/default-header-image.jpg';
    $header_args['default-text-color'] = 'ffffff';
    return $header_args;
}

add_filter('covernews_custom_header_args', 'hybridnews_filter_custom_header_args', 1);


/**
 * slider additions.
 */
require get_stylesheet_directory().'/inc/hooks/hook-front-page-main-banner-section-2.php';



/**
 * Front-page main banner section layout
 */
if(!function_exists('hybridnews_front_page_main_section_selection')){

    function hybridnews_front_page_main_section_selection(){

        $hide_on_blog = covernews_get_option('disable_main_banner_on_blog_archive');

            if ($hide_on_blog) {
                if (is_front_page() && !is_home()) {
                    do_action('hybridnews_action_front_page_main_section_2');
                }

            } else {
                if (is_front_page() || is_home()) {
                    do_action('hybridnews_action_front_page_main_section_2');
                }

        }
    }
}
add_action('hybridnews_action_front_page_main_section', 'hybridnews_front_page_main_section_selection');


/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hybridnews_customize_register($wp_customize) {     
     $wp_customize->remove_control('trending_slider_title');
     $wp_customize->remove_control('select_trending_news_category');     
}
add_action('customize_register', 'hybridnews_customize_register', 99999 );


function hybridnews_filter_default_theme_options($defaults)
{    
    
    $defaults['site_title_font_size'] = 37;  
    $defaults['archive_layout'] = 'archive-layout-full';  
    
    return $defaults;
}
add_filter('covernews_filter_default_theme_options', 'hybridnews_filter_default_theme_options', 1);
