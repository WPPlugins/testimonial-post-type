<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://profiles.wordpress.org/juiiee8487
 * @since             1.0.0
 * @package           Testimonial_Post_Type
 *
 * @wordpress-plugin
 * Plugin Name:       Testimonial Post Type
 * Plugin URI:        https://wordpress.org/plugins/testimonial-post-type/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0
 * Author:            Elsner Technologies Pvt. Ltd.
 * Author URI:        http://www.elsner.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       testimonial-post-type
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-testimonial-post-type-activator.php
 */
function activate_testimonial_post_type() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testimonial-post-type-activator.php';
	Testimonial_Post_Type_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-testimonial-post-type-deactivator.php
 */
function deactivate_testimonial_post_type() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-testimonial-post-type-deactivator.php';
	Testimonial_Post_Type_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_testimonial_post_type' );
register_deactivation_hook( __FILE__, 'deactivate_testimonial_post_type' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-testimonial-post-type.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_testimonial_post_type() {

	$plugin = new Testimonial_Post_Type();
	$plugin->run();

}
run_testimonial_post_type();
