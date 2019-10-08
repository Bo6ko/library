<?php /* Smarty version Smarty-3.1.8, created on 2019-09-17 21:29:10
         compiled from "application/views\admin\publishers\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:316155d813406eef353-80688598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b704e44a279ca188769e2ecc92577fd3d7aab29' => 
    array (
      0 => 'application/views\\admin\\publishers\\index.htm',
      1 => 1568717665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316155d813406eef353-80688598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'countries' => 0,
    'country' => 0,
    'administrators' => 0,
    'administrator' => 0,
    'results' => 0,
    'publisher' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d8134074f6c41_96998650',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d8134074f6c41_96998650')) {function content_5d8134074f6c41_96998650($_smarty_tpl) {?>	<form class="search" method="GET" action="">

		<div class="filter">
			<label for="publisher_id">Publisher id: </label><br />
			<input id="publisher_id" type="text" name="publisher_id" value="<?php if (isset($_GET['publisher_id'])&&!empty($_GET['publisher_id'])){?><?php echo $_GET['publisher_id'];?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_name">Publisher name: </label><br />
			<input id="publisher_name" type="text" name="publisher_name" value="<?php if (isset($_GET['publisher_name'])&&!empty($_GET['publisher_name'])){?><?php echo htmlspecialchars($_GET['publisher_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="country_id">Country: </label><br />
			<select id="country_id" name="country_id">
				<option value=""> - Choice - </option>
				<?php if (isset($_smarty_tpl->tpl_vars['countries']->value)&&!empty($_smarty_tpl->tpl_vars['countries']->value)&&is_array($_smarty_tpl->tpl_vars['countries']->value)&&count($_smarty_tpl->tpl_vars['countries']->value)>0){?>
				<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
" <?php if (isset($_GET['country_id'])&&$_GET['country_id']==$_smarty_tpl->tpl_vars['country']->value['country_id']){?>selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
 </option>
				<?php } ?>
				<?php }?>
			</select>
		</div>

		<div class="filter">
			<label for="publisher_city">City: </label><br />
			<input id="publisher_city" type="text" name="publisher_city" value="<?php if (isset($_GET['publisher_city'])&&!empty($_GET['publisher_city'])){?><?php echo htmlspecialchars($_GET['publisher_city'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_address">Address: </label><br />
			<input id="publisher_address" type="text" name="publisher_address" value="<?php if (isset($_GET['publisher_address'])&&!empty($_GET['publisher_address'])){?><?php echo htmlspecialchars($_GET['publisher_address'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_bulstat">Bulstat: </label><br />
			<input id="publisher_bulstat" type="text" name="publisher_bulstat" value="<?php if (isset($_GET['publisher_bulstat'])&&!empty($_GET['publisher_bulstat'])){?><?php echo htmlspecialchars($_GET['publisher_bulstat'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_postcode">Postcode: </label><br />
			<input id="publisher_postcode" type="text" name="publisher_postcode" value="<?php if (isset($_GET['publisher_postcode'])&&!empty($_GET['publisher_postcode'])){?><?php echo htmlspecialchars($_GET['publisher_postcode'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_phone">Phone: </label><br />
			<input id="publisher_phone" type="text" name="publisher_phone" value="<?php if (isset($_GET['publisher_phone'])&&!empty($_GET['publisher_phone'])){?><?php echo htmlspecialchars($_GET['publisher_phone'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_email">Email: </label><br />
			<input id="publisher_email" type="text" name="publisher_email" value="<?php if (isset($_GET['publisher_email'])&&!empty($_GET['publisher_email'])){?><?php echo htmlspecialchars($_GET['publisher_email'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="publisher_domain">Domain: </label><br />
			<input id="publisher_domain" type="text" name="publisher_domain" value="<?php if (isset($_GET['publisher_domain'])&&!empty($_GET['publisher_domain'])){?><?php echo htmlspecialchars($_GET['publisher_domain'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" >
		</div>

		<div class="filter">
			<label for="administrator_id">Administrator: </label><br />
			<select id="administrator_id" name="administrator_id">
				<option value=""> - Choice - </option>
				<?php if (isset($_smarty_tpl->tpl_vars['administrators']->value)&&!empty($_smarty_tpl->tpl_vars['administrators']->value)&&is_array($_smarty_tpl->tpl_vars['administrators']->value)&&count($_smarty_tpl->tpl_vars['administrators']->value)>0){?>
				<?php  $_smarty_tpl->tpl_vars['administrator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['administrator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['administrators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['administrator']->key => $_smarty_tpl->tpl_vars['administrator']->value){
$_smarty_tpl->tpl_vars['administrator']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['administrator']->value['administrator_id'];?>
" <?php if (isset($_GET['administrator_id'])&&$_GET['administrator_id']==$_smarty_tpl->tpl_vars['administrator']->value['administrator_id']){?>selected="selected"<?php }?>> <?php echo $_smarty_tpl->tpl_vars['administrator']->value['administrator_firstname'];?>
 </option>
				<?php } ?>
				<?php }?>
			</select>
		</div>

		<div class="filter">
			<label for="order_by">Order by: </label><br />
			<select id="order_by" name="order_by">
				<option value=""> - Choice - </option>
				<option value="asc" <?php if (isset($_GET['order_by'])&&$_GET['order_by']=='asc'){?>selected="selected"<?php }?>> ASC </option>
				<option value="desc" <?php if (isset($_GET['order_by'])&&$_GET['order_by']=='desc'){?>selected="selected"<?php }?>> DESC </option>
			</select>
		</div>

		<div class="filter">
			<label for="sort_by">Sort by: </label><br />
			<select id="sort_by" name="sort_by">
				<option value=""> - Choice - </option>
				<option value="publisher_id" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_id'){?>selected="selected"<?php }?>> ID </option>
				<option value="country_id" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='country_id'){?>selected="selected"<?php }?>> Country </option>
				<option value="publisher_name" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_name'){?>selected="selected"<?php }?>> Name </option>
				<option value="publisher_city" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_city'){?>selected="selected"<?php }?>> City </option>
				<option value="publisher_address" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_address'){?>selected="selected"<?php }?>> Address </option>
				<option value="publisher_postcode" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_postcode'){?>selected="selected"<?php }?>> Postcode </option>
				<option value="publisher_email" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_email'){?>selected="selected"<?php }?>> Email </option>
				<option value="publisher_phone" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_phone'){?>selected="selected"<?php }?>> Phone </option>
				<option value="publisher_domain" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_domain'){?>selected="selected"<?php }?>> Domain </option>
				<option value="publisher_bulstat" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='publisher_bulstat'){?>selected="selected"<?php }?>> Bulstat </option>
				<option value="administrator_id" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='administrator_id'){?>selected="selected"<?php }?>> Administrator </option>
				<option value="created" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='created'){?>selected="selected"<?php }?>> Date </option>
				<option value="status" <?php if (isset($_GET['sort_by'])&&$_GET['sort_by']=='status'){?>selected="selected"<?php }?>> Status </option>
			</select>
		</div>

		<div class="filter">
			<input class="btn" type="submit" value="Submit" />
		</div>
		<div class="clear"></div>
	</form>
	<br />

	<?php if (isset($_smarty_tpl->tpl_vars['results']->value)&&!empty($_smarty_tpl->tpl_vars['results']->value)&&is_array($_smarty_tpl->tpl_vars['results']->value)){?>
		<table class="publishers">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Country</th>
					<th>City</th>
					<th>Address</th>
					<th>Bulstat</th>
					<th>Post code</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Domain</th>
					<th>Administrator</th>
				</tr>
			</thead>
		<?php  $_smarty_tpl->tpl_vars['publisher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['publisher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['publisher']->key => $_smarty_tpl->tpl_vars['publisher']->value){
$_smarty_tpl->tpl_vars['publisher']->_loop = true;
?>
			<tbody>
				<tr>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_id'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_name'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['country_name'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_city'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_address'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_bulstat'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_postcode'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_phone'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_email'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['publisher_domain'];?>
</div></td>
					<td><div class="publisher_name"><?php echo $_smarty_tpl->tpl_vars['publisher']->value['administrator_firstname'];?>
</div></td>
				</tr>
			</tbody>
		<?php } ?>

		</table>

	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['results']->value['pagination']))){?><div class="clear"> </div><?php echo $_smarty_tpl->tpl_vars['results']->value['pagination'];?>
<?php }?><?php }} ?>