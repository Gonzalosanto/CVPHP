<!DOCTYPE html>
<html>
<head>
	<title>E-Games Registro</title>
<?php 
include("links.php");
?>
</head>
<body>


	<div class="col-sm-6 col-md-6 col-lg-6 ">
		<form action="registro.php"  method="POST">
  			<div class="container" class="form-group">
		    <h1>Registro</h1>
		    <p>Por favor llene los siguientes campos para registrarse en E-Games</p>
		    <hr>
		    <label for="nickname"><b>Apodo</b></label>
		    <input type="text" class="form-control" placeholder="Ingrese su Apodo" name="nickname" id="nickname" required>

		    <label for="nombre"><b>Nombre</b></label>
		    <input type="text" class="form-control" placeholder="Ingrese su Nombre" name="nombre" id="nombre">

		    <label for="apellido"><b>Apellido</b></label>
		    <input type="text" class="form-control" placeholder="Ingrese su Apellido" name="apellido" id="apellido" >

		    <label for="email"><b>Email</b></label>
		    <input type="text" class="form-control" placeholder="Ingrese su Email" name="email" id="email" required>

		    <label for="password"><b>Contraseña</b></label>
		    <input type="password" class="form-control" placeholder="Ingrese contraseña" name="password" id="password" required>

		    <label for="passwordrepeat"><b>repetir contraseña</b></label>
		    <input type="password" class="form-control" placeholder="Repita contraseña" name="passwordrepeat" id="passwordrepeat" required>
		    <hr>

		    <p>Al registrarse y crear una cuenta acepta los <a href="#">Terminos y Reglamentos</a>.</p>
		    <button type="submit" class="registerbtn">Registrar</button>
		  </div>

		  <div class="container signin">
		    <p>Ya se registro? <a href="login.php">Ingresar</a>.</p>
		  </div>
</form>
	</div>




</body>
</html>