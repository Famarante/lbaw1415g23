{include file='common/header.tpl'}

<section id="register">
	<div class="container" id="register">
            <div class="row pad-top">
                <div class="col-md-8 col-md-offset-2 col-sm-3 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                    <div class="panel panel-default border-blue">
                        <div class="panel-heading text-center">
                            <strong><h4>Registar</h4></strong>  
                        </div>
                        <div class="panel-body">
                            <form role="form" id="register-form" action="{$BASE_URL}actions/users/register.php" method="post">
                                <br/>
                                    <div class="form-group">
                                    <label for="inputnome">Nome</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="fullname" id="inputnome" placeholder="Introduza o seu nome" required>
                                        <span class="input-group-addon"><span class="fa fa-circle-o-notch fa-fw"></span></span>
                                    </div>
                                        <span class="fa fa-asterisk required-option"></span>
                                </div>
                                <div class="form-group">
                                    <label for="inputusername">Username</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" id="inputusername" placeholder="Introduza o username que deseja" required>
                                        <span class="input-group-addon"><span class="fa fa-tag fa-fw"></span></span>
                                    </div>
                                    <span class="fa fa-asterisk required-option"></span>
                                    <p class="help-block">Username apenas pode conter letras ou numeros</p>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="inputemail" name="email" placeholder="Introduza o seu email" required>
                                        <span class="input-group-addon"><span class="fa fa-at fa-fw"></span></span>
                                    </div>
                                    <span class="fa fa-asterisk required-option"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="inputpassword" name="password" placeholder="Introduza a sua password" required>
                                        <span class="input-group-addon"><span class="fa fa-lock fa-fw"></span></span>
                                    </div>
                                    <span class="fa fa-asterisk required-option"></span>
                                    <p class="help-block">Passwords devem conter pelo menos 8 carateres e utilizar simbolos especiais</p>
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    <label for="rpassword">Confirmar Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="inputrpassword" name="rpassword" placeholder="Volte a introduzir a sua password" required>
                                        <span class="input-group-addon"><span class="fa fa-lock fa-fw"></span></span>
                                    </div>
                                    <span class="fa fa-asterisk required-option"></span>
                                </div>

                                <div class="form-group">
                                    <label for="inputnif">NIF</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nif" id="inputnif" placeholder="Introduza o seu nif">
                                        <span class="input-group-addon"><span class="fa fa-briefcase fa-fw"></span></span>
                                    </div>
                                </div> 
                                
                                                                                            
                                <div class="form-group">
                                    <label for="inputaddress">Morada</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="address" id="inputaddress" placeholder="Introduza a sua morada">
                                        <span class="input-group-addon"><span class="fa fa-map-marker fa-fw"></span></span>
                                    </div>
                                </div>                                  

								<div class="form-group">
                                    <label for="inputzicode">Codigo Postal</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="zipcode" id="inputzipcode" placeholder="Introduza o seu codigo postal" >
                                        <span class="input-group-addon"><span class="fa fa-globe fa-fw"></span></span>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label for="inputcity">Localidade</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="city" id="inputcity" placeholder="Introduza a sua localidade" >
                                        <span class="input-group-addon"><span class="fa fa-globe fa-fw"></span></span>
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label for="inputcountry">Pais</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="country" id="inputcountry" placeholder="Introduza o seu pais" >
                                        <span class="input-group-addon"><span class="fa fa-globe fa-fw"></span></span>
                                    </div>
                                </div> 	

                                <div class="form-group">
                                    <label for="inputphone">Telefone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="phone" id="inputphone" placeholder="Introduza o seu número de telefone" >
                                        <span class="input-group-addon"><span class="fa fa-globe fa-fw"></span></span>
                                    </div>
                                </div> 								
                                
                                <span class="fa fa-asterisk req-color"> Dados obrigatórios</span>
                                
                                <div class="text-center">    
                                    <button type="submit" class="btn btn-default btn-lg btn-success">Registar</button>
                                </div>
                            </form>
                        </div>
                           
                    </div>
                </div>
            </div>
        </div>
</section>

{include file='common/footer.tpl'}
