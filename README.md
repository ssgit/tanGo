#About

##What is tanGo?

TanGo is a micro PHP framework.
TanGo extensions:

* RainTPL - open source PHP template engine ([http://www.raintpl.com/](http://www.raintpl.com/))
* Idiorm - PHP micro-ORM ([https://github.com/j4mie/idiorm](https://github.com/j4mie/idiorm))

##Hello, World!

The following example illustrates a simple "Hello, World!":

    <?php
    set_include_path(get_include_path() . PATH_SEPARATOR . 'lib');
    session_start();
    require_once('tango/tango.Route.php');
    require_once('tango/tango.Template.php');
    $tpl = new Template();
    $tpl->configure('path_replace', false);
    $staticPages = array(
        '/about' => 'static-pages/about'
    );
    // Routing
    if (Route::bulkMatch($staticPages, $page)) {
        $tpl->draw($page);
    // ----------------------------------------------
    } elseif (Route::match('/')) {
        $tpl->draw('dynamic-pages/home');
    // ----------------------------------------------
    } elseif (Route::match('/say-hello/(?P<name>[a-zA-Z-]+)', $matches)) {
        $tpl->assign('name', $matches['name']);
        $tpl->draw('dynamic-pages/say-hello');
    // ----------------------------------------------
    } else {// The page was not found: display error 404
        $tpl->notFound();
    }
