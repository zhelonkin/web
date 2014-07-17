<?php /* Smarty version Smarty-3.1.19, created on 2014-07-17 20:35:14
         compiled from "D:\server2go\www2\web\Lab33\templates\out_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2524553bab3d8c5a9a5-83303596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcfb6c7aa8adff7f84198c1847186179123d87d5' => 
    array (
      0 => 'D:\\server2go\\www2\\web\\Lab33\\templates\\out_form.tpl',
      1 => 1404753774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2524553bab3d8c5a9a5-83303596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53bab3d8e20ef3_28762655',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bab3d8e20ef3_28762655')) {function content_53bab3d8e20ef3_28762655($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../templates/style.css" />
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
/<?php echo $_smarty_tpl->tpl_vars['name']->value[6];?>
/<?php echo $_smarty_tpl->tpl_vars['name']->value[8];?>
</li>
    </ul>
    <div class="clear"></div>
  </div>  
</body>
</html><?php }} ?>
