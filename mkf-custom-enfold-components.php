<?php
/**
 * Plugin Name: MKF Custom Enfold Components
 * Plugin URI: https://github.com/emiliogarza/mkf-custom-enfold-components-plugin
 * Description: Adds the Avia Frame shortcodes for a new custom modal and Info Circle Component to the Enfold options with this handy plugin (rather than child theming)
 * Version: 1.0
 * Author: Emilio Garza
 */

function avia_include_shortcode_template($paths) {
	$plugins_url = plugin_dir_url( __FILE__ );
	array_unshift($paths, $plugins_url.'php/');
	return $paths;
}

if (function_exists('avia_load_shortcodes')) {
  add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
}
// Enqueue the stylesheet and scripts too?