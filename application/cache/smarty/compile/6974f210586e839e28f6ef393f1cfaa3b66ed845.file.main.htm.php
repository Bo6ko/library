<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 22:18:21
         compiled from "application/views\public\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:43835d813f8d9ceda1-44821845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6974f210586e839e28f6ef393f1cfaa3b66ed845' => 
    array (
      0 => 'application/views\\public\\main.htm',
      1 => 1568100595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43835d813f8d9ceda1-44821845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d813f8da4ae50_50284923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d813f8da4ae50_50284923')) {function content_5d813f8da4ae50_50284923($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="fr-FR">

<?php echo $_smarty_tpl->getSubTemplate ("public/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>
	
	<!-- Document Wrapper
	============================================= -->
	<div class="content">

		<!-- HEADER BEGIN -->
		<?php echo $_smarty_tpl->getSubTemplate ("public/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- HEADER END -->
		
		<!-- CONTENT BEGIN -->
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<!-- CONTENT END -->
	
		<!-- FOOTER BEGIN -->
		<?php echo $_smarty_tpl->getSubTemplate ("public/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- FOOTER END -->
	</div>

</body>
</html><?php }} ?>