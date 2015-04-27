{include file='common/header.tpl'}
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
        
        <form class="form-horizontal" role="form" action="{$BASE_URL}actions/clients/cliente-edit.php" method="post">
            <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="username" value="{$USERDATA.username}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" value="{$USERDATA.password}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Repetir password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="rpassword" value="{$USERDATA.password}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nome completo:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="fullname" value="{$USERDATA.fullname}">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="{$USERDATA.email}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Morada:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="address" value="{$USERDATA.address}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Codigo-postal:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="zipcode" value="{$USERDATA.zipcode}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Localidade:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="city" value="{$USERDATA.city}">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">País:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="country" value="{$USERDATA.country}">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">NIF:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="nif" value="{$USERDATA.nif}">
            </div>
          </div>
            <div class="form-group">
            <label class="col-lg-3 control-label">Telefone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="{$USERDATA.phone}">
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
{include file='common/footer.tpl'}
