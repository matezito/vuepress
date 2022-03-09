<?php

namespace Vue\Press\Front;

class VueTheme
{
    private static $init = false;

    public static function init()
    {
        if(self::$init)
            return;
        self::$init = true;

        add_filter('template_include', [__CLASS__, 'main_page'], 99);
    }

    public static function vuepress_load_template($filename = '')
    {
        if (!empty($filename)) {
            if (locate_template('vuepress/' . $filename)) {
                /**
                 * Folder in theme for vuepress templates, this folder must be created into your theme.
                 */
                $template = locate_template('vuepress/' . $filename);
            } else {
                /**
                 * Default folder of templates
                 */
                $template = dirname(__FILE__) . '/partials/' . $filename;
            }
        }
        return $template;
    }

    public static function main_page($template)
    {
        if (is_page(get_option('_vuepress_main_page')))
            $template = self::vuepress_load_template('main.php');
        return $template;
    }
}