<?php
/* Smarty version 3.1.32, created on 2019-09-06 05:53:16
  from '/var/www/html/prestashop/admin350mzcc0y/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5d722c8c367348_07756764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db284b3251b0de8eed7313a65ba853bf940f722b' => 
    array (
      0 => '/var/www/html/prestashop/admin350mzcc0y/themes/default/template/content.tpl',
      1 => 1532433464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d722c8c367348_07756764 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
