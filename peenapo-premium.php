<?php
/*
Plugin Name: Peenapo Premium
Plugin URI: https://www.peenapo.com
Description: Peenapo Premium is an addon for Peenapo Layouts
Version: 1.0
Author: Peenapo
Text Domain: peenapo-premium-txd
License: GNU General Public License v3+
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

if ( ! defined( 'ABSPATH' ) ) { exit; } // exit if accessed directly

/*
 * set content directories
 *
 */
if( ! defined( 'PPREMIUM_DIR' ) ) { define( 'PPREMIUM_DIR', plugin_dir_path( __FILE__ ) ); }
if( ! defined( 'PPREMIUM_URL' ) ) { define( 'PPREMIUM_URL', plugin_dir_url( __FILE__ ) ); }

/*
 * lets boot this scrap
 *
 */
class Ppremium_Bootstrap {

	/*
	 * initiates the plugin
	 *
	 */
	static function init() {

		# after active plugins and pluggable functions are loaded
        add_action( 'plugins_loaded', array( 'Ppremium_Bootstrap', 'components' ) );

		# make the plguin translatable
        add_action( 'init', array( 'Ppremium_Bootstrap', 'translatable' ) );

    }

	/*
	 * after active plugins and pluggable functions are loaded
	 * we can load the required components
	 *
	 */
    static function components() {

        // check if Peenapo Layouts Plugin is active
        if( ! class_exists('Playouts_Bootstrap') ) { return; }

        if( is_admin() ) {

            include PPREMIUM_DIR . 'core/admin/class.Ppremium-Layouts.php';

        }

    }

	/*
	 * make the plguin translatable
	 *
	 */
    static function translatable() {

		load_plugin_textdomain( 'peenapo-premium-txd', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/');

	}

}

Ppremium_Bootstrap::init();
