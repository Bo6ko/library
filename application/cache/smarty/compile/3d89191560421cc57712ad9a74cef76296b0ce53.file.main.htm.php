<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 14:29:38
         compiled from "application/views\admin\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:193895d80d1b2bb4f78-15240893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d89191560421cc57712ad9a74cef76296b0ce53' => 
    array (
      0 => 'application/views\\admin\\main.htm',
      1 => 1568273002,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193895d80d1b2bb4f78-15240893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d80d1b2bc74d6_48351608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d80d1b2bc74d6_48351608')) {function content_5d80d1b2bc74d6_48351608($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="fr-FR">

<?php echo $_smarty_tpl->getSubTemplate ("admin/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

	<!-- SIDEBAR BEGIN -->
	<?php echo $_smarty_tpl->getSubTemplate ("admin/sidebar.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- SIDEBAR END -->

	<!-- HEADER BEGIN -->
	<?php echo $_smarty_tpl->getSubTemplate ("admin/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- HEADER END -->

	<!-- Document Wrapper
	============================================= -->
	<div class="content">
		
		<!-- CONTENT BEGIN -->
		<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<!-- CONTENT END -->

	</div>

</body>
</html><?php }} ?>