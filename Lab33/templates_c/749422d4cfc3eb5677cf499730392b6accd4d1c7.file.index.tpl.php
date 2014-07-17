<?php /* Smarty version Smarty-3.1.18, created on 2014-07-07 07:57:10
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2654653b90f1f1a47c0-68218991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1404712620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2654653b90f1f1a47c0-68218991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53b90f1f293cd8_46905160',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53b90f1f293cd8_46905160')) {function content_53b90f1f293cd8_46905160($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/output_form_style.css" />
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
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
      <li class="output_text"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
    </ul>
    <div class="clear"></div>
  </div>  
</body>
</html><?php }} ?>
