<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Cargar archivo JS personalizado de tu tema
function load_custom_js() {
    wp_enqueue_script('utilities-js', get_stylesheet_directory_uri() . '/assets/js/utilities.js', array('jquery'), '1.13.0', true);}

add_action('wp_enqueue_scripts', 'load_custom_js');






// Cargar el archivo de estilo del tema hijo
function child_theme_styles() {
   
    // Cargar la hoja de estilo del tema hijo
    wp_enqueue_style('aditional-css', get_stylesheet_directory_uri() . '/assets/css/customize.css', array(), '1.0.12');

}

// Agregar la acción para cargar el estilo del tema hijo
add_action('wp_enqueue_scripts', 'child_theme_styles');

// END ENQUEUE PARENT ACTION

// Cargar archivo CSS de Bootstrap desde el servidor
function load_bootstrap_css() {   
    
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap_css');




function footer_legal_widget() {
    register_sidebar(array(
        'name' => 'Footer Legal Widget', 
        'id' => 'footer_legal_widget',   
        'description' => 'Aca va la información legal del sitio', 
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',               
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>', 
    ));
}
add_action('widgets_init', 'footer_legal_widget');

function register_custom_menus() {
    register_nav_menus( array(
        'footer_legal' => 'Footer Legal',
        'footer_contact' => 'Footer Contact'
    ) );
}
add_action( 'after_setup_theme', 'register_custom_menus' );





function create_custom_menus_on_theme_activation() {
    // Define los nombres y descripciones de tus menús
    $menu_names = array(
        'footer_legal' => 'Footer Legal',
        'footer_contact' => 'Footer Contact'
    );

    // Crea los menús si aún no existen
    foreach ($menu_names as $menu_id => $menu_label) {
        if (!has_nav_menu($menu_id)) {
            $menu_id = wp_create_nav_menu($menu_label);
        }
    }
}
add_action('after_switch_theme', 'create_custom_menus_on_theme_activation');