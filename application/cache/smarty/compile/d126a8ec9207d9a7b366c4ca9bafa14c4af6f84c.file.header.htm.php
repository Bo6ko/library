<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 14:29:38
         compiled from "application/views\admin\header.htm" */ ?>
<?php /*%%SmartyHeaderCode:1285d80d1b2c01dc3-48421467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd126a8ec9207d9a7b366c4ca9bafa14c4af6f84c' => 
    array (
      0 => 'application/views\\admin\\header.htm',
      1 => 1568703993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285d80d1b2c01dc3-48421467',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d80d1b2c1b0e5_34442768',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d80d1b2c1b0e5_34442768')) {function content_5d80d1b2c1b0e5_34442768($_smarty_tpl) {?><div class="header shadow">



	<div class="header-info">

		<a href="javascript:void(0);" class="logout"></a>

		<div class="profile">

			<span>Marion <strong>Monae</strong></span>

			<img src="<?php echo @WEB_PATH;?>
/images/header/clients/client1.jpg" />
		</div>

		<div class="icon-nav">
			<div class="icon infromation"><span>77</span></div>
			<div class="icon settings"></div>
		</div>
		<div class="clear"></div>

	</div>

	<div class="header-search">
		<form method="GET" action="">
			<input type="text" name="keyword" value="<?php if (isset($_GET['keyword'])&&!empty($_GET['keyword'])){?><?php echo $_GET['keyword'];?>
<?php }?>" placeholder="Search...">
			<input type="submit" value="" />
		</form>
	</div>


	<div class="clear"></div>
</div>



<script type="text/javascript">

	$('.tab').on('click', function () {

		if ( ($(window).width() < 850) && ($(window).width() > 640) ) {

			var $holder                 = $('.header');

			if ( $holder.hasClass('change-header') ) {
				$holder.removeClass('change-header');
			} else {
				$holder.addClass('change-header');
			}

		}

	});

</script><?php }} ?>