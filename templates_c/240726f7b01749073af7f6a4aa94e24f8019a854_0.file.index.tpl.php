<?php
/* Smarty version 3.1.30, created on 2016-10-22 13:25:31
  from "/var/www/html/bib/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580b4cab9a7775_31285942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240726f7b01749073af7f6a4aa94e24f8019a854' => 
    array (
      0 => '/var/www/html/bib/templates/index.tpl',
      1 => 1477135530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:title.tpl' => 1,
    'file:add.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_580b4cab9a7775_31285942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Bibliography'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:title.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:add.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<br>
<div class="container" id="content">

</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
