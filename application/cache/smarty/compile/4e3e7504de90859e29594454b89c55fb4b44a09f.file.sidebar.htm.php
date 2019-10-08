<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 14:29:38
         compiled from "application/views\admin\sidebar.htm" */ ?>
<?php /*%%SmartyHeaderCode:227875d80d1b2beb8a0-44439377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e3e7504de90859e29594454b89c55fb4b44a09f' => 
    array (
      0 => 'application/views\\admin\\sidebar.htm',
      1 => 1568365492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227875d80d1b2beb8a0-44439377',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d80d1b2bf7d51_73096300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d80d1b2bf7d51_73096300')) {function content_5d80d1b2bf7d51_73096300($_smarty_tpl) {?><div class="sidebar">

	<div class="sidebar-icons">
		<a class="icon icon-mark" href="<?php echo @WEB_PATH_ADMIN;?>
"></a>
		<a class="icon tab icon-get-books" data-holder="books-get"></a>
		<a class="icon tab icon-returned-books" data-holder="books-returned"></a>
		<a class="icon icon-administrator"></a>
		<a class="icon icon-author" href="#"></a>
		<a class="icon icon-book-publishers" href="#"></a>
		<a class="icon icon-category" href="#"></a>
		<a class="icon icon-book" href="#"></a>
		<a class="icon icon-clients" href="#"></a>
		<a class="icon icon-client-types" href="#"></a>
		<a class="icon icon-country" href="#"></a>
		<a class="icon icon-language" href="#"></a>
	</div>

	<div class="sidebar-content">

		<a class="close-sidebar-content">X</a>

		<div class="tab-content content-books-get">

			<div class="book-title">Book title</div>
			<div class="date_taken">Date taken: 01.03.2019</div>
			<div class="date_returned">Date returned: 01.05.2019</div>
			<div class="date_return">Date return: 17.05.2019</div>
			

		</div>

		<div class="tab-content content-books-returned">
			test2222
		</div>

	</div>

	<div class="clear"></div>
</div>


<script>

	$(document).ready(function () {

		$('.sidebar-content').hide();
		var tabContent = $('.tab-content');

		$('.tab').on('click', function () {

			var item                    = $(this);
			var holder_sidebar          = item.parents('.sidebar');
			var holder_sidebar_content  = holder_sidebar.find('.sidebar-content');
			var holder_tab_contents     = holder_sidebar_content.find('.tab-content');
			var holder_tab_content      = 'content-' + item.attr('data-holder');

			holder_tab_contents.hide();

			if (item.hasClass('active')) {
				item.removeClass('active');
				holder_sidebar_content.hide(350);
				$('body').removeClass("reduction");
				holder_sidebar.removeClass("sidebar-extend");
			} else {

				$('body').addClass("reduction");
				holder_sidebar.addClass("sidebar-extend");
				$('.sidebar-content').show(350);

				$('.tab').removeClass('active');

				$('.' + holder_tab_content).show();
				item.addClass('active');
			}

		});

		var claseSidebarContent = $('div.sidebar div.sidebar-content a.close-sidebar-content');
		claseSidebarContent.on('click', function () {

			var item            = $(this);
			var holder_sidebar  = item.parents('.sidebar');
			var holder_sidebar_content  = holder_sidebar.find('.sidebar-content');

			holder_sidebar_content.hide(350);
			$('body').removeClass("reduction");
			$('.tab').removeClass("active");
			holder_sidebar.removeClass("sidebar-extend");

		});

	});

</script><?php }} ?>