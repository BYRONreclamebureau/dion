<?php
function byron_register_menu_locations()
{
    register_nav_menus([
        'primary' => __('Main menu', 'byron-theme'),
    ]);
}
add_action('after_setup_theme', 'byron_register_menu_locations');

function byron_add_image_sizes()
{
    // Add image sizes according to this code snippet
    // add_image_size('team-member', 500, 500, true);
}
add_action('after_setup_theme', 'byron_add_image_sizes');

remove_action('wp_head', 'wp_generator');

function byron_register_post_types()
{
    // Register your post types here
}
add_action('init', 'byron_register_post_types');
