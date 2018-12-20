<!DOCTYPE html>
<html>
<head>
	<title>lol</title>
	<?php
	include("links.php");
	?>
</head>
<body>
<?php

	include ("conexiones.php");	
	$conexiones = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (!$conexiones) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$nickname = $_POST['nickname']; 
	$password = $_POST['password'];
	
	$result = mysqli_query($conexiones, "SELECT nickname, password,id FROM usuario WHERE nickname = '$nickname'");
	
	$row = mysqli_fetch_assoc($result);
	
	$hash = $row['password'];
	
	/* 
	password_Verify() verifica que la contraseña ingresada por el usuario se la misma que está guardada en la base de datos.
	*/
	if (password_verify($password, $hash)) {

		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['idUsuario']= $row['id'];
		$_SESSION['nickname'] = $row['nickname'];
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
		
		header("location: index.php");
	
	} else {
		echo "<div class='alert alert-danger' role='alert'>Las credenciales no son válidas!
		<p><a href='login.php'><strong>Por favor vuelva a intentarlo!</strong></a></p></div>";			
	}	
?>
</body>
</html>