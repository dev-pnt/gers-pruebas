<?php /* Smarty version 2.6.11, created on 2013-02-14 09:32:07
         compiled from modules/ModuleBuilder/tpls/index.tpl */ ?>
<iframe id="yui-history-iframe" src="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png" title="index.php?entryPoint=getImage&imageName=sugar-yui-sprites-grey.png"></iframe>
<input id="yui-history-field" type="hidden"> 
<div class='ytheme-gray' id='mblayout' style="position:relative; height:0px; overflow:visible;">
</div>
<div id='mbcenter'>
<div id='mbtabs'></div>
<?php echo $this->_tpl_vars['CENTER']; ?>

</div>

<div id='mbeast' class="x-layout-inactive-content">
<?php echo $this->_tpl_vars['PROPERTIES']; ?>

</div>
<div id='mbeast2' class="x-layout-inactive-content">
</div>
<div id='mbhelp' class="x-hidden"></div>
<div id='mbwest' class="x-hidden">
<div id='package_tree' class="x-hidden"></div>
<?php echo $this->_tpl_vars['TREE']; ?>

</div>
<div id='mbsouth' class="x-hidden">
</div>
<?php echo $this->_tpl_vars['tiny']; ?>

<script>
ModuleBuilder.setMode('<?php echo $this->_tpl_vars['TYPE']; ?>
');
closeMenus();
<?php echo '
//document.getElementById(\'HideHandle\').parentNode.style.display = \'none\';
var MBLoader = new YAHOO.util.YUILoader({
    require : ["layout", "element", "tabview", "treeview", "history", "cookie", "sugarwidgets"],
    loadOptional: true,
    skin: { base: \'blank\', defaultSkin: \'\' },
	onSuccess: ModuleBuilder.init,
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
MBLoader.addModule({
    name :"sugarwidgets",
    type : "js",
    fullpath: "include/javascript/sugarwidgets/SugarYUIWidgets.js",
    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview"]
});
MBLoader.insert();
'; ?>

</script>
<div id="footerHTML" class="y-hidden">
    <table width="100%" cellpadding="0" cellspacing="0"><tr><td nowrap="nowrap">
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_HOME']; ?>
" onclick="ModuleBuilder.main('home');">
    <?php if ($this->_tpl_vars['TEST_STUDIO'] == true): ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_STUDIO']; ?>
" onclick="ModuleBuilder.main('studio');">
    <?php endif; ?>
    <?php if ($this->_tpl_vars['ADMIN'] == true): ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_MODULEBUILDER']; ?>
" onclick="ModuleBuilder.main('mb');">
    <?php endif; ?>
    <input type="button" class="button" value="<?php echo $this->_tpl_vars['mod']['LBL_DROPDOWNEDITOR']; ?>
" onclick="ModuleBuilder.main('dropdowns');">
    </td><td align="left">
        <img height="25" width="83" class="img" src="include/images/poweredby_sugarcrm_65.png" border="0" align="absmiddle"/>
     </td></tr></table>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'modules/ModuleBuilder/tpls/assistantJavascript.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>