<?php
$numero = 12;
$numero2 = 43.211;

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
