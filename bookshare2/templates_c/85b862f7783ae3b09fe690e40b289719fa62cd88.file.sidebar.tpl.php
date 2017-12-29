<?php /* Smarty version Smarty-3.1.15, created on 2017-12-29 21:35:01
         compiled from "/srv/www/htdocs/bookshare/bookshare2/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8192429375a46b50510c332-82985315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b862f7783ae3b09fe690e40b289719fa62cd88' => 
    array (
      0 => '/srv/www/htdocs/bookshare/bookshare2/templates/common/sidebar.tpl',
      1 => 1512689400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8192429375a46b50510c332-82985315',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5a46b50510c338_47543410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a46b50510c338_47543410')) {function content_5a46b50510c338_47543410($_smarty_tpl) {?><script type='text/javascript'>
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
