<?php

/**
 * tango.Template.php
 *
 * This file contains the Template class.
 * @author Sergey Slivkanych <sslivka@yandex.ru>
 */

require_once('raintpl/rain.tpl.class.php');
// RainTPL is an open source PHP template engine, details on http://www.raintpl.com/

class Template extends RainTPL {
    public function notFound() {
        header('HTTP/1.0 404 Not Found');
        $this->draw('error_404');
    }
}
Template::$tpl_dir = 'resources/templates/';
Template::$cache_dir = 'resources/cache/';
