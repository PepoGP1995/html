<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/stylesphp.css">
    <title>Document</title>
</head>
<body>
<?php
    $variable1=2;    
    $variable2=3; 
    $variable3='hola'; 

?>
<table style="border: 1px solid black;" class="EstiloTabla">
<tr>
    <th>variable1</th>
    <th>variable2</th>
    <th>variable3</th>
</tr>
<tr>
    <td>
        <?php
            echo $variable1;
        ?>
    </td>
    <td>
        <?php
            echo $variable2;
        ?>
    </td>
    <td>

        <?php
         echo $variable3;
        ?>
    
    </td>
</tr>
</table>

</body>
</html>