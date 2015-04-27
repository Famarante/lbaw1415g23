<?php /* Smarty version Smarty-3.1.15, created on 2015-04-27 02:55:53
         compiled from "E:\xampp\htdocs\xampp\frmk_loja\templates\users\cliente-edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20847553d75bbe56d59-32622905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80669722eee78645ec657e1640f6cf2ef3157b96' => 
    array (
      0 => 'E:\\xampp\\htdocs\\xampp\\frmk_loja\\templates\\users\\cliente-edit.tpl',
      1 => 1430096149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20847553d75bbe56d59-32622905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_553d75bc015d75_72558010',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERDATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553d75bc015d75_72558010')) {function content_553d75bc015d75_72558010($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="container">
    <h1>Editar Perfil</h1>
  	<hr>
	<div class="row">
      
      <!-- edit form column -->
      <div class="col-md-12 personal-info">
        <div class="alert alert-info alert-dismissable" hidden>
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Informação Pessoal</h3>
        
        <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/clients/cliente-edit.php" method="post">
            <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['username'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['password'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Repetir password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="rpassword" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['password'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nome completo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fullname" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['fullname'];?>
">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['email'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Morada:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['address'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Codigo-postal:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="zipcode" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['zipcode'];?>
">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Localidade:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['city'];?>
">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">País:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="country" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['country'];?>
">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">NIF:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="nif" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['nif'];?>
">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Telefone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['USERDATA']->value['phone'];?>
">
            </div>
          </div>
          <hr>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <button class="btn btn-primary" type="submit">Guardar</button>
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancelar">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
