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
    $variable1 = 2;
    $variable2 = 3;
    $variable3 = 'hola';

    ?>
    <div class="Container">
        <h1>Laboratorio 1</h1>
        <div class="Datos">
            <input type="text" class="Numero1" value=<?php echo $variable1; ?>>
            <input type="text" class="Numero2" value=<?php echo $variable2; ?>>
            <button type="submit" class="boton">Enviar</button>
        </div>
        <div class="Resultado">
            <br>
            <h1>Resultado</h1>
            <p class="display">0.0</p>
        </div>
    </div>
    <script src="app2php.js"></script>

</body>

</html>