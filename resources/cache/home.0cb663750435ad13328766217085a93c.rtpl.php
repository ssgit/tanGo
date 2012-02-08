<?php if(!class_exists('raintpl')){exit;}?><?php $title=$this->var['title']="tanGo - Homepage";?>
<?php $currentPage=$this->var['currentPage']="home";?>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_header") . ( substr("_header",-1,1) != "/" ? "/" : "" ) . basename("_header") );?>
<h2>Homepage</h2><br />
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_footer") . ( substr("_footer",-1,1) != "/" ? "/" : "" ) . basename("_footer") );?>