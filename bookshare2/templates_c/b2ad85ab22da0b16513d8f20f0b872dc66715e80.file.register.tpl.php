<?php /* Smarty version Smarty-3.1.15, created on 2013-11-29 09:39:31
         compiled from "/usr/users1/dei/arestivo/public_html/example.twitter/templates/users/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1633851969529860d3346123-37914530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ad85ab22da0b16513d8f20f0b872dc66715e80' => 
    array (
      0 => '/usr/users1/dei/arestivo/public_html/example.twitter/templates/users/register.tpl',
      1 => 1385717224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1633851969529860d3346123-37914530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529860d33d3184_50841857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529860d33d3184_50841857')) {function content_529860d33d3184_50841857($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section id="register">
  <h2>Register</h2>

  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post">
    <label>Name: <input type="text" name="realname" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['realname'];?>
"></label><br>
    <label>Username: <input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['username'];?>
"></label><br>
    <label>Password: <input type="password" name="password" value=""></label><br>
    <input type="submit" value="Register">
  </form>

</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
