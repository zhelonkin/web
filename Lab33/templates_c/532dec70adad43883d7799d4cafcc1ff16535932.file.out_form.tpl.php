<?php /* Smarty version Smarty-3.1.19, created on 2014-07-07 12:11:57
         compiled from "C:\server2go\www2\web\Lab33\templates\out_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:726553ba6fb8e99e74-92097168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532dec70adad43883d7799d4cafcc1ff16535932' => 
    array (
      0 => 'C:\\server2go\\www2\\web\\Lab33\\templates\\out_form.tpl',
      1 => 1404727914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '726553ba6fb8e99e74-92097168',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53ba6fb8efda53_16538041',
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ba6fb8efda53_16538041')) {function content_53ba6fb8efda53_16538041($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title>Print User Info</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../templates/out_form.css" />
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
