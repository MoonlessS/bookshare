<?php /* Smarty version Smarty-3.1.15, created on 2017-12-07 23:32:02
         compiled from "/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3796122605a29c54f6c3567-25511737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dad3bbadb90853489a254c0f8b83ab59ebb9f666' => 
    array (
      0 => '/usr/users2/miec2013/up201305298/public_html/trabalhosSiem/trabalhoPHP-final/bookshare2/bookshare/templates/common/sidebar.tpl',
      1 => 1512689459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3796122605a29c54f6c3567-25511737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a29c54f6dff25_88968226',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a29c54f6dff25_88968226')) {function content_5a29c54f6dff25_88968226($_smarty_tpl) {?><script type='text/javascript'>
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

    <section class='chapter-list'>
        <table>
            <caption>New Chapter Additions:</caption>
            <tbody>
            <tr>
                <th width=30%<?php ?>>Book</th>
                <th>New Chapters</th>
            </tr>
            </tbody>
        </table>
    </section>
</aside><?php }} ?>
