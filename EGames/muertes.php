<?php 
include("conexiones.php");
session_start();

	
	$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// verificamos la conexion 
	if (!$conexion) {
		die("Connection failed: " . mysqli_connect_error());
	}

	//$sql = "SELECT muertes,bajas,asistencias FROM datos GROUP BY muertes,bajas,asistencias;";
	$sql = "SELECT muertes,bajas,asistencias
			FROM comitfinal.juegosusuarios
			INNER JOIN comitfinal.datos
			ON datos.id=juegosusuarios.idDatos
			WHERE idJuego = 0 AND idUsuario = '" .$_SESSION['idUsuario']. "'
			";

	$rs = mysqli_query($conexion, $sql);
	$arrayDatos = array();
	
	if ( $rs ) {
		while ($r = mysqli_fetch_array($rs) ) {
			array_push($arrayDatos, $r); //recorre la base de datos y pushea los datos en arrayDatos
		}
	}

//codifica el array de datos a JSON
	echo json_encode($arrayDatos, JSON_NUMERIC_CHECK);

?>