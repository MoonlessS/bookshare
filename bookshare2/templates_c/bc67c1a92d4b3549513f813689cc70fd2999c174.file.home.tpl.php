<?php /* Smarty version Smarty-3.1.15, created on 2017-12-07 23:21:18
         compiled from "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/home/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13146124505a29cafd3d27d6-19826317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc67c1a92d4b3549513f813689cc70fd2999c174' => 
    array (
      0 => '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/home/home.tpl',
      1 => 1512688873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13146124505a29cafd3d27d6-19826317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a29cafd584900_70870307',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a29cafd584900_70870307')) {function content_5a29cafd584900_70870307($_smarty_tpl) {?><article class="main">
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
