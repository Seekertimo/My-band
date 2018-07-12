<?php
/* Smarty version 3.1.32, created on 2018-07-11 12:29:16
  from 'C:\Users\user\Documents\ma\bewijzenmap\periode1.4\bap\myband\private\views\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b45dbfc0400a9_41112141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46dbf502e0c4b812e32cc63b07b8778910fbd851' => 
    array (
      0 => 'C:\\Users\\user\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\myband\\private\\views\\news.tpl',
      1 => 1531304952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b45dbfc0400a9_41112141 (Smarty_Internal_Template $_smarty_tpl) {
?>



<h3>Current page: <?php echo $_smarty_tpl->tpl_vars['current_page']->value;?>
</h3>




<p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
        <h2><?php echo $_smarty_tpl->tpl_vars['article']->value[0];?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['article']->value[1];?>
</p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</p>
<?php if ($_smarty_tpl->tpl_vars['current_page']->value > 1) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value-1;?>
">PREVIOUS</a>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['current_page']->value < $_smarty_tpl->tpl_vars['number_of_pages']->value) {?>
    <a href="index.php?page=news&pageno=<?php echo $_smarty_tpl->tpl_vars['current_page']->value+1;?>
">NEXT</a>
<?php }
}
}
