<?php
/**
 * Plugin Name: VuePress
 */

 require __DIR__.'/vendor/autoload.php';

 use Vue\Press\VueInit;
 use Vue\Press\Front\VueTheme;

 VueInit::init();
 VueTheme::init();

 function vuepress_script()
 {
        wp_enqueue_script('vuepress-script', plugins_url('/public/js/app.js', __FILE__), [], '1.0', true);
 }

 add_action('wp_enqueue_scripts', 'vuepress_script');

 function vuepress_script_admin()
 {
    wp_enqueue_script('vuepress-script-admin', plugins_url('/public/admin/admin.js', __FILE__), [], '1.0', true);
 }

 add_action('admin_enqueue_scripts', 'vuepress_script_admin');