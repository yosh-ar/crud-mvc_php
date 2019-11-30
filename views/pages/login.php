<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="POST">


		<div class="form-group">

			<label for="email">Correo electrónico:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email" class="form-control" id="email" name="correo">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="pwd">Contraseña:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" name="password">

			</div>

		</div>

		<?php 
        $registro = new FormularioController();
        $registro -> login();
		?>
		
		<button type="submit" class="btn btn-primary">Ingresar</button>

	</form>

</div>