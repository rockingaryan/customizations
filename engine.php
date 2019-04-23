<?php
/**
 * Plugin Name: Customizations
 * Plugin URI:  https://github.com/rockingaryan/customizations/
 * Description: Contains site-specific custom code.
 * Author:      Aryan Raj
 * Author URI:  https://www.aryanraj.com/
 * Version:     1.0.0
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package Customizations
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}


//* Add Typography Style sheet.
add_action( 'wp_enqueue_scripts', 'enqueue_custom_typography', 1 );
function enqueue_custom_typography() {

	wp_enqueue_style( 'typography', plugin_dir_url( __FILE__ ) .  'assets/typography/style.css', array(), '1.0.0', 'all' );
}

//* Add Font Icons Style sheet.
add_action( 'wp_enqueue_scripts', 'custom_font_icon_css' );
function custom_font_icon_css() {

    //* Display fontawesome icons.
    //wp_enqueue_style( 'fontawesome', plugin_dir_url( __FILE__ ) .  'assets/icons/fontawesome.css' );
    
    //* Display Ionicons.
    wp_enqueue_style( 'ionicons', plugin_dir_url( __FILE__ ) .  'assets/icons/ionicons.css' );
	
}


//* Add Global Style sheets and Scripts.
add_action( 'wp_enqueue_scripts', 'custom_global_styles_scripts', 100 );
function custom_global_styles_scripts() {
	
    //* Display global CSS
    //wp_enqueue_style( 'global-style', plugin_dir_url( __FILE__ ) .  'assets/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'global', plugin_dir_url( __FILE__ ) .  'assets/css/global.css', array(), '1.0.0', 'all' );
    //wp_enqueue_style( 'global-default', plugin_dir_url( __FILE__ ) .  'assets/css/default.css', array(), '1.0.0', 'all' );
    //wp_enqueue_style( 'global-custom', plugin_dir_url( __FILE__ ) .  'assets/css/custom.css', array(), '1.0.0', 'all' );

    //* Display global JS true=in footer false= in header
    //wp_enqueue_script( 'global-script', plugin_dir_url( __FILE__ ) .  'assets/js/global.js', array( 'jquery' ), '1.0.0', false );
    //wp_enqueue_script( 'script-init', plugin_dir_url( __FILE__ ) .  'assets/js/init.js', array( 'jquery' ), '1.0.0', true );

}

//* Add Front Page Style sheets and Scripts
add_action( 'wp_enqueue_scripts', 'custiom_front_page_styles_scripts' );
function custiom_front_page_styles_scripts() {
    
	//if this is not the front page, abort.
	if ( ! is_front_page() ) {
		return;
	}
	
	//* front-page.css
	//wp_enqueue_style( 'front-page-style', plugin_dir_url( __FILE__ ) .  'assets/css/front-page.css', array(), '1.0.0', 'all' );

	//* front-page.js
	//wp_enqueue_script( 'front-page-script', plugin_dir_url( __FILE__ ) .  'assets/js/front-page.js', array( 'jquery' ), '1.0.0', true );
	
}
