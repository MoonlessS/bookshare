<?php /* Smarty version Smarty-3.1.15, created on 2017-12-13 09:55:29
         compiled from "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/login/displayLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3286721245a30f70abc4305-58143856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a39c0b88f915fffd687cabdab3b12f8aa0e6e6e' => 
    array (
      0 => '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/login/displayLogin.tpl',
      1 => 1513158814,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3286721245a30f70abc4305-58143856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a30f70ad64753_98297941',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a30f70ad64753_98297941')) {function content_5a30f70ad64753_98297941($_smarty_tpl) {?><a class='dropbtn' onclick='javascript:showLogin(this)'>Login</a>
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
<?php }} ?>
