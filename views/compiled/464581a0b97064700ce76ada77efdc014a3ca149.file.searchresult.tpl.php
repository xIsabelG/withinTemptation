<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 10:04:15
         compiled from "views\searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4904560a38edba7c96-75687070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464581a0b97064700ce76ada77efdc014a3ca149' => 
    array (
      0 => 'views\\searchresult.tpl',
      1 => 1444118649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4904560a38edba7c96-75687070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560a38edc67347_40644369',
  'variables' => 
  array (
    'result' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a38edc67347_40644369')) {function content_560a38edc67347_40644369($_smarty_tpl) {?><div id="search">
    <form method="post" action="?page=search">
        <input type="search" name="search_str">
        <input type="submit" value="Search">
    </form>
</div>




<section id="news">

    <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>

        <article>
            <br>
            <h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
            <br>
            <img src="<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>
" id="img">
            <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
            <br>
        </article>

    <?php } ?>
</section>

<div id="endSearch">
    <br>
    <hr>
    <br>
    <h3>That is all for this search term.</h3>
    <br>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
