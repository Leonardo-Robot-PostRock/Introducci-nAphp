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
    include('./formasMostrarMensaje.php')
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
    include('./funcionesParaTrabajarNumeros.php')
    ?>
</body>

</html>