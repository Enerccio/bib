<?php
/* Smarty version 3.1.30, created on 2016-10-22 22:43:22
  from "/var/www/html/bib/templates/display.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bcf6a9d2491_34064815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17f0fadd93c4afecb9778cc29540ca2e2eb0244f' => 
    array (
      0 => '/var/www/html/bib/templates/display.tpl',
      1 => 1477168987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bibentry.tpl' => 2,
  ),
),false)) {
function content_580bcf6a9d2491_34064815 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/var/www/html/bib/libs/plugins/function.math.php';
?>
<div class="row">
  <div class="col-md-8" id="displayAll">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bibentries']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
    <div class="panel panel-default clickableDiv" onclick="window.addToBasket(<?php echo $_smarty_tpl->tpl_vars['entry']->value->get_id();?>
, <?php echo $_smarty_tpl->tpl_vars['bibcpage']->value;?>
)">
      <div class="panel-body">
        <div>
          <?php $_smarty_tpl->_subTemplateRender("file:bibentry.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('entry'=>$_smarty_tpl->tpl_vars['entry']->value), 0, true);
?>

        </div>
        <div class="lastEntry">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </div>
      </div>
    </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </div>
  <div class="col-md-4" id="displayBasket">
    <button type="button" class="btn btn-primary" id="getBibTex" onclick="window.showBibTex()">Get BibTex version</button>
    <br/>
    <div class="basketContainer">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['basket']->value, 'entry');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->value) {
?>
        <div class="panel panel-default">
          <div class="panel-body basket">
            <?php $_smarty_tpl->_subTemplateRender("file:bibentry.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('entry'=>$_smarty_tpl->tpl_vars['entry']->value), 0, true);
?>

          </div>
          <div class="lastEntry">
            <a href="#" onclick="window.delFromBasket(<?php echo $_smarty_tpl->tpl_vars['entry']->value->get_id();?>
, <?php echo $_smarty_tpl->tpl_vars['bibcpage']->value;?>
)">
              <span class="glyphicon glyphicon-remove"></span>
            </a>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['bibmaxpage']->value > 0) {?>
  <?php smarty_function_math(array('assign'=>"pagefrom",'equation'=>'max(x-1, 0)+1','x'=>$_smarty_tpl->tpl_vars['bibcpage']->value),$_smarty_tpl);?>

  <?php smarty_function_math(array('assign'=>"pageto",'equation'=>'min(x, y+5)','x'=>$_smarty_tpl->tpl_vars['bibmaxpage']->value,'y'=>$_smarty_tpl->tpl_vars['bibcpage']->value),$_smarty_tpl);?>

  <nav aria-label="Page navigation">
    <ul class="pagination">
      <?php if ($_smarty_tpl->tpl_vars['bibcpage']->value != 0) {?>
      <li>
        <a  href="#" onclick="window.refreshPage(<?php echo smarty_function_math(array('equation'=>'x-1','x'=>$_smarty_tpl->tpl_vars['bibcpage']->value),$_smarty_tpl);?>
)" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php } else { ?>
      <li class="disabled">
        <a  href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php }?>
      <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['pageto']->value+1 - ($_smarty_tpl->tpl_vars['pagefrom']->value) : $_smarty_tpl->tpl_vars['pagefrom']->value-($_smarty_tpl->tpl_vars['pageto']->value)+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = $_smarty_tpl->tpl_vars['pagefrom']->value, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
        <li <?php ob_start();
echo smarty_function_math(array('equation'=>'x+1','x'=>$_smarty_tpl->tpl_vars['bibcpage']->value),$_smarty_tpl);
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?>>
          <a href="#" onclick="window.refreshPage(<?php echo smarty_function_math(array('equation'=>'x-1','x'=>$_smarty_tpl->tpl_vars['page']->value),$_smarty_tpl);?>
)"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
        </li>
      <?php }
}
?>

      <?php ob_start();
echo smarty_function_math(array('equation'=>'x-1','x'=>$_smarty_tpl->tpl_vars['bibmaxpage']->value),$_smarty_tpl);
$_prefixVariable2=ob_get_clean();
if ($_smarty_tpl->tpl_vars['bibcpage']->value < $_prefixVariable2) {?>
      <li>
        <a href="#" onclick="window.refreshPage(<?php echo smarty_function_math(array('equation'=>'x+1','x'=>$_smarty_tpl->tpl_vars['bibcpage']->value),$_smarty_tpl);?>
)" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
      <?php } else { ?>
        <li class="disabled">
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      <?php }?>
    </ul>
  </nav>
<?php }
}
}
