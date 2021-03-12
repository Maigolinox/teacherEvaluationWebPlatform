<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["logged"]);
$logged=false;
header("Location:https://360grados-uttlaxcala.tk/");
?>
