<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
include("conexiones.php");
	
	session_start();

	
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// verificamos la conexion 
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}
	

	$victoriaoderrota = $_POST['victoria'];
	$puntos = $_POST['puntos'];
	$monedas = $_POST['monedas'];
	$muertes = $_POST['muertes'];
	$bajas = $_POST['bajas'];
	$asistencias = $_POST['asistencias'];
	

	$query = "INSERT INTO datos (victoriaoderrota,puntos,monedas,muertes,bajas,asistencias) VALUES ('$victoriaoderrota', '$puntos', '$monedas', '$muertes','$bajas','$asistencias' )";
	if (mysqli_query($conexion, $query)) {
		echo "<div class='alert alert-success' role='alert'><h3>La partida se registro exitosamente.</h3>
		<a class='btn btn-outline-primary' href='formulario.php' role='button'>Registrar partida nueva.</a>
		<a class='btn btn-outline-primary' href='index.php' role='button'>Volver a la página principal</a></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conexion);
		}
	$iddato = mysqli_insert_id($conexion);
	
	$sql = "INSERT INTO juegosusuarios (idUsuario,idDatos,idJuego) VALUES ('".$_SESSION['idUsuario']."', '$iddato' , 0 )";	
	

	
		
	if (mysqli_query($conexion, $sql)) {
		echo "<div class='alert alert-success' role='alert'><h3>La consulta se registro exitosamente.</h3>
		";		
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
		}	
	
	
	

	mysqli_close($conexion);


	/*$email = $_POST['email'];
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
	*/
?>

</body>
</html>
