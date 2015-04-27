<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-md-offset-10 nopad">
				<nav id="login-nav">
					<ul>
						<li id="login">
							<a id="login-trigger" data-toggle="modal" data-target="#loginModal">Login</a>
						</li>
						<li id="signup">
							<a href="{$BASE_URL}pages/users/register.php">Registar</a>
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
            <form class="form-horizontal" role="form" id="login-form" action="{$BASE_URL}actions/users/login.php" method="post">
            <fieldset>
            <!-- Sign In Form -->
            <!-- Text input-->
            <div class="control-group">
              <label class="control-label" for="userid">Username:</label>
              <div class="controls">
                <input required="" id="userid" name="username" type="text" class="form-control" placeholder="Introduza o seu username" class="input-medium" required="">
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
