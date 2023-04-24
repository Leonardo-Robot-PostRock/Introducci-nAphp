<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="./style.css"/>
</head>

<body>
    <!-- Mensajes en PHP -->
    <p>Mensaje desde php</p>
    <?php
    include('./mensajes.php');
    ?>
    <hr>

    <!-- Variables en PHP -->

    <p>
        <strong>
            Variables en php
        </strong>
    </p>
    <?php
    include('./variables.php');
    ?>
    <hr>

    <!-- VARIABLE GLOBAL Y LOCAL -->

    <p>
        <strong>
            Variable local y variable global
        </strong>
    </p>
    <?php
    include('./variableGlobalLocal.php');
    ?>
    <hr>

    <!-- VARIABLE ESTATICA -->

    <p>
        <strong>
            Static variable
        </strong>
    </p>
    <?php
    include('./staticVariable.php');
    ?>
    <hr>

    <!-- Maneras de imprimir un mensaje en PHP -->

    <p>
        <strong>Maneras de mostrar mensajes en php</strong>
    </p>
    <?php
    include('./formasMostrarMensaje.php')
    ?>

    <hr>

    <p><strong>Tipos de variables</strong></p>
    <?php
    
        include('./tiposVariable.php');
    ?>
</body>

</html>