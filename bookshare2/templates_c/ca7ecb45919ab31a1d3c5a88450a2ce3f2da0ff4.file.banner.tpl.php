<?php /* Smarty version Smarty-3.1.15, created on 2017-12-29 21:35:01
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/common/banner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9512744485a46b505055636-36933814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7ecb45919ab31a1d3c5a88450a2ce3f2da0ff4' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/common/banner.tpl',
      1 => 1512689820,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9512744485a46b505055636-36933814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b505055632_77324340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b505055632_77324340')) {function content_5a46b505055632_77324340($_smarty_tpl) {?><div class='banner'>
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
