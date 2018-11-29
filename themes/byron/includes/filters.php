<?php
add_filter('wpcf7_autop_or_not', '__return_false');

function byron_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'byron_mime_types');

function byron_wpcf7_do_shortcodes($form) {
    $form = do_shortcode($form);

    return $form;
}
add_filter('wpcf7_form_elements', 'byron_wpcf7_do_shortcodes');
