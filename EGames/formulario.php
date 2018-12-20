<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php
	include("links.php");
	?>
</head>
<body>

	<div class="col-sm-6 col-md-6 col-lg-6 ">
		<form action="registropartida.php"  method="POST">
  			<div class="container" class="form-group">
		    <h2>Registro de partida</h2>
		    <p>Por favor llene los siguientes campos para registrar su partida. </p>
		    <hr>

		    <label class="radio-inline" for="victoria">
		    <input type="radio" value="1"  name="victoria" id="victoria" checked>
		    <b>Victoria</b>
		    </label>
		    <label class="radio-inline" for="victoria">
		    <input type="radio" value="0"  name="victoria" id="victoria">
		    <b>Derrota</b>
		    </label>

		    <hr>


		    <label for="puntos"><b>Puntos</b></label>
		    <input type="number" class="form-control" placeholder="Ingrese su puntaje" name="puntos" id="puntos">

		    <label for="monedas"><b>Oro ganado</b></label>
		    <input type="number" class="form-control" placeholder="Ingrese su oro ganadas" name="monedas" id="monedas">

		    <label for="muertes"><b>Muertes</b></label>
		    <input type="number" class="form-control" placeholder="Ingrese su numero de muertes" name="muertes" id="muertes" required>

		    <label for="bajas"><b>Bajas</b></label>
		    <input type="number" class="form-control" placeholder="Ingrese su numero de bajas" name="bajas" id="bajas" required>

		    <label for="asistencias"><b>Asistencias</b></label>
		    <input type="number" class="form-control" placeholder="Ingrese su numero de asistencias " name="asistencias" id="asistencias" required>
		    <hr>

		    <button type="submit" class="registerbtn">Registrar</button>
		    <button  onclick="location.href = 'index.php';" type="button" class="registerbtn">Volver</button>
		  </div>

		</form>
	</div>

</body>
</html>