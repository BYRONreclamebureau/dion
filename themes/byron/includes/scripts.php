<?php
/**
* Use this function to enqueue multiple pre-registered stylesheets at once
* @param  array  $handles Handles of pre-registered stylesheets to enqueue
*/
function byron_enqueue_styles(array $handles)
{
    foreach($handles as $handle) {
        wp_enqueue_style($handle);
    }
}

/**
* Use this function to enqueue multiple pre-registered scripts at once
* @param  array  $handles Handles of pre-registered scripts to enqueue
*/
function byron_enqueue_scripts(array $handles)
{
    foreach($handles as $handle) {
        wp_enqueue_script($handle);
    }
}

/**
 * Register and enqueue stylesheets and javascript files in this function.
 */
function byron_register_and_enqueue_styles_scripts()
{
    // [[REGISTER CSS]]
    // Material design icons
    wp_register_style('byron-mdi', get_template_directory_uri() . '/css/materialdesignicons.min.css', [], '2.1.99');

    // Bootstrap + material design bootstrap
    wp_register_style('byron-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', ['byron-mdi'], '4');

    // Main stylesheet
    wp_register_style('byron-style', get_template_directory_uri() . '/css/style.css', ['byron-bootstrap'], '1.0');
    // Main responsive stylesheet
    wp_register_style('byron-responsive', get_template_directory_uri() . '/css/responsive.css', ['byron-style'], '1.0');


    // [[ENQUEUE CSS]]
    // Add handles to the array in this function call to enqueue them on every page.
    byron_enqueue_styles(['byron-style', 'byron-responsive']);

    // [[REGISTER SCRIPTS]]
    // jQuery
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], '3.2.1');
    wp_register_script('byron-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', ['jquery'], '4', true);
    // Main script
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', ['jquery'], '1.0', true);

    // [[ENQUEUE SCRIPTS]]
    // Add handles to the array in this function call to enqueue them on every page.
    byron_enqueue_scripts(['byron-bootstrap', 'main']);
}
add_action('wp_enqueue_scripts', 'byron_register_and_enqueue_styles_scripts');

function byron_editor_styles()
{
    add_editor_style(get_template_directory_uri() . '/css/style.css');

    wp_enqueue_style('byron-admin', get_template_directory_uri() . '/css/admin.css');
}
add_action('admin_init', 'byron_editor_styles');
