<?php
ini_set('display_errors', 1);
session_start();
$_SESSION['logged'] = false;
$msg="";
$username="";
if(isset($_POST['username']) && isset($_POST['password'])) {
  if ($_POST['username']==""){
    $msg.="Debe ingresar su usuario <br>";
  }else if ($_POST['password']=="") {
    $msg.="Debe ingresar la clave <br>";
  }else {
    $username = strip_tags($_POST['username']);
    $password= strip_tags($_POST['password']);
    $conn = mysqli_connect("localhost","admin_terron","coruco99","admin_terron");
    if ($conn==false){
      echo "Hubo un problema al conectarse a María DB";
      die();
    }
    $result = $conn->query("SELECT * FROM `user_table` WHERE `user` = '".$username."' AND  `password` = '".$password."' ");
    $users = $result->fetch_all(MYSQLI_ASSOC);
    $count = count($users);
    if ($count == 1){
      $_SESSION['user_id'] = $users[0]['user_id'];
      $_SESSION['name'] = $users[0]['name'];
      $_SESSION['user']=$users[0]['user'];
      $_SESSION['enc1']=$users[0]['enc1'];
      $_SESSION['enc2']=$users[0]['enc2'];
      $msg .= "Redirigiendo";
      $_SESSION['logged'] = true;
      echo '<meta http-equiv="refresh" content="1; url=https://360grados-uttlaxcala.tk/evaluacion">';
    }else{
      $msg .= "No se ha registrado";
      $_SESSION['logged'] = false;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Encuesta 360 grados UTT</title>
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
		<div class="container-login100" alt="Fondo 360 grados UTT"style="background-image: url('https://360grados-uttlaxcala.tk/images/fondor.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">

				<form  method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						<img class="milogo" src="https://360grados-uttlaxcala.tk/images/logo.png" alt="Logo universidad Tecnológica de Tlaxcala">
						<br>
						<br><span>Evaluación docente 360 grados</span>
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Se necesita el usuario">
						<span class="label-input100" >Nombre de usuario:</span>
						<input class="input100" type="text" name="username" placeholder="Coloca tu usuario" value="<?php echo $username ?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Se requiere contraseña">
						<span class="label-input100">Contraseña:</span>
						<input class="input100" type="password" name="password" placeholder="Introduce tu contraseña">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							<!--¿Olvidaste tu contraseña?-->
						</a>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Ingresar
							</button>
						</div>
					</div>

<div class="alerta">
<?php echo $msg ?>
</form>
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
