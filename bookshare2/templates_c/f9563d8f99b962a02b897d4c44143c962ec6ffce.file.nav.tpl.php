<?php /* Smarty version Smarty-3.1.15, created on 2017-12-29 21:34:59
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/common/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928191815a46b50320f8d6-74536987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9563d8f99b962a02b897d4c44143c962ec6ffce' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/common/nav.tpl',
      1 => 1513158420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928191815a46b50320f8d6-74536987',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b50320f8d5_91773075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b50320f8d5_91773075')) {function content_5a46b50320f8d5_91773075($_smarty_tpl) {?><nav class='main-navigation'>
    <ul class='menu'>
       <li id='home-container'><a id='home' href='home/'>Home</a></li>
        <li><a href='ongoing-books-list/'>Ongoing Books List</a></li>
        <li><a href='finished-books-list/'>Finished Books List</a></li>
        <li class='dropdown' id='loginButton'></li>
<?php }} ?>
