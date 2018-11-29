<?php
function byron_highlight( $atts, $content = null ) {
	return '<span class="highlight">' . $content . '</span>';
}
add_shortcode('highlight', 'byron_highlight');

function byron_safe_trim($string, $count = 220) {
    $string = strip_tags($string);

    if (strlen($string) > $count) {
        return substr($string, 0, strrpos(substr($string, 0, $count), ' ')) . '...';
    }

    return $string;
}

function byron_date_conversion($format, $date_to_convert) {
    return date_i18n($format, strtotime($date_to_convert));
}

function byron_phone_filter($phone_number) {
	$filtered_phone_arr = [];
	preg_match_all('/[0-9\-\+]/', $phone_number, $filtered_phone_arr);
	$filtered_phone = implode('', $filtered_phone_arr[0]);

	return $filtered_phone;
}

/**
 * Get the contents of a file, relative from the theme directory
 * @param  string $filename  Name of the file (including path relative to theme directory)
 * @param  string $path      Optional path instead of the theme directory
 * @return string            Contents of the file
 */
function byron_file_contents($filename, $path = false) {
    $file = trailingslashit(get_template_directory()) . $filename;
    if ($path) {
        $file = trailingslashit($path) . $filename;
    }

    if (file_exists($file)) {
        return file_get_contents($file);
    }

    return false;
}

/**
 * Extends the WordPress get_template_part() function so it's easy to pass
 * variables to the template part
 * @param  string $template_part Template part to fetch
 * @param  array  $args          Key/value array of arguments. Currently accepted keys are 'template_extra', and 'query_vars'. 'query_vars' must be a key/value array. The key will be the query_var name, and the value will be value of the variable.
 */
function byron_template_part($template_part, $args = [])
{
    $template_extra = null;
    if (isset($args['template_extra'])) {
        $template_extra = $args['template_extra'];
    }

    if (isset($args['query_vars']) && is_array($args['query_vars'])) {
        foreach ($args['query_vars'] as $key => $value) {
            set_query_var($key, $value);
        }
    }
    get_template_part($template_part, $template_extra);
}

function byron_html_att_string($attributes)
{
	$atts_string = '';
	if (is_array($attributes)) {
	    foreach ($attributes as $key => $value) {
	        $atts_string .= ' ' . $key . '="' . $value . '"';
	    }
	}
	return $atts_string;
}
