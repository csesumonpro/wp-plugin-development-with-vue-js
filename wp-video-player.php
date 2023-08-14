<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
/*
 * Plugin Name: WP Video Player
 * Plugin URI: http://www.wpvideoplayer.net
 * Description: WP Video Player is a completely free, customizable, and easy-to-use video player for WordPress. Its features include responsiveness, fullscreen support, and the ability to customize the player's appearance.
 * Version: 1.0.0
 * Author: WP Video Player
 * Author URI: http://www.wpvideoplayer.net
 * License: GPL2
 * Text Domain: wp-video-player
 * Domain Path: /languages
 */


// Exit if accessed directly

include_once 'app/Application.php';

add_action('plugins_loaded', function () {
	(new Application)->init();
});
