<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'admin_terron');
define('DB_PASSWORD', 'coruco99');
define('DB_NAME', 'admin_terron');
/* Attempt to connect to MySQL database */
#$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn = mysqli_connect("localhost","admin_terron","coruco99","admin_terron");
    if ($conn==false){
      echo "Hubo un problema al conectarse a María DB";
      die();
    }
?>
