<?php

    //Variable global
    // $valor = 34;
    // function mostrar(){
    //     echo "Valor de la variable".$valor;
    // }

    // mostrar();
    // echo 'Valor de la variable'. $valor;
  
    //Variable local
    function mostrar(){
        $valor = 34;
        echo "Valor de la variable local: ".$valor;
    }  
    mostrar();
    echo "<p><strong>Mostrará error en linea 19 porque la variable no esta declarada en el scope global:</strong></p>";
    echo 'Valor de la variable'. $valor;
?>