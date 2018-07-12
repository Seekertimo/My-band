<?php
/* Smarty version 3.1.32, created on 2018-07-12 09:11:15
  from 'C:\Users\user\Documents\ma\bewijzenmap\periode1.4\bap\myband\private\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b46ff130b4d35_09022890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aef9e7be804308b03398850d969b1cb3eced191' => 
    array (
      0 => 'C:\\Users\\user\\Documents\\ma\\bewijzenmap\\periode1.4\\bap\\myband\\private\\views\\login.tpl',
      1 => 1531311044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b46ff130b4d35_09022890 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="index.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit" class="w3-black" name="submit_login">Login</button>
    </div>

    <div class="container">
        <button type="button" class="w3-black" onclick="location.href='index.php?page=home'" class="cancelbtn">Cancel</button>
    </div>
</form><?php }
}
