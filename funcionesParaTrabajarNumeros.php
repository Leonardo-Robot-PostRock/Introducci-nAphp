<?php
$numero = 12;
$numero2 = 43.211;


// FUNCION is_int() ---------------------------------------------

echo "<p>Función is_int()</p>";

echo "Imprime un 1 en caso de que la variable sea de tipo int. <br> Por ejemplo: " . $numero . "<br>";
print "Salida: " . is_int($numero) . "<br>";
echo "---------------------------- <br>";
echo "En caso de que la variable NO SEA de tipo int. <br> Por ejemplo: " . $numero2 . " no imprime nada <br> ";
print "Salida: " . is_int($numero2) . "<br>";
echo  "<br>";

echo "Y si lo provamos con var_dump(). En caso de no ser un valor int imprime false, sino true. <br>";
echo  "<br>";
echo $numero . " " . var_dump(is_int($numero)) . "<br>";
echo $numero2 . " " . var_dump(is_int($numero2));

// FUNCION is_float() ---------------------------------------------

echo "<hr>";

$numero3 = 19.21;

echo "<p>Función is_float()</p>";

echo "Lo mismo sucede con esta función <br>";
echo "Por ejemplo: $numero3 <br>";
print "Salida: " . is_float($numero3) . "<br>";

echo "---------------------------- <br>";
echo "Y si lo provamos con var_dump(). En caso de no ser un valor float imprime false, sino true. <br>";
echo  "<br>";
echo $numero3 . " " . var_dump(is_float($numero3)) . "<br>";

// FUNCION is_double() ---------------------------------------------

echo "<hr>";

$numero4 = 1943221.123234231;

echo "<p>Función is_double()</p>";

echo "Lo mismo sucede con esta función <br>";
echo "Por ejemplo: $numero4 <br>";
print "Salida: " . is_double($numero3) . "<br>";

echo "---------------------------- <br>";
echo "Y si lo provamos con var_dump(). En caso de no ser un valor double imprime false, sino true. <br>";
echo  "<br>";
echo $numero4 . " " . var_dump(is_double($numero4)) . "<br>";

//Función is_infinite() Y is_finite() ---------------------------------------------------

echo "<hr>";
echo "<p>Acontinuación se muesta el uso de is_finite() y is_infinite()</p>";
echo "<p><small>Tanto como is_finite como is_infinite regresan 1 en caso de serlo (finito o infinito) sino un campo vacío.</small></p>";

$numero5 = 32;
$numero6 = 32e985;
echo "<p>Veamos con un valor entero: <br></p>";
echo "<br>Ejemplo con is_finite(): $numero5 <br>";
echo "valor: " . is_finite($numero5);
echo "<br>Ejemplo con is_infinite(): $numero5 <br>";
echo "valor: " . is_infinite($numero5);

echo "<p>Ahora veamos con un valor exponencial: <br></p>";

echo "<br>Ejemplo con is_finite(): 32e985 <br>";
echo "valor: " . is_finite($numero6);
echo "<br>Ejemplo con is_infinite(): 32e985 <br>";
echo "valor: " . is_infinite($numero6);

echo "<br><article><p>También se puede corroborar con la función var_dump(). Es decir var_dump(is_infinite()) or var_dump(is_finite())</p></article>";

echo "<p>Veamos con un valor entero: <br></p>";
echo "<br>Ejemplo con is_finite(): $numero5 <br>";
echo var_dump(is_finite($numero5));
echo "<br>Ejemplo con is_infinite(): $numero5 <br>";
echo var_dump(is_infinite($numero5));

echo "<p>Ahora veamos con un valor exponencial: <br></p>";

echo "<br>Ejemplo con is_finite(): 32e985 <br>";
echo var_dump(is_finite($numero6));
echo "<br>Ejemplo con is_infinite(): 32e985 <br>";
echo var_dump(is_infinite($numero6));


//Función is_numeric() -----------------------------------------------------------
echo "<hr>";
echo "<p>Función is_numeric() con var_dump()</p>";


echo "<br>";
$numero7 = 25;
echo "Número: " . $numero7 . "<br>";
echo var_dump(is_numeric($numero7));
echo "<br>";
$numero8 = "25";
echo "Número string: " . $numero8 . "<br>";
echo var_dump(is_numeric($numero8));
echo "<br>";
$numero9 = $numero7 + $numero8;
echo "Suma de números, un número: $numero7 con un texto: '$numero8' <br> Resultado:  $numero9 ". "<br>";
echo var_dump(is_numeric($numero9));
echo "<br>";
$numero10 = "Hola";
echo "Texto: " . $numero10 . "<br>";
echo var_dump(is_numeric($numero10));
echo "<p>PD: No se recomienda usar is_numeric()</p>";