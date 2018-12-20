<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>E-Games</title>

	<?php
	include("links.php");
	?>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        // Create the data table.
        var jsonData = $.ajax({
          url: "encodeJSON.php",
          dataType: "json",
          async: false
          }).responseText;        
        
       var data = new google.visualization.DataTable();
        data.addColumn('string', 'Partidas');
        data.addColumn('number', 'porcentaje');
               
      var json = jsonData;	
      	obj=JSON.parse(json);
      	console.log(obj);
        
      	data.addRows([
      		["Victorias",obj[1]["count(victoriaoderrota)"]],
      		["Derrotas",obj[0]["count(victoriaoderrota)"]]
      		]);
      	
        // Set chart options
        var options = {'title':'',
        			   'legend': 'left',
                       'width':400,
                       'height':400,
                   backgroundColor: "transparent",
                   legend: { textStyle: {color:"#DDD"}}
               		}
               		;

        // Instantiate and draw our chart, passing in some options. PIE GRAFICO
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        //GRAFICO DE LINEAS

        var jsonLine = $.ajax({
          url: "muertes.php",
          dataType: "json",
          async: false
          }).responseText;

        //PARSEAR JSON
        var jsonObjLine=jsonLine;
        console.log(jsonObjLine);
        objLine = JSON.parse(jsonObjLine);
        console.log(objLine);



        var dataLine =new google.visualization.DataTable();
        dataLine.addColumn('string', 'partida');
        dataLine.addColumn('number', 'cantidad de muertes');
      // dataLine.addColumn('string', 'bajas');
        dataLine.addColumn('number','Cantidad de Bajas');
        //dataLine.addColumn('string', 'asistencias');
        dataLine.addColumn('number','Cantidad de Asistencias');
        
        var numRows = objLine.length;
        var numCols = objLine[0].length;

      
		for (var i = 0; i < numRows; i++) {
			dataLine.addRows([
        	
      		["",objLine[i]["muertes"],objLine[i]["bajas"],objLine[i]["asistencias"]],
      		//["Bajas",objLine[i]["bajas"]],
      		//["Asistencias",objLine[i]["asistencias"]]
      	
      		]);
}
       
          

        var optionsLine = {
          title: 'K/D/A', titleTextStyle: {color:"#DDD"},
          curveType: 'function',
          colors: ['red','blue','green'],
          legend: { position: 'bottom'},
          backgroundColor: "transparent",
          legend: {textStyle: {color:"#DDD"}}
      };

        var chartLine = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chartLine.draw(dataLine, optionsLine);
      }
    </script>
</head>
<body class="seccionBody">
	<nav class="navbar navbar-default" >
  	<div class="container-fluid" id="cabecera">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header" >
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">E-Games</a>
	    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Juegos
		          	<span class="caret"></span></a>
		          <ul class="dropdown-menu">
		          	<a class="dropdown-item" href="https://play.las.leagueoflegends.com/es_AR">League of Legends</a>
		          	<a class="dropdown-item" href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/">Counter Strike: GO</a>
		          	<a class="dropdown-item" href="https://worldofwarcraft.com/es-es/">World of Warcraft</a>
		            
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-right">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Buscar">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-center">
		        <li><a href="formulario.php">Registrar partida</a></li>
		        <li><a href="logout.php">Cerrar sesion</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
</nav>
<header class="fluid-container">
	
</header>

<section >
	<div>
		<label><b>Porcentajes Victoria/Derrota</b></label>
		<div  id="chart_div" style=""></div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ullamcorper ornare imperdiet. In eu lacus elementum, fringilla tortor eu, mattis purus. Ut semper consequat dolor ac pretium. Sed quis velit ornare, placerat lectus eget, egestas enim. Vivamus tincidunt commodo placerat. Aenean condimentum congue luctus. Nam lobortis enim ut quam rhoncus suscipit eu rutrum dolor. Curabitur gravida lectus ut sollicitudin varius.</p>	

	</div>
	<div>
		<div id="curve_chart" style="width: 900px; height: 500px">
			
		</div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ullamcorper ornare imperdiet. In eu lacus elementum, fringilla tortor eu, mattis purus. Ut semper consequat dolor ac pretium. Sed quis velit ornare, placerat lectus eget, egestas enim. Vivamus tincidunt commodo placerat. Aenean condimentum congue luctus. Nam lobortis enim ut quam rhoncus suscipit eu rutrum dolor. Curabitur gravida lectus ut sollicitudin varius.</p>
	</div>
</section>

</body>
</html>