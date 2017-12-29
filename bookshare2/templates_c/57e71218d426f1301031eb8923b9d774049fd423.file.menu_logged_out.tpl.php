<?php /* Smarty version Smarty-3.1.15, created on 2017-12-06 09:22:42
         compiled from "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5764971625a27b6e25fda58-02935115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e71218d426f1301031eb8923b9d774049fd423' => 
    array (
      0 => '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/menu_logged_out.tpl',
      1 => 1385719262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5764971625a27b6e25fda58-02935115',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a27b6e2629be7_12069549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a27b6e2629be7_12069549')) {function content_5a27b6e2629be7_12069549($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
