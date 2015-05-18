<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-9 nopad text-right">
				<nav id="login-nav">
					<ul>
						<li id="login">
                            
                            {if $ADMIN_USERNAME}
				            <a id="login-trigger" href="{$BASE_URL}pages/admin/admin.php" >{$USERNAME}</a>
			                 {else}
				            <a id="login-trigger" href="{$BASE_URL}pages/users/cliente-edit.php?id={$USERID}" >{$USERNAME}</a>
			                 {/if}
						</li>
						<li id="signup">
							<a href="{$BASE_URL}actions/users/logout.php">Logout</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>