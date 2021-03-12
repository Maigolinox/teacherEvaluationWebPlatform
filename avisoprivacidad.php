<?php
session_start();
$logged = $_SESSION['logged'];
$userss_id=$_SESSION['user_id'];
$users_names=$_SESSION['user_name'];
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
</head>
<body>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('https://360grados-uttlaxcala.tk/images/fondor.jpg');">
      <div class="wrap-login100dash p-l-55 p-r-55 p-t-65 p-b-54">
        <div class="titulo">
            <h1 textalign="center">Hola <?php echo "".$_SESSION['name'] ?>, te presento el aviso de privacidad:</h1>
            <br>
        </div>
        <div>
          <h2 align="center">AVISO DE PRIVACIDAD SIMPLIFICADO</h2>
          <p align="center">El departamento de servicios escolares y de calidad de la Universidad Tecnológica de Tlaxcala, son los responsables del tratamiento de los datos personales que nos proporcione, los cuales serán protegidos conforme a lo dispuesto por la Ley General de Protección de Datos Personales en Posesión de Sujetos Obligados, y demás normatividad que resulte aplicable.</p>
          <h2 align="center">¿Para qué fines utilizaremos sus datos personales?</h2>
          <p align="justify">Los datos personales que solicitamos los utilizaremos para las siguientes finalidades:</p>
          <table align="center">
            <tr>
              <td align="center"> <b>Finalidad</b></td>
              <td align="center"> <b>¿Requieren consentimiento del titular?</b></td>
            </tr>
            <td align="center">Evaluación docente</td>
            <td align="center">El estudiante los autoriza desde que se registra en el sitio web</td>
          </table>
          <h2 align="center">¿Con quién compartimos su información personal y para qué fines?</h2>
          <p align="justify">Se informa que no se realizarán transferencias de datos personales, salvo aquéllas que sean necesarias para atender requerimientos de información de una autoridad competente, que estén debidamente fundados y motivados.</p>
          Última actualización: 07/12/2020
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
