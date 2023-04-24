<?php

// Cantidad de caracteres de una cadena -------------------------------------------

$candena = "mensaje";
echo "<br> <p><strong> La siguiente función muestra la longitud de una cadena:</p></strong>" . "strlen()" . "<br>";
echo "Numero de caracteres " . strlen($cadena);

// Mostrar cantidad de palabras --------------------------------------------------

$cadena2 = "mensaje de texto";
echo "<hr>";
echo "<br><p> La función <strong>str_word_count()</strong> cuenta la cantidad de palabras de una cadena </p><br>";

echo "Número de palabras " . str_word_count($cadena2);

// Mostrar el mensaje en reversa -----------------------------------------------------
echo "<br><p>Mensaje en reversa con la función <strong>sterev()</strong> </p>" . strrev($cadena);

// Función para buscar una frase dentro de una cadena
echo "<br><p> La función <strong>strpos()</strong> busca una frase o palabra y retorna la posición anterior en la que comienza la frase </p><br>";
echo "<br> Por ejemplo <br>";
$cadena3 = "Programar con PHP es divertido";
echo "<br> <p class='strpos'>$cadena3 </p> <br>";
echo "Ubicación del texto " . strpos($cadena3, "con");

// Función para reemplazar una parte de una cadena --------------------------------------------------
echo "<br><p> La función <strong>str_replace()</strong> rempleza una parte de una cadena por otra </p><br>";
$cadena4 = "mensaje de texto<strong>enviado</strong>";
/*Si no existe el valor que se quiere reemplazar regresa el valor original*/
echo "Por ejemplo: . $cadena4 <br>";
echo str_replace("enviado", "<strong>recibido</strong>", $cadena4);
