<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 15:02:53
         compiled from "C:\xampp\htdocs\frmk\templates\common\header_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21087557440fd2bc610-92062182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '737b834d29c0092ae8c0712e863ec38515a02020' => 
    array (
      0 => 'C:\\xampp\\htdocs\\frmk\\templates\\common\\header_logged_in.tpl',
      1 => 1433634172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21087557440fd2bc610-92062182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ADMIN_USERNAME' => 0,
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'USERID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_557440fd337e72_02971857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557440fd337e72_02971857')) {function content_557440fd337e72_02971857($_smarty_tpl) {?><div class="header-top">
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
