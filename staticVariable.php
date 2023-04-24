<?php
static $x = 1;
function valor()
{
    // una variable estática es una variable cuyo valor se 
    // mantiene entre llamadas consecutivas a la función donde 
    // está definida, es decir, su valor permanece en memoria 
    // durante toda la ejecución del script.
    static $x = 1;
    echo $x . "<br>";
    $x++;
}
valor();
valor();
valor();

// A diferencia de las variables locales regulares que se crean y 
// destruyen cada vez que se llama a una función, una variable 
// estática se crea solo la primera vez que se llama a la función 
// y su valor se mantiene en memoria incluso después de que la 
// función termine su ejecución.
?>