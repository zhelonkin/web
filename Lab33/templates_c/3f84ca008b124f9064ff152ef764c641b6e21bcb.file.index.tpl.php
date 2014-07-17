<?php /* Smarty version Smarty-3.1.19, created on 2014-07-07 11:25:17
         compiled from "C:\server2go\www2\web\Lab33\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1966453ba3dcce5aa79-33492421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f84ca008b124f9064ff152ef764c641b6e21bcb' => 
    array (
      0 => 'C:\\server2go\\www2\\web\\Lab33\\templates\\index.tpl',
      1 => 1404725113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1966453ba3dcce5aa79-33492421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ba3dcceae8a5_02402520',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba3dcceae8a5_02402520')) {function content_53ba3dcceae8a5_02402520($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../templates/index.css" />
</head>
<body>
  <div class="form">
    <div class="headline">User info</div>
    <ul class="left">
      <li class="info_block first">First Name:</li>
      <li class="info_block all">Last Name:</li>
      <li class="info_block all">Email:</li>
      <li class="info_block all">Sex:</li>
      <li class="info_block all">Birthday:</li>
    </ul>
    <ul class="right">
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value[0];?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value[1];?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value[2];?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value[5];?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value[7];?>
<?php echo $_smarty_tpl->tpl_vars['name']->value[6];?>
<?php echo $_smarty_tpl->tpl_vars['name']->value[8];?>
</li>
    </ul>
    <div class="clear"></div>
  </div>  
</body>
</html><?php }} ?>
