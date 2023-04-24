
<?php

echo "<p>Para declarar variables debe colocar el signo $ delante del nombre de la variable</p>";

$texto = "Texto desde php";
$numero = 12;
$numero2 = 13;

//Cómo concatenar en PHP? -------------------------------------------------
include('./concatenacion.php');

//Variables constantes ----------------------------------------------------------
echo "<h3>También se pueden definir variables de tipo constante</h3>";
define("x", 56);
echo "<br> La sintaxis es: define(nombreVariable, valor) <br> Ejemplo: define('x', 56) <br> Resultado: ";
echo x;

echo "<p><small>Debes tener en cuenta que si intentas cambiar el valor de la variable constante tendras un error</small></p>";
?>