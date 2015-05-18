<?php /* Smarty version Smarty-3.1.15, created on 2015-05-09 19:29:53
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\common\header_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26767553d2d9c18e629-23749397%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efcbc4fae1990bc50d27e7545c88d804e6049803' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\common\\header_logged_out.tpl',
      1 => 1431192591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26767553d2d9c18e629-23749397',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d2d9c1c5ee3_49101029',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d2d9c1c5ee3_49101029')) {function content_553d2d9c1c5ee3_49101029($_smarty_tpl) {?><div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-10 nopad">
				<nav id="login-nav">
					<ul>
						<li id="login">
							<a id="login-trigger" data-toggle="modal" data-target="#loginModal">Login</a>
						</li>
						<li id="signup">
							<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Registar</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="mysmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="fade active in" id="signin">
            <span class="pull-right" data-dismiss="modal">x</span>
            <br>
            <form class="form-horizontal" role="form" id="login-form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input autofocus id="userid" name="username" type="text" class="form-control" placeholder="Introduza o seu username" class="input-medium" required="">
              </div>
            </div>

            <!-- Password input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Password:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="password" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <div class="control-group">
              <label class="control-label pull-right" for="forgotpassword">Esqueci-me da password?</label>
            </div>
            <br>
            <br>
            <!-- Button -->
            <div class="control-group text-center">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-lg btn-info" type="submit">Entrar</button>
              </div>
            </div>
            </fieldset>
            </form>
        </div>
    </div>
      </div>

    </div>
</div>
<?php }} ?>
