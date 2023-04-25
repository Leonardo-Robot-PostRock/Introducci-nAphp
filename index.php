<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./style.css" />
</head>

<body>

    <!-- Mensajes en PHP -->

    <h1>Mensaje desde php</h1>
    <?php
    include('./mensajes.php');
    ?>
    <hr>

    <!-- Variables en PHP -->

    <h1>
        <strong>
            Variables en php
        </strong>
    </h1>
    <?php
    include('./variables.php');
    ?>
    <hr>

    <!-- VARIABLE GLOBAL Y LOCAL -->

    <h1>
        <strong>
            Variable local y variable global
        </strong>
    </h1>
    <?php
    include('./variableGlobalLocal.php');
    ?>
    <hr>

    <!-- VARIABLE ESTATICA -->

    <h1>
        <strong>
            Static variable
        </strong>
    </h1>
    <?php
    include('./staticVariable.php');
    ?>
    <hr>

    <!-- Maneras de imprimir un mensaje en PHP -->

    <h1>
        <strong>Maneras de mostrar mensajes en php</strong>
    </h1>
    <?php
    include('./formasMostrarMensaje.php');
    ?>

    <hr>

    <h1><strong>Tipos de variables</strong></h1>

    <?php

    include('./tiposVariable.php');
    ?>
    <hr>

    <!-- Funciones para trabajar con cadenas  -->

    <h1>Funciones para trabajar con cadenas</h1>
    <?php
    include('./funcionesParaTrabajarCadenas.php');
    ?>

    <hr>

    <!-- Funciones para trabajar con números  -->

    <h1>Funciones para trabajar con números</h1>
    <?php
    include('./funcionesParaTrabajarNumeros.php');
    ?>

    <!-- Parseo de variables -->

    <hr>
    <h1>Parseo de variables</h1>
    <?php
    include('./parseoDeVariables.php');
    ?>

    <!-- NUMERO PI -->

    <hr>
    <h1>Número PI</h1>
    <?php
    include('./funcionPi.php');
    ?>

    <!-- FUNCION min() regresa el número menor -->

    <hr>
    <h1>Función min()</h1>
    <?php
    include('./funcionMin.php');
    ?>

    <!-- FUNCION max() regresa el número mayor -->

    <hr>
    <h1>Función max()</h1>
    <?php
    include('./funcionMax.php');
    ?>

    <!-- FUNCION abs() valor absoluto -->
    
    <h1>Función abs() Valor absoluto</h1>
    <?php
    include('./funcionAbs.php');
    ?>

    <!-- FUNCION sqrt() raíz cuadrada-->
    <h1>Función sqrt() Raíz cuadrada</h1>
    <?php
    include('./funcionRaizCuadrada.php');
    ?>

    <!-- FUNCION round() truncar numero-->
    <h1>Función round() Truncar n&uacute;mero</h1>
    <?php
    include('./funcionRound.php');
    ?>

    
    <!-- FUNCION rand() número aleatorio -->
    <h1>Función rand() Número aleatorio</h1>
    <?php
    include('./funcionRand.php');
    ?>
    
    <!-- TIPOS OPERADORES -->
    <h1>Tipos de operadores</h1>
    <?php
    include('./operadores.php');
    ?>


</body>

</html>