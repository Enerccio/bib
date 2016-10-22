<?php
/* Smarty version 3.1.30, created on 2016-10-22 22:24:46
  from "/var/www/html/bib/templates/bibentry.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bcb0e863436_27266594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80caeca397f0d3563199642b016da2fc4190c089' => 
    array (
      0 => '/var/www/html/bib/templates/bibentry.tpl',
      1 => 1477167882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:optional.tpl' => 10,
  ),
),false)) {
function content_580bcb0e863436_27266594 (Smarty_Internal_Template $_smarty_tpl) {
if (is_a($_smarty_tpl->tpl_vars['entry']->value,'bib_journal')) {?>
  <?php echo $_smarty_tpl->tpl_vars['entry']->value->get_authors();?>
: <br>
  <?php echo $_smarty_tpl->tpl_vars['entry']->value->get_name();?>
 <br>
  <b><?php echo $_smarty_tpl->tpl_vars['entry']->value->get_journal_name();?>
</b> <br>
  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_number(),'prefix'=>'(','postfix'=>')'), 0, false);
?>
(<?php echo $_smarty_tpl->tpl_vars['entry']->value->get_volume();?>
)(<?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_month(),'prefix'=>'','postfix'=>'-'), 0, true);
echo $_smarty_tpl->tpl_vars['entry']->value->get_year();?>
)<?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_pages(),'prefix'=>', ','postfix'=>''), 0, true);
?>
.<br>
  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_note(),'prefix'=>'[','postfix'=>']<br>'), 0, true);
?>

<?php }
if (is_a($_smarty_tpl->tpl_vars['entry']->value,'bib_book')) {?>
  <?php echo $_smarty_tpl->tpl_vars['entry']->value->get_authors();?>
: <br>
  <b><?php echo $_smarty_tpl->tpl_vars['entry']->value->get_name();?>
</b> <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_volume(),'prefix'=>'(','postfix'=>')'), 0, true);
?>
<br>
  <?php echo $_smarty_tpl->tpl_vars['entry']->value->get_publisher();?>
, <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_month(),'prefix'=>'','postfix'=>'-'), 0, true);
echo $_smarty_tpl->tpl_vars['entry']->value->get_year();?>
 <br>
  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_edition(),'prefix'=>'','postfix'=>'<br>'), 0, true);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_series(),'prefix'=>'','postfix'=>'<br>'), 0, true);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_address(),'prefix'=>'','postfix'=>'<br>'), 0, true);
?>

  <?php $_smarty_tpl->_subTemplateRender("file:optional.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['entry']->value->get_note(),'prefix'=>'[','postfix'=>']<br>'), 0, true);
?>

<?php }
}
}
