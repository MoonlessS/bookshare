<?php /* Smarty version Smarty-3.1.15, created on 2017-12-30 00:40:13
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/login/displayLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2139121095a46b504c45a06-44349117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c17ca61a67813865df67146e163ad69a91b22163' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/login/displayLogin.tpl',
      1 => 1514594290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2139121095a46b504c45a06-44349117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b504f1dc37_40278707',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b504f1dc37_40278707')) {function content_5a46b504f1dc37_40278707($_smarty_tpl) {?><a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
  <div class='space-box'>
    <div class='arrow-up'></div>
  </div>
  <div class='dropdown-content'>
    <form class='login' action='javascript:validateUser(this);' method='post'  autocomplete='on'>
      
      <input type='text' id='username' name='username' placeholder='Username' pattern='[a-zA-Z0-9_-]{3,20}' title='Username should have at least 3 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
      <input type='password' id='password' name='password' placeholder='Password' pattern='[a-zA-Z0-9_-]{6,20}' title='Password should have at least 6 and a maximum of 20 characters between letters, numbers, hyphen or underscore!' required>
      
      <button class='button button1 login-button' style='/*vertical-align:middle*/' onclick='this.form.submit()' name='login'><i class='logo logout-black'></i> <p>LOGIN</p></button>
    </form>
    <div class='login-bot-links'>
      <a href='register/index.php'>SIGN UP</a><a href='#'>RESET PASSWORD</a>
    </div>
  </div>
  <script>resizeNav(false);</script>
  </li>
<?php }} ?>
