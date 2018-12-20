<!DOCTYPE html>
<html lang="es">
<head>
	<title>E-Games</title>

	<link rel="stylesheet" type="text/css" href="ceses/stylesLogin.css">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  	integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  	crossorigin="anonymous"></script>


	<link rel="stylesheet" type="text/css" href="ceses/styles.css">
		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>

<form class="loginStyles" action="logincheck.php" method="POST" >
	<!-- <div class="container">
		
-->
<div class="container "  align="center">
	<div class="col-sm-6 col-sm-offset-3">
  <form action="login.php" method="POST">
    <div class="form-group">
      <label for="usuario">Usuario:</label>
      <input type="usuario" class="form-control" id="nickname" placeholder="Ingresar usuario" name="nickname" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Ingresar contraseña" name="password" required>
    </div>
   
    <button type="submit" class="btn btn-default">Ingresar</button>
    <button type="button" class="btn-default btn" onclick="window.location.href='registroform.php'">Registrarse</button>
  </form>
</div>
</div>

</form>


</body>
</html>