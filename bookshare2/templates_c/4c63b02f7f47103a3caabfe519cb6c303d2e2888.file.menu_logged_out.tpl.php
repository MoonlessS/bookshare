<?php /* Smarty version Smarty-3.1.15, created on 2017-12-06 09:38:01
         compiled from "templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15689595795a27ba790d2fc2-61193545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c63b02f7f47103a3caabfe519cb6c303d2e2888' => 
    array (
      0 => 'templates/common/menu_logged_out.tpl',
      1 => 1385719262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15689595795a27ba790d2fc2-61193545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a27ba79260a82_67091701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a27ba79260a82_67091701')) {function content_5a27ba79260a82_67091701($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
