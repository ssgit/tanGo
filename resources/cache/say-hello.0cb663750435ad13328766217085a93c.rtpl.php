<?php if(!class_exists('raintpl')){exit;}?><?php $title=$this->var['title']="tanGo - Hello, $name";?>
<?php $currentPage=$this->var['currentPage']="say-hello";?>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_header") . ( substr("_header",-1,1) != "/" ? "/" : "" ) . basename("_header") );?>
<h2>Hello, <?php echo $name;?></h2><br />
<p>The following example illustrates a simple using Regular Expressions (<code>/say-hello/(?P&lt;name&gt;[a-zA-Z-]+)</code>).</p>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_footer") . ( substr("_footer",-1,1) != "/" ? "/" : "" ) . basename("_footer") );?>