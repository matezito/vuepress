<?php

namespace Vue\Press;

use Vue\Press\Back\VueOptions;

class VueInit {
    private static $init = false;

    public static function init()
    {
        if(self::$init)
            return;
        self::$init = true;

        self::menus();
    }

    public static function menus()
    {
        return VueOptions::init();
    }
}