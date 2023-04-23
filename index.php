<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <p>Mensaje desde php</p>
    <?php
    echo 'Mensaje de php utilizando echo';

    //comentario desde php
    #comentario desde php

    /* comentario desde php
     */
    ?>
    <hr>

    <p>
        <strong>
            Variables en php
        </strong>
    </p>
    <?php
    $texto = "Texto desde php";
    $numero = 12;
    $numero2 = 13;

    echo "Mensaje: $texto <br>";
    //Concatenación
    echo "Mensaje:" . $texto . " " . $numero . " " . $numero2;

    ?>
</body>

</html>