<?php
    if(isset($_GET["id"])){
        $item="id";
        $valor= $_GET["id"];
        $usuario = FormularioController::index($item, $valor);
        // print_r($usuario);s
    }
?>
<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="POST">

		<div class="form-group">
			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" value = "<?php echo $usuario["nombre"] ?>"class="form-control" id="nombre" name="nombre">

			</div>
			
		</div>

		<div class="form-group">

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-envelope"></i>
					</span>
				</div>

				<input type="email"  value = "<?php echo $usuario["email"] ?>" class="form-control" id="email" name="email">
			
			</div>
			
		</div>

		<div class="form-group">
			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-lock"></i>
					</span>
				</div>

				<input type="password" class="form-control" id="pwd" name="password">
                <input type="hidden"  name="passwordActual" value = "<?php echo $usuario["password"] ?>">
                <input type="hidden"  name="id" value = "<?php echo $usuario["id"] ?>">
			</div>

		</div>
        <?php 
        
$actualizar = new FormularioController();
$actualizar->update();
        ?>
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>

</div>