<?php
/* Smarty version 3.1.32, created on 2018-07-11 12:28:26
  from 'C:\Users\user\Documents\ma\bewijzenmap\periode1.4\bap\myband\private\views\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45dbca8e66a0_58028405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9987d84def38c6299ad2b72019597edfe8ec643' => 
    array (
      0 => 'C:\\Users\\user\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\myband\\private\\views\\menu.tpl',
      1 => 1531304870,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45dbca8e66a0_58028405 (Smarty_Internal_Template $_smarty_tpl) {
?><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
<form method="get" action="index.php">
    <input type="hidden" name="page" value="news">
    <input name="searchterm" >
    <input type="submit" name="submit" value="ZOEK">
</form><?php }
}
