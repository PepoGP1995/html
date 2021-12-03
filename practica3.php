<?php

    $variable1=1;
    $variable2=2;
    if ($variable1>$variable2){
        echo "Variable 1 es Mayor que la Variable 2";
    }else{
        echo "Variable 2 es Mayor que la Variable 1";
    }
    $variableOpcion=1;
    switch($variableOpcion){
        case 0:
            echo "Se a pulsado el 0";
            break;
        case 1:  
            echo "Se a pulsado el 1";
            break;
        default:  
            echo "Se a pulsado otra tecla";
            break;
    }

    $i=0;

    while($i<10){
        echo "El valor de i ". $i . "<br>";
        $i++; 
    }
?>                           