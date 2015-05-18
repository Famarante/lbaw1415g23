<?php /* Smarty version Smarty-3.1.15, created on 2015-05-11 01:39:52
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\common\header_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8626553d5a284eced7-83398974%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66fc3ac09109e6a0c0ea29f407ab8ba06a75a7b9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\common\\header_logged_in.tpl',
      1 => 1431301179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8626553d5a284eced7-83398974',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d5a288f7603_75152211',
  'variables' => 
  array (
    'ADMIN_USERNAME' => 0,
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'USERID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d5a288f7603_75152211')) {function content_553d5a288f7603_75152211($_smarty_tpl) {?><div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-9 nopad text-right">
				<nav id="login-nav">
					<ul>
						<li id="login">
                            
                            <?php if ($_smarty_tpl->tpl_vars['ADMIN_USERNAME']->value) {?>
				            <a id="login-trigger" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/admin/admin.php" ><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a>
			                 <?php } else { ?>
				            <a id="login-trigger" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/cliente-edit.php?id=<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</a>
			                 <?php }?>
						</li>
						<li id="signup">
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div><?php }} ?>
