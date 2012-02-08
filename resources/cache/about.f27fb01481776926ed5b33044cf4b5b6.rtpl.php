<?php if(!class_exists('raintpl')){exit;}?><?php $title=$this->var['title']="tanGo - About";?>
<?php $currentPage=$this->var['currentPage']="about";?>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_header") . ( substr("_header",-1,1) != "/" ? "/" : "" ) . basename("_header") );?>
<h2>About</h2><br />
<h3>What is tanGo?</h3><br />
<p>TanGo is a micro PHP framework.</p>
<p>TanGo extensions:</p>
<ul>
    <li>RainTPL - open source PHP template engine (<a href="http://www.raintpl.com/">http://www.raintpl.com/</a>)</li>
    <li>Idiorm - PHP micro-ORM (<a href="https://github.com/j4mie/idiorm">https://github.com/j4mie/idiorm</a>)</li>
</ul><br />
<h3>Hello, World!</h3><br />
<p>The following example illustrates a simple "Hello, World!":</p>
<pre class="prettyprint">
&lt;?php
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
} elseif (Route::match('/say-hello/(?P&lt;name&gt;[a-zA-Z-]+)', $matches)) {
    $tpl->assign('name', $matches['name']);
    $tpl->draw('dynamic-pages/say-hello');
// ----------------------------------------------
} else {// The page was not found: display error 404
    $tpl->notFound();
}
</pre>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_footer") . ( substr("_footer",-1,1) != "/" ? "/" : "" ) . basename("_footer") );?>