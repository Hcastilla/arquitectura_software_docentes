<?php 
	$var('title', 'Login');
	$resource('/includes/head');
?>

<div class="section container" style="margin-top: 8%;">
	<div class="row">
			<div class="col s12 m6 offset-m3">
					<div class="card login-wrapper">
							<div class="card-content">
									<form method="post" action="/login">
											<h4 class="center lobster">Login</h4>

											<div class="input-field">
													<label for="CustomerEmail">Usuario o email</label>
													<input type="text" autofocus="" name="user[password]" required>
											</div>

											<div class="input-field">
													<label for="CustomerPassword">Contraseña</label>
													<input type="password" name="user[password]" required>
											</div>

											<input type="submit" class="btn-large col s12 blue-ligth" style="margin-bottom: 15px;" value="Iniciar sesión">

											<a href="#recover" onclick="Materialize.toast('Se ha enviado la contraseña a tu correo', 3000)" class="lobster">¿Has olvidado tu contraseña?</a>

									</form>
							</div>
					</div>
			</div>
	</div>
</div>

<?php $resource('/includes/scripts'); ?>

