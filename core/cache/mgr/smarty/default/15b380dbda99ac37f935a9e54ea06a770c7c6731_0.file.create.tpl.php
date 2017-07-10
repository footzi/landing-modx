<?php /* Smarty version 3.1.27, created on 2017-07-09 20:54:08
         compiled from "C:\OpenServer\domains\landing-ModX\manager\templates\default\element\snippet\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2357059626dc02d2719_94989491%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15b380dbda99ac37f935a9e54ea06a770c7c6731' => 
    array (
      0 => 'C:\\OpenServer\\domains\\landing-ModX\\manager\\templates\\default\\element\\snippet\\create.tpl',
      1 => 1499621084,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2357059626dc02d2719_94989491',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59626dc02d4e37_22338678',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59626dc02d4e37_22338678')) {
function content_59626dc02d4e37_22338678 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2357059626dc02d2719_94989491';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>