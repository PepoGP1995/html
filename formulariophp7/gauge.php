<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="5">
		<title>Gauge Temperatura / Humedad</title>

		<style type="text/css">
.highcharts-figure .chart-container {
    width: 300px;
    height: 200px;
    float: left;
}

.highcharts-figure,
.highcharts-data-table table {
    width: 600px;
    margin: 0 auto;
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

@media (max-width: 600px) {
    .highcharts-figure,
    .highcharts-data-table table {
        width: 100%;
    }

    .highcharts-figure .chart-container {
        width: 300px;
        float: none;
        margin: 0 auto;
    }
}

		</style>
	</head>
	<body>
<h1>Comunicaciones Avanzadas </h1>
<h2>Base de datos Sensores En Gauge</h2>
<br>
<script src="code/highcharts.js"></script>
<script src="code/highcharts-more.js"></script>
<script src="code/modules/solid-gauge.js"></script>
<script src="code/modules/exporting.js"></script>
<script src="code/modules/export-data.js"></script>
<script src="code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container-speed" class="chart-container"></div>
    <div id="container-rpm" class="chart-container"></div>
    <p class="highcharts-description">

    </p>
</figure>

<?php

include_once( $_SERVER['DOCUMENT_ROOT'] . "/formulariophp7/config.inc.php" );
include_once(DIR_INC . "class.mysql.inc.php");
$bd = new class_mysql();

$result=$bd->listar3();
$result1=$bd->listar4();
?>
		<script type="text/javascript">
            
var gaugeOptions = {
    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    exporting: {
        enabled: false
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#55BF3B'], // green
            [0.5, '#DDDF0D'], // yellow
            [0.9, '#DF5353'] // red
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 200,
        title: {
            text: 'Temperatura'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Temperatura',
        data: [
            <?php
                while($fila= mysqli_fetch_array($result)){
                    echo "[".$fila["temperatura"]."]";
                }
            ?>

        ],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">ºC</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: ' ºC'
        }
    }]

}));

// The RPM gauge
var chartRpm = Highcharts.chart('container-rpm', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Humedad'
        }
    },

    series: [{
        name: 'Humedad',
        data: [


            <?php
                while($fila= mysqli_fetch_array($result1)){
                    echo "[".$fila["humedad"]."]";
                }
            ?>

        
        ],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y:.1f}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">' +
                '* % ' +
                '</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: ' % '
        }
    }]

}));

// Bring life to the dials


		</script>
	</body>
</html>