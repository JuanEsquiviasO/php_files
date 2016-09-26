<?php
// comentario de una sola linea
/*
Esto es
un comentario
multilinea
 */

//Imprimir en pantalla
echo "Hola Mundo";
echo "<br />Hi world<br />I'm <h1>learning PHP</h1>";

//variables
$nombre = "Juan";
$Nombre = "Carlos";

//concatenación de cadenas y variables
echo $nombre."&nbsp;".$Nombre;
echo "<br />";

$num1 = 5;
$num2 = 77;

$suma = $num1 +$num2;

echo "$suma";

echo "<br />La variable \$suma tiene el valor de $suma<br />";


$modulo = $num2 % 2;
if ($modulo == 0) {
  echo "El número es par";
}else {
  echo "El número es impar";
}
echo "<br />";

for ($i=0; $i <=10 ; $i++) { 
  echo $i."<br />";
}
?>