<?php
//para quela cookie funcione se tendrá que espicificar la ruta del directorio en el cuarto parametro com "/" se entiende que la cookie existira en todo el directorio del sitio. 
setcookie("idioma_solicitado", $_GET["idioma"], time()+86400, "/");
header("Location: usar-cookie.php");
?>