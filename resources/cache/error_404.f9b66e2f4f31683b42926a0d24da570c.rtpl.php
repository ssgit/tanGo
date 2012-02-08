<?php if(!class_exists('raintpl')){exit;}?><?php $title=$this->var['title']="tanGo - Not Found";?>
<?php $currentPage=$this->var['currentPage']="error_404";?>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_header") . ( substr("_header",-1,1) != "/" ? "/" : "" ) . basename("_header") );?>
<h2>404. Not Found</h2><br />
<div class="control-group error">
    <label class="control-label">The URL was not found.</label>
</div>
<?php $tpl = new RainTpl;$tpl_dir_temp = self::$tpl_dir;$tpl->assign( $this->var );$tpl->draw( dirname("_footer") . ( substr("_footer",-1,1) != "/" ? "/" : "" ) . basename("_footer") );?>