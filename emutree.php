<?php
/**
 * Plugin Name: Emutree
 * Plugin URI: https://www.shopeo.cn
 * Description: Integrate Emutree.
 * Author: Shopeo
 * Version: 0.0.1
 * Author URI: https://www.shopeo.cn
 * License: GPL2+
 * Text Domain: emutree
 * Domain Path: /languages
 * Requires at least: 5.9
 * Requires PHP: 5.6
 */

require_once 'vendor/autoload.php';

if (!defined('ABSPATH')) {
    exit();
}

if (!defined('EMUTREE_PLUGIN_FILE')) {
    define('EMUTREE_PLUGIN_FILE', __FILE__);
}

if (!defined('EMUTREE_PLUGIN_BASE')) {
    define('EMUTREE_PLUGIN_BASE', plugin_basename(EMUTREE_PLUGIN_FILE));
}

if (!defined('EMUTREE_PATH')) {
    define('EMUTREE_PATH', plugin_dir_path(EMUTREE_PLUGIN_FILE));
}

if (!function_exists('emutree_activate')) {
    function emutree_activate()
    {

    }
}

register_activation_hook(__FILE__, 'emutree_activate');


if (!function_exists('emutree_deactivate')) {
    function emutree_deactivate()
    {
        delete_option('emutree_option_name');
    }
}

register_deactivation_hook(__FILE__, 'emutree_deactivate');

if (!function_exists('emutree_load_textdomain')) {
    function emutree_load_textdomain()
    {
        load_plugin_textdomain('emutree', false, dirname(plugin_basename(__FILE__)) . '/languages');
    }
}

add_action('init', 'emutree_load_textdomain');

if (!function_exists('emutree_add_product_cat_form_fields')) {
    function emutree_add_product_cat_form_fields($taxonomy)
    {

    }
}
add_action('product_cat_add_form_fields', 'emutree_add_product_cat_form_fields', 10, 1);

if (!function_exists('emutree_edit_product_cat_form_fields')) {
    function emutree_edit_product_cat_form_fields($tag, $taxonomy)
    {

    }
}
add_action('product_cat_edit_form_fields', 'emutree_edit_product_cat_form_fields', 10, 2);

if (!function_exists('emutree_save_cat_meta')) {
    function emutree_save_cat_meta($term_id, $tt_id)
    {

    }
}
add_action('edited_product_cat', 'emutree_save_cat_meta', 10, 2);
add_action('create_product_cat', 'emutree_save_cat_meta', 10, 2);