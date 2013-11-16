<?php
/**
 * Hide Admin Icons
 *
 * @package   Hide_Admin_Icons
 * @author    Barry Ceelen <b@rryceelen.com>
 * @license   GPL-2.0+
 * @link      http://wordpress.org/plugins/hide-admin-icons/
 * @copyright 2013 Barry Ceelen
 *
 * @wordpress-plugin
 * Plugin Name:       Hide Admin Icons
 * Plugin URI:        http://wordpress.org/plugins/hide-admin-icons/
 * Description:       Hides the icons in the admin menu and admin page titles.
 * Version:           1.5.0
 * Author:            Barry Ceelen
 * Author URI:        https://github.com/barryceelen
 * Text Domain:       plugin-name-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_enqueue_scripts', 'fufi_hai_admin_enqueue_scripts' );

function fufi_hai_admin_enqueue_scripts() {
	wp_enqueue_style( 'fufi_hide_admin_icons', plugins_url( 'fufi-hide-admin-icons.css', __FILE__) );
}
