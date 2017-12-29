<?php /* Smarty version Smarty-3.1.15, created on 2017-12-29 21:35:01
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19370523475a46b5050cf436-36548735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '034c4be293404ddc18647c55ff676b7cc8bfecf0' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/home/home.tpl',
      1 => 1512688860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19370523475a46b5050cf436-36548735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b5050cf434_90815246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b5050cf434_90815246')) {function content_5a46b5050cf434_90815246($_smarty_tpl) {?><article class="main">
	<div class="block">
		<p class="title block purple border">
			NOTA: Carregar Home para ir para a Homepage do site BookShare, Home na Homepage do site regressa aqui.
		</p>
		<p class="title block purple border">
			NOTA2: Credenciais exemplo:
			<br>  Username: username
			<br>  Password: password
			<br>Testado e a funcionar em: Mozilla Firefox com resolução 1280x720
		</p>
		<div class="float" >
			<div class="book-title-container">
				<div id="title" width=40%<?php ?>>Filipa Coelho Nunes</div>
				<div id="author" width=10%<?php ?>>up201305298@fe.up.pt</div>
			</div>
			<br>
			<div class="block">
				<img class="border" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/foto2.jpg">
			</div>
		</div>
		<div class="float">
			<div class="book-title-container">
				<div id="title" width=40%<?php ?>>José Pedro Vieira Gomes</div>
				<div id="author" width=40%<?php ?>>up201307839@fe.up.pt</div>
			</div>
			<br>
			<div class="block">
				<img class="border" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/foto.jpg">
			</div>
		</div>
	</div>
	<div class="green title"><a href="relatorio/">Link Anexos Relatótio</a></div>
	<br>
	<br>
	<br>
	<p class="title block purple border"> NOTA: Carregar Home para ir para a Homepage do site BookShare, Home na Homepage do site regressa aqui.</p>
</article>
<?php }} ?>
