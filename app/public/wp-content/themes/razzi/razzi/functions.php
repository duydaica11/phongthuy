<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Razzi
 */

require_once get_template_directory() . '/inc/class-razzi-theme.php';

\Razzi\Theme::instance()->init();

// add_filter('wp_image_editors', function($editors) {
//   return ['WP_Image_Editor_GD', 'WP_Image_Editor_Imagick'];
// });