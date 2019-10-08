<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 22:42:41
         compiled from "application/views\admin\publishers\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:241315d80e0fbcb3426-11910699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '933c9146144647b61d64d8b9986a39a19d8223be' => 
    array (
      0 => 'application/views\\admin\\publishers\\update.htm',
      1 => 1568752957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241315d80e0fbcb3426-11910699',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d80e0fbe365b5_37643817',
  'variables' => 
  array (
    'data' => 0,
    'countries' => 0,
    'country' => 0,
    'administrators' => 0,
    'administrator' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d80e0fbe365b5_37643817')) {function content_5d80e0fbe365b5_37643817($_smarty_tpl) {?><div class="content-main">

	<h1>Create Publishers:</h1>
	<form id="form_publisher" class="admin-form" method="post" action="" onsubmit="return false">

		<input type="hidden" name="publisher_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_id'];?>
" />

		<div class="field">
			<label for="publisher_name">Name</label>
			<input id="publisher_name" type="text" name="publisher_name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_name'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher name">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_name_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="country_id">Country: </label>
			<select id="country_id" name="country_id">
				<option value=""> - Choice - </option>
				<?php if (isset($_smarty_tpl->tpl_vars['countries']->value)&&!empty($_smarty_tpl->tpl_vars['countries']->value)&&is_array($_smarty_tpl->tpl_vars['countries']->value)&&count($_smarty_tpl->tpl_vars['countries']->value)>0){?>
				<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['country_id'])&&$_smarty_tpl->tpl_vars['data']->value['country_id']==$_smarty_tpl->tpl_vars['country']->value['country_id']){?>selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
 </option>
				<?php } ?>
				<?php }?>
			</select>
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['country_id_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_city">City</label>
			<input id="publisher_city" type="text" name="publisher_city" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_city'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_city'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_city'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher city">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_city_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_address" >Address</label>
			<input id="publisher_address" type="text" name="publisher_address" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_address'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_address'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_address'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher address">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_address_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_postcode">Postcode</label>
			<input id="publisher_postcode" type="text" name="publisher_postcode" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_postcode'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_postcode'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_postcode'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher postcode">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_postcode_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_email">Email</label>
			<input id="publisher_email" type="text" name="publisher_email" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_email'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_email'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher email">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_email_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_phone">Phone</label>
			<input id="publisher_phone" type="text" name="publisher_phone" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_phone'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_phone'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_phone'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher phone">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_phone_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_domain">Domain</label>
			<input id="publisher_domain" type="text" name="publisher_domain" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_domain'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_domain'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_domain'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher domain">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_domain_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="publisher_bulstat">Bulstat</label>
			<input id="publisher_bulstat" type="text" name="publisher_bulstat" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['publisher_bulstat'])&&!empty($_smarty_tpl->tpl_vars['data']->value['publisher_bulstat'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['publisher_bulstat'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" placeholder="publisher bulstat">
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_bulstat_message'];?>
</span><?php }?>
		</div>

		<div class="field">
			<label for="administrator_id">Administrator</label>
			<select id="administrator_id" name="administrator_id">
				<option> choice </option>
				<?php if (isset($_smarty_tpl->tpl_vars['administrators']->value)&&!empty($_smarty_tpl->tpl_vars['administrators']->value)&&is_array($_smarty_tpl->tpl_vars['administrators']->value)&&count($_smarty_tpl->tpl_vars['administrators']->value)>0){?>
				<?php  $_smarty_tpl->tpl_vars['administrator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['administrator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['administrator']->key => $_smarty_tpl->tpl_vars['administrator']->value){
$_smarty_tpl->tpl_vars['administrator']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['administrator']->value['administrator_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['data']->value['administrator_id'])&&$_smarty_tpl->tpl_vars['data']->value['administrator_id']==$_smarty_tpl->tpl_vars['administrator']->value['administrator_id']){?>selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['administrator']->value['administrator_firstname'];?>
 </option>
				<?php } ?>
				<?php }?>
			</select>
			<?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['status']==false){?><span class="error"><?php echo $_smarty_tpl->tpl_vars['data']->value['administrator_id_message'];?>
</span><?php }?>
		</div>

		<input class="btn update_publisher" onclick="submitPublisher()" type="submit" value="Submit" />


	</form>

</div>



<script type="text/javascript">

	function submitPublisher(  ) {

		var $form_holder = $('form#form_publisher');

		var response    = $("#response");

		response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");



		var data = $form_holder.serialize();

		//alert('<?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_id'];?>
');

		$.ajax({
			url			: 'http://library.localhost/admin/publishers/update_ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['publisher_id'];?>
',
			type		: "POST",
			dataType	: "json",
			data		: data,
			success		: function( json ) {


				if ( json.status ) {
					// true
					response.addClass("success");
				} else{
					// false
					response.addClass("error");
				}

				response.html( json.message );

				console.log(json);


			},
			error		: function(error) {
				console.log(error);
				console.log(error.responseText);
			}
		});

	}

</script><?php }} ?>