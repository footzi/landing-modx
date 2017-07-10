<?php /* Smarty version 3.1.27, created on 2017-07-09 20:30:52
         compiled from "C:\OpenServer\domains\landing-ModX\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:114785962684c371d25_98963217%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7e199c6095eed9a077cd8f4ad2068bad7c3f71c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\landing-ModX\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1499621085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114785962684c371d25_98963217',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5962684c38de83_46767193',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5962684c38de83_46767193')) {
function content_5962684c38de83_46767193 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114785962684c371d25_98963217';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>