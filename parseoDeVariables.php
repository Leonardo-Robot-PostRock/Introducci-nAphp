<?php
echo "<p>En esta sección convertiremos un texto a número entero y un número decimal a un entero</p>";
echo "<p>Tenga en cuenta que se coloca $ en cada variable</p>";

$n = "123213";
echo "<br>Para convertir el siguiente número debemos usar la sintaxis: numero=(int)numero<br> Por ejemplo: '$n' <br>";

//Conversión de texto a número entero o int: -----------------------------------------

echo "Conversión realizada: ";
$n = (int)$n;
echo "<br>$n<br>";
echo "Luego corroboramos que sea de tipo int con var_dump(). Por ejemplo: var_dump(is_int($n))<br>";
echo var_dump(is_int($n));
echo "<br>";
echo "----------------------------<br>";

//Conversión de número decimal a entero o int --------------------------------------------

$n2 = 123213.123;
echo "En caso de que el valor sea decimal, por ejemplo otra variable llamada n2 = $n2 será: <br>";
echo var_dump(is_int($n2));
echo "<br> Se debe realizar el mismo procedimiento para parsear un decimal<br>";
echo "Por ejemplo: n2= (int)n2<br>";
echo "var_dump(is_int($n2))<br>";

$n2 = (int)$n2;
echo var_dump(is_int($n2));

// Conversión con (integer) -----------------------------------------

echo "<p>Otras maneras de convertirlo es con (integer) y intval(). <br>Ambos pueden convertir string y decimales a numeros enteros o de tipo int</p>";
$n3 = "123213";
$n4 = 21234.123;
echo "<p>Conversón con (integer)</p>";

echo "La siguiente variable es de tipo string: n3= '$n3'";

$n3 = (integer)$n3;

echo "<br>Conversión:  $n3";


echo "<br>La siguiente variable es un número decimal (float o double): n3= $n4"; 
$n4 = (integer)$n4;
echo "<br>Conversión:  $n4";

// Conversión con intval() -----------------------------------------

echo "<p>conversión con la función intval()</p>";
$n4 = intval($n4);

$n5 = "323213";
$n6 = 323234.123;

echo "La siguiente variable es de tipo string: n3= '$n5'";
$n5 = intval($n5);
echo "<br>Conversión:  $n5";

echo "<br>La siguiente variable es un número decimal (float o double): n3= $n6"; 

$n6 = intval($n6);
echo "<br>Conversión:  $n6";