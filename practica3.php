<?php

    $variable1=1;
    $variable2=2;
    if ($variable1>$variable2){
        echo "Variable 1 es Mayor que la Variable 2";
    }else{
        echo "Variable 2 es Mayor que la Variable 1";
    }
    echo "<br>";
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
    echo "<br>";
    $i=0;

    while($i<10){
        echo "El valor de i ". $i . "<br>";
        $i++; 
    }

    for($j=0;$j<5;$j++){
        echo "El valor de j ". $j . "<br>";
    }
    echo "<br>";
    $array = array(1, 2, 3, 4);
    foreach ($array as &$valor) {
        $valor = $valor * 2;
        echo $valor;
        echo "<br>";
    }
    echo "<br>";
    function media_aritmetica($a,$b){
        $media=($a+$b)/2;
        return $media; 
    }

    echo "La Media Aritmetica es " .media_aritmetica(10,8);
    echo "<br>";

    class Carro{
        public $color;
        public $año;
        public $marca; 
        
        function __BobElConstructor($color, $año, $marca){
            $this->color=$color;
            $this->año=$año;
            $this->marca=$marca;
        }
        function get_color(){
            echo $this->color;
        }

    }

$objeto= new Carro ("Verde", "2005"," VW POLO");
echo $objeto ->get_color();

?>                           