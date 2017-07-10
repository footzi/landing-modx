<?php /* Smarty version 3.1.27, created on 2017-07-09 20:25:24
         compiled from "C:\OpenServer\domains\landing-ModX\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30984596267044470e1_18065407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8b4ace25f6908cdbecc0d7548ac930d1078e59' => 
    array (
      0 => 'C:\\OpenServer\\domains\\landing-ModX\\manager\\templates\\default\\welcome.tpl',
      1 => 1499621085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30984596267044470e1_18065407',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5962670444a074_55729943',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5962670444a074_55729943')) {
function content_5962670444a074_55729943 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30984596267044470e1_18065407';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>