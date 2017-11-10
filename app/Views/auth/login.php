<?php 
	$var('title', 'Login');
	$resource('/includes/head');
?>

<body class="teal">
	<div class="container" id="login">
		<div class="row">
			<div class="col m6 s10 l4 offset-s1 offset-m3 offset-l4">
				<div class="card-panel">
					<div class="row">
						<form action="/login" method="post">
							<div class="col s12">
								<input type="text" placeholder="Usuario" name="user[usuario]" required>
							</div>
							<div class="col s12">
								<input type="password" placeholder="Password" name="user[password]" required>
							</div>
							<div class="col s12 center">
								<input type="submit" class="btn" value="Ingresar">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

<?php $resource('/includes/scripts'); ?>

