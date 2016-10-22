<?php
/* Smarty version 3.1.30, created on 2016-10-22 21:58:13
  from "/var/www/html/bib/templates/optional.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bc4d51172e5_69999213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e16580659f85468f4e39db48e0e56ca7e990824b' => 
    array (
      0 => '/var/www/html/bib/templates/optional.tpl',
      1 => 1477165393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580bc4d51172e5_69999213 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['data']->value != '') {
echo $_smarty_tpl->tpl_vars['prefix']->value;
echo $_smarty_tpl->tpl_vars['data']->value;
echo $_smarty_tpl->tpl_vars['postfix']->value;
}
}
}
