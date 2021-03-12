<?php
session_start();
$logged = $_SESSION['logged'];
$userss_id=$_SESSION['user_id'];
$users_names=$_SESSION['user_name'];
$enc1=$_SESSION['enc1'];
$enc2=$_SESSION['enc2'];
$total=$enc1+$enc2;
if(!$logged){
  echo "<h1>Ingreso no autorizado</h1>";
  echo '<meta http-equiv="refresh" content="1; url=https://360grados-uttlaxcala.tk/">';
die();
}
$conn = mysqli_connect("localhost","admin_terron","coruco99","admin_terron");
$nombre=$_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>EVALUACIÓN 360 GRADOS UTT</title>
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
  <?php
  session_start();
  ?>
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('https://360grados-uttlaxcala.tk/images/fondor.jpg');">
      <div class="wrap-login100dash p-l-55 p-r-55 p-t-65 p-b-54">
        <div class="titulo">
            <label textalign="center">Bienvenido <?php echo "".$_SESSION['name'] ?>, al sistema de evaluación 360 grados de la Universidad Tecnológica de Tlaxcala</label>
        </div>
        <div class="contenedor">

          <article class="col-5">
            <a href="https://360grados-uttlaxcala.tk/logout">
              <img src="https://360grados-uttlaxcala.tk/images/icons/power.ico" alt="logout360grados" class="imagenc">
              <p class="parafo">Salir</p>
            </a>
          </article>

          <article class="col-5">
            <a href="https://360grados-uttlaxcala.tk/encuesta1">
              <img src="https://360grados-uttlaxcala.tk/images/encuesta.png" alt="encuesta1" class="imagenc">
              <p class="parafo">Evaluación 1</p>
            </a>
          </article>
          <article class="col-5">
            <a href="https://360grados-uttlaxcala.tk/encuesta2">
              <img src="https://360grados-uttlaxcala.tk/images/encuesta.png" alt="encuesta2" class="imagenc">
              <p class="parafo">Evaluación 2</p>
            </a>
          </article>
          <!--
          <div class="col-5">
            <a href="https://360grados-uttlaxcala.tk/encuesta2">
              <img src="https://360grados-uttlaxcala.tk/images/icons/power.ico" alt="encuesta2" class="imagenc">
            </a>
          </div>
        -->
        </div>
        <br>
        <div class="titulo">
          <h1 textalign="center">PROGRESO</label>
          <br>
        </div>
        <br>
        <div class="titulo">
          <progress class="progreso" value="<?php echo $total ?>" max="2">50%</progress>
        </div>
        <div>
          <br>
          <a href="https://360grados-uttlaxcala.tk/avisoprivacidad" textalign="center">Aviso de privacidad</a>
        </div>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/bootstrap/js/popper.js"></script>
  <script src="https://360grados-uttlaxcala.tk/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/daterangepicker/moment.min.js"></script>
  <script src="https://360grados-uttlaxcala.tk/vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="https://360grados-uttlaxcala.tk/js/main.js"></script>


</body>
</html>
