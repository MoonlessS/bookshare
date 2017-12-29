<?php /* Smarty version Smarty-3.1.15, created on 2017-12-29 21:35:01
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/login/logout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10291453275a46b505055639-69650449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b56e6059479a4b876c9d1221a543c020b828537f' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/login/logout.tpl',
      1 => 1513158900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10291453275a46b505055639-69650449',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b505055636_64183431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b505055636_64183431')) {function content_5a46b505055636_64183431($_smarty_tpl) {?>    </li>
    <li id='logout' style='width:5%;min-width: 32px;display:none;'>
      <a href='javascript:logoutUser(this);' style='/*width:100%;*/'><i class='logo logout'></i></a>
    </li>
    <li id='loadingIcon' class='loading-box' style='width:5%;min-width: 32px;/*display:block;*/'>
      <a href='javascript:void(0);' style='/*width:100%;*/'><i class='logo loading'></i></a>
    </li>
  </ul>
</nav>
<?php }} ?>
