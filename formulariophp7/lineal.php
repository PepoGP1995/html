 
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lineal Temperatura / Humedad</title>

		<style type="text/css">
.highcharts-figure,
.highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

		</style>
	</head>
	<body>
<script src="code/highcharts.js"></script>
<script src="code/modules/series-label.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>
<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/formulariophp7/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();

$result=$bd->listar1();
$result1=$bd->listar2();
?>

		<script type="text/javascript">
Highcharts.chart('container', {

    title: {
        text: 'Comunicaciones Avanzadas'
    },

    subtitle: {
        text: 'Base de datos Sensores En Lineal'
    },

    yAxis: {
        title: {
            text: 'Rango Maximo'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2017'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
        }
    },
   series: [{
        name: 'Temperatura',

        data: [

            <?php
                while($fila= mysqli_fetch_array($result)){
                    echo "[".$fila["temperatura"]."],";
                }
            ?>
        ]

    }, {
        name: 'Humedad',
        data: [
            <?php
                while($fila= mysqli_fetch_array($result1)){
                    echo "[".$fila["humedad"]."],";
                }
            ?>
        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
		</script>
     
	</body>
</html>