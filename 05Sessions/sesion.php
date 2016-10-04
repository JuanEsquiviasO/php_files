<?php 
session_start();
//Evaluo que la sesión continue verificando una de las variables creadas en control.php, cuando estaya no coincida con su valor inicial se redirije al archivo salir.php
if(!$_SESSION["autentificado"]) {
  header("Location: salir.php");
}
?>