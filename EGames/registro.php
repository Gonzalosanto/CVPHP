<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
</head>
<body>
<?php 
include("conexiones.php");

	
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// verificamos la conexion 
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$email = $_POST['email'];
	//var_dump($email);
	//die;
	// verificamos si el mail ya está registrado
	$checkEmail = "SELECT * FROM usuario WHERE email = '$email'";

	$result = $conexion-> query($checkEmail);
	$count = mysqli_num_rows($result);

	if ($count >= 1) {
	echo "<br />". "El correo electrónico ya esta registrado." . "<br />";

	echo "<a href='login.php'>Ingrese con su contraseña por aquí</a>.";
	} else {	
	

	$name = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$nickname = $_POST['nickname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	$query = "INSERT INTO usuario (password, nombre, apellido, nickname, email) VALUES ('$passHash', '$name', '$apellido',  '$nickname','$email' )";

	if (mysqli_query($conexion, $query)) {
		echo "<div class='alert alert-success' role='alert'><h3>La cuenta ha sido registrada correctamente.</h3>
		<a class='btn btn-outline-primary' href='login.php' role='button'>Login</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conexion);
		}	
	}

	mysqli_close($conexion);
?>
</body>
</html>