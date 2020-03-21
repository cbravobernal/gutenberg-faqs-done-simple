<?php
/**
 * Plugin Name: gutenberg-faqs-done-simple
 * Plugin URI: https://carlosbravo.me/gutenberg-faqs-done-simple
 * Description: Create easy and CSS customizable faqs.
 * Author: c4rl0sbr4v0
 * Author URI: https://carlosbravo.me/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package SGF
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');

function gutenberg_faqs_done_simple_register_block() {

  wp_enqueue_script(
    'gfds/faq',
    plugins_url( 'build/index.js', __FILE__ ),
    array( 'wp-blocks', 'wp-i18n', 'wp-element', 'wp-components', 'wp-editor' ),
    true
  );

  register_block_type( 'gfds/faq', array(
      'editor_script' => 'gfds/faq',
  ) );

}
add_action( 'init', 'gutenberg_faqs_done_simple_register_block' );
