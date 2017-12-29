<?php /* Smarty version Smarty-3.1.15, created on 2017-12-06 09:57:41
         compiled from "templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18072756325a27b6e236c705-30775107%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a679c2441bc57cd8a39726a7e94991c3039e7906' => 
    array (
      0 => 'templates/common/header.tpl',
      1 => 1512554036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18072756325a27b6e236c705-30775107',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a27b6e256d537_38078381',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a27b6e256d537_38078381')) {function content_5a27b6e256d537_38078381($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>BookShare - Read Our Amazing Collection Or Write And Share Your Own Books On The Internet</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/master.css">
    <script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bookshare.js' charset='utf-8'></script>
  </head>
  <script type='text/javascript'>
    document.querySelector('article.main').style.width = '70%';
   </script>
   <aside class='sidebar'>
		<section class='new-book-list'>
        <table>
        <caption>New Book Additions:</caption>
        <tr>
            <th>Book</th>
            <th>Popularity</th>
        </tr>
		</table>
		</section>
	</aside>
    <<?php ?>?php /* <body>
    <header>
      <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_in.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
        <?php echo $_smarty_tpl->getSubTemplate ('common/menu_logged_out.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php }?>
    </header>
    <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
    <div id="tweet_form">
      <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/tweets/tweet.php" method="post">
        <textarea name="tweet" placeholder="Say something"></textarea>
        <input type="submit">
      </form>
    </div>
    <?php }?>
    <div id="error_messages">
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
      <div class="error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php } ?>
    </div>
    <div id="success_messages">
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
      <div class="success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
    <?php } ?>
    </div>*/ ?<?php ?>>
<?php }} ?>
