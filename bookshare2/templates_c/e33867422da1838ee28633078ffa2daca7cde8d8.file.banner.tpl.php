<?php /* Smarty version Smarty-3.1.15, created on 2017-12-07 23:37:50
         compiled from "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15234520125a29c54f64f558-01345864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33867422da1838ee28633078ffa2daca7cde8d8' => 
    array (
      0 => '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/banner.tpl',
      1 => 1512689863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15234520125a29c54f64f558-01345864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a29c54f6838c3_95910543',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a29c54f6838c3_95910543')) {function content_5a29c54f6838c3_95910543($_smarty_tpl) {?><div class='banner'>
	<div class='advanced_search'>
		<form action='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pesquisa/resultados.php' method='get'>
			<input class='advanced_search' type='text' name='general_search' placeholder='Search'>
		</form>	
		<a href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pesquisa/index.php'><input class='advanced_search' type='image' src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/search.jpg'></a>
	</div>
	<img src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/banner.jpg'>
</div>
<main><?php }} ?>
