<?php
function byron_add_options_page()
{
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => __('General options', 'byron-theme'),
        ]);
    }
}
add_action('acf/init', 'byron_add_options_page');

function byron_toolbars($toolbars)
{
    // Add styleselect to start of 'Basic' toolbar
	if( ($key = array_search('styleselect' , $toolbars['Basic'][1])) === false )
	{
	    array_unshift($toolbars['Basic'][1], 'styleselect');
	}

    // Add new toolbar 'Very Basic with Style Formats'
    $toolbars['Very Basic with Style Formats'] = [];
    $toolbars['Very Basic with Style Formats'][1] = ['styleselect', 'removeformat', 'bold', 'italic', 'bullist', 'numlist', 'link', 'unlink'];

    // Add mew toolbar 'Very Basic'
    $toolbars['Very Basic'] = [];
    $toolbars['Very Basic'][1] = ['removeformat', 'bold', 'italic', 'bullist', 'numlist', 'link', 'unlink'];

	return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'byron_toolbars');

function byron_mce_before_init($settings) {
    return $settings;
}
add_filter('tiny_mce_before_init', 'byron_mce_before_init');
