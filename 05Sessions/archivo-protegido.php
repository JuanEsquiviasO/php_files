<?php include("sesion.php"); ?>
Welcome:
<?php echo $_SESSION["usuario"]; ?>
<br><br>
Estas en una página segura con sesiones en PHP
<br><br>
<a href="archivo-protegido2.php">Ir a otra página segura</a>
<br><br>
<a href="salir.php">EXIT</a>
