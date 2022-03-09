<?php

namespace Vue\Press\Back;

class VueOptions
{
    private static $init = false;

    public static function init()
    {
        if (self::$init)
            return;
        self::$init = true;

        add_action('admin_menu', [__CLASS__, 'register_sub_menu']);
        add_action('admin_init', [__CLASS__, 'save_options']);
    }

    public static function register_sub_menu()
    {
        add_submenu_page('options-general.php', 'VuePress', 'VuePress', 'manage_options', 'vuepress', [__CLASS__, 'load_template']);
    }

    public static function get_pages()
    {
        $args = [
            'post_type' => 'page',
            'status'    => 'publish',
            'numberposts' => -1
        ];
        $pages = get_posts($args);

        return $pages;
    }

    public static function load_template()
    {
        require_once __DIR__ . '/options.php';
    }

    public static function save_options()
    {
        if (isset($_POST['_vuepress_main_page'])) {
            update_option('_vuepress_main_page', $_POST['_vuepress_main_page'], true);
        }
    }
}
