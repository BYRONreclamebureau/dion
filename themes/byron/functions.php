<?php
/***********************************
 * functions.php has been split up *
 * to create more clarity          *
 ***********************************/
// Removal of unnecessary WP functions from wp-admin
require_once get_template_directory() . '/includes/cleanup.php';
// Scripts and styles
require_once get_template_directory() . '/includes/scripts.php';
// ACF
require_once get_template_directory() . '/includes/acf.php';
// Default functions (non-action or -filter)
require_once get_template_directory() . '/includes/defaults.php';
// Actions
require_once get_template_directory() . '/includes/actions.php';
// Filters
require_once get_template_directory() . '/includes/filters.php';
// Shortcodes
require_once get_template_directory() . '/includes/shortcodes.php';
