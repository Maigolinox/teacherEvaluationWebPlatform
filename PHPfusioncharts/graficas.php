<?php
#session_start();
#$logged = $_SESSION['logged'];
#if(!$logged){
#  echo "<h1>Ingreso no autorizado</h1>";
#  echo '<meta http-equiv="refresh" content="1; url=https://360grados-uttlaxcala.tk/">';
#  die();
#}
$conn = mysqli_connect("localhost","admin_terron","coruco99","admin_terron");
$query="SELECT * FROM user_table "
$statement=$conn->prepare($query);
$statement->execute();
$result->$statement->fetchAll();
#$userss_id=$_SESSION['user_id'];
#$users_names=$_SESSION['user_name'];
#$enc1=$_SESSION['enc1'];
#$enc2=$_SESSION['enc2'];

#$total=$enc1+$enc2;
#
#$nombre=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RESULTADOS EVALUACIÓN 360 GRADOS UTT</title>
    <meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!--===============================================================================================-->
  	<link rel="icon" type="image/png" href="https://360grados-uttlaxcala.tk/images/icons/favicon.ico"/>
  	<!--===============================================================================================-->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://highcharttable.org/js/highcharts.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  </head>
  <body>
    <br>
    <div class="container">
      <h3 align="center">GRAFICOS</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-striped" id="for_chart">
          <thead>
            <tr>
              <th width="20%">name</th>
              <th width="40%">enc1</th>
              <th width="40%">enc2</th>
            </tr>
          </thead>
          <?php
          foreach ($result as $row) {
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
      <br>
      <div id="chart_area" id="Prueba de graficas">
        <br>
        <div align="center">
          <button type="button" name="view_chart" id="view_chart" class="btn btn-info btn-lg">Observar información en gráfico</button>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
  $(document).ready(function(){
    $('#chart_area').dialog({
      autoOpen:false,
      width:1000,
      height:500
    });
    $('#view_chart').click(function(){
      $('#for_chart').data('graph-container','#chart_area');
      $('#for_chart').data('graph-type','column');
      $('#chart_area').dialog('open');
      $('#for_chart').highchartTable();
    });
  });
</script>
