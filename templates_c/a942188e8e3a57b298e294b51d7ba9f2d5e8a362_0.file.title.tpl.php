<?php
/* Smarty version 3.1.30, created on 2016-10-22 22:54:43
  from "/var/www/html/bib/templates/title.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580bd2134c8df5_38375862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a942188e8e3a57b298e294b51d7ba9f2d5e8a362' => 
    array (
      0 => '/var/www/html/bib/templates/title.tpl',
      1 => 1477169680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580bd2134c8df5_38375862 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div>
    <h1>Bibliography Database</h1>
    <p class="lead">Add or view bibliography entries</p>
  </div>

  <div id="bibtex" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">BibTex</h4>
              </div>

              <div class="modal-body">
                <textarea id="bibtexarea" class="form-control col-xs-12 resizableV" rows=15></textarea>
              </div>

              <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>
</div>
<?php }
}
