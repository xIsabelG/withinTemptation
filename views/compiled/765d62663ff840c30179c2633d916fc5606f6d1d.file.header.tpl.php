<?php /* Smarty version Smarty-3.1.18, created on 2015-10-06 10:04:11
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079155f7c484dba554-14502144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444118281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3079155f7c484dba554-14502144',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f7c484e2f875_84848176',
  'variables' => 
  array (
    'current_pag' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f7c484e2f875_84848176')) {function content_55f7c484e2f875_84848176($_smarty_tpl) {?><header>
    <br><br><br><br>
    <h6>This is <strong>not</strong> an official website</h6>
</header>

<nav>
    <h3>Menu</h3>
    <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='about') {?> class="selected<?php }?> ><a href="?page=about">About</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='discography') {?> class="selected <?php }?>><a href="?page=discography">Discography</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='bandmembers') {?> class="selected <?php }?>><a href="?page=bandmembers">Band Members</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='tourdates') {?> class="selected <?php }?>><a href="?page=tourdates">Tour Dates</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='tourvlogs') {?> class="selected <?php }?>><a href="?page=tourvlogs">Tour Vlogs</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='news') {?> class="selected <?php }?> <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='search') {?> class="selected <?php }?>>
            <a href="?page=news">News</a></li>
        <br>
        <li><a href="//withintemptation.probitymerch.com/">Merchandise</a></li>
        <br>
        <li <?php if ($_smarty_tpl->tpl_vars['current_pag']->value=='contact') {?> class="selected <?php }?>><a href="?page=contact">Contact</a></li>
    </ul>
</nav><?php }} ?>
