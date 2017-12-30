<?php /* Smarty version Smarty-3.1.15, created on 2017-12-30 00:40:12
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16620678765a46b5023fd4c5-37870102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c38958bc85decf93aaefa4540af0c5f5cac300' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/common/header.tpl',
      1 => 1514594148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16620678765a46b5023fd4c5-37870102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b5030280d1_60005505',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b5030280d1_60005505')) {function content_5a46b5030280d1_60005505($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <base href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
' target='_self' />
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
css/master.css">
    <script src='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
js/bookshare.js' charset='utf-8'></script>

  </head>
<?php }} ?>
