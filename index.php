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
    include('./variables.php')
    ?>
    <hr>
    <p>
        <strong>
            Variable local y variable global
        </strong>
    </p>
    <?php
    include('./variableGlobalLocal.php');
    ?>
</body>

</html>