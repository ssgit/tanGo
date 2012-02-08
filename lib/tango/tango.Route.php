<?php

/**
 * tango.Route.php
 *
 * This file contains the Router class.
 * @author Sergey Slivkanych <sslivka@yandex.ru>
 */

class Route {
    public static function match($regex, &$matches=false) {
        $regex = str_replace('/', '\/', $regex);
        $regex = '^' . $regex . '\/?$';
        return preg_match("/$regex/i", $_SERVER['REQUEST_URI'], $matches);
    }

    public static function bulkMatch($urls, &$assign=false) {
        foreach ($urls as $url=>$value) {
            if (self::match($url, $matches)) {
                if ($assign === false) {
                    return $value;
                } else {
                    $assign = $value;
                    return true;
                }
            }
        }
        return false;
    }
}
