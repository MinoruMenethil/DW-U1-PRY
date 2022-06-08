
<?php require "./inc/sesion.php"; ?>
<?php 

require_once 'conexion.php';
$consulta = "SELECT * FROM usuario";
$result = $conn -> query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include "./inc/head.php";
    
?>
</head>
<body>
<div class="main-container">

	<form action="accesoUsuarios2.php" class="box login" action="" method="POST" autocomplete="off">
		<h5 class="title is-5 has-text-centered is-uppercase">Sistema de inventario</h5>

		<div class="field">
			<label class="label">Usuario</label>
			<div class="control">
			    <input class="input" type="text" name="username2" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
			</div>
		</div>

		<div class="field">
		  	<label class="label">Clave</label>
		  	<div class="control">
		    	<input class="input" type="password" name="password2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required >
		  	</div>
		</div>

		<p class="has-text-centered mb-4 mt-3">
			<button type="submit" class="button is-info is-rounded">Iniciar sesion</button>
		</p>
	</form>


</div>
</body>
</html>