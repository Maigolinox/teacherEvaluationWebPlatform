<?php
$connect = new PDO('mysql:host=localhost;dbname=admin_terron', 'admin_terron', 'coruco99');
$query = "SELECT * FROM user_table ORDER BY user_id ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Resultados de evaluación 360° UTT</title>
    <!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="https://360grados-uttlaxcala.tk/images/icons/favicon.ico"/>
  	<!--===============================================================================================-->
		<script src="graficado/jquery.min.js"></script>
		<link rel="stylesheet" href="graficado/bootstrap.min.css" />
		<link rel="stylesheet" href="graficado/jquery-ui.css">



    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://360grados-uttlaxcala.tk/css/main.css">
    <!--===============================================================================================-->

		<script src="graficado/bootstrap.min.js"></script>
		<script src="graficado/jquery.highchartTable.js"></script>
		<script src="graficado/highcharts.js"></script>
		<script src="graficado/jquery-ui.js"></script>
	</head>
	<body>
		<div class="limiter">

			<div class="container-login100" style="background-image: url('https://360grados-uttlaxcala.tk/images/fondor.jpg');">
				<div class="wrap-login100dash p-l-55 p-r-55 p-t-65 p-b-54">
					<h3 align="center">Cantidad de personas que han resuelto las encuestas</h3>
					<br />
					<div class="table-responsive">
						<table class="table table-bordered table-striped" id="for_chart">
							<thead>
								<tr>
									<th width="20%" textalign="center">Nombre</th>
									<th width="40%" textalign="center">Encuesta 1</th>
									<th width="40%" textalign="center">Encuesta 2</th>
								</tr>
							</thead>
							<?php
							foreach($result as $row)
							{
								echo '
								<tr>
									<td>'.$row["name"].'</td>
									<td>'.$row["enc1"].'</td>
									<td>'.$row["enc2"].'</td>
								</tr>
								';
							}
							?>
						</table>
					</div>
					<br />
					<div id="chart_area" title="Respuesta de encuesta">
					</div>
					<br />
					<div align="center">
						<button type="button" name="view_chart" id="view_chart" class="btn btn-info btn-lg">GRAFICAR RESULTADOS</button>
					</div>
					<br />
					<br />
				</div>

			</div>
			</div>
		<br />

	</body>
</html>

<script>
$(document).ready(function(){

	$('#view_chart').click(function(){
		$('#for_chart').data('graph-container', '#chart_area');
		$('#for_chart').data('graph-type', 'column');
		$("#chart_area").dialog('open');
		$('#for_chart').highchartTable();

		$('#remove_chart').attr('disabled', false);
	});

	$('#remove_chart').click(function(){
		$('#chart_area').html('');
	});

	$("#chart_area").dialog({
		autoOpen:false,
		width: 1000,
		height:500
	});
});
</script>
