<?php

include_once get_template_directory() . '/functions/blackbird-functions.php';
$functions_path = get_template_directory() . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
// require_once ( get_stylesheet_directory() . '/include/theme-options.php' );
require_once ($functions_path . 'shortcodes.php');
?>
<?php

/* ----------------------------------------------------------------------------------- */
/* Styles Enqueue */
/* ----------------------------------------------------------------------------------- */

function ddd_add_stylesheet() {
    wp_enqueue_style('shortcodes', get_template_directory_uri() . "/css/shortcode.css", '', '', 'all');
}

add_action('init', 'ddd_add_stylesheet');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function ddd_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('blackbird-ddsmoothmenu', get_template_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('blckbird-flex-slider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'));
        wp_enqueue_script('blackbird-testimonial', get_template_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('blackbird-prettyphoto', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'));
        wp_enqueue_script('blackbird-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'));
        wp_enqueue_script('blackbird-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
    } elseif (is_admin()) {
        
    }
}

add_action('wp_enqueue_scripts', 'ddd_wp_enqueue_scripts');
/* ----------------------------------------------------------------------------------- */
/* Custom Jqueries Enqueue */
/* ----------------------------------------------------------------------------------- */

function ddd_custom_jquery() {
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . "/js/mobile-menu.js", array('jquery'));
}

add_action('wp_footer', 'ddd_custom_jquery');
//Front Page Rename
$get_status = ddd_get_option('re_nm');
$get_file_ac = get_template_directory() . '/front-page.php';
$get_file_dl = get_template_directory() . '/front-page-hold.php';
//True Part
if ($get_status === 'off' && file_exists($get_file_ac)) {
    rename("$get_file_ac", "$get_file_dl");
}
//False Part
if ($get_status === 'on' && file_exists($get_file_dl)) {
    rename("$get_file_dl", "$get_file_ac");
}

//
function ddd_get_option($name) {
    $options = get_option('ddd_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function ddd_update_option($name, $value) {
    $options = get_option('ddd_options');
    $options[$name] = $value;
    return update_option('ddd_options', $options);
}

//
function ddd_delete_option($name) {
    $options = get_option('ddd_options');
    unset($options[$name]);
    return update_option('ddd_options', $options);
}

//Enqueue comment thread js
function ddd_enqueue_scripts() {
    if (is_singular() and get_site_option('thread_comments')) {
        wp_print_scripts('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'ddd_enqueue_scripts');
?>
