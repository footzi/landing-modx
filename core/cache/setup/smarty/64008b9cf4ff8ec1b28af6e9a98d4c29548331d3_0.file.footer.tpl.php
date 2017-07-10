<?php /* Smarty version 3.1.27, created on 2017-07-09 20:24:52
         compiled from "C:\OpenServer\domains\landing-ModX\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:31775596266e4e69739_49424281%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64008b9cf4ff8ec1b28af6e9a98d4c29548331d3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\landing-ModX\\setup\\templates\\footer.tpl',
      1 => 1492683676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31775596266e4e69739_49424281',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_596266e4e7f254_00511433',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_596266e4e7f254_00511433')) {
function content_596266e4e7f254_00511433 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'C:/OpenServer/domains/landing-ModX/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '31775596266e4e69739_49424281';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>