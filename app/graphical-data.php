<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WQMS</title>
    <link rel="manifest" href="manifest.webmanifest">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="WQMS">
    <meta name="apple-mobile-web-app-title" content="WQMS">
    <meta name="theme-color" content="#38bdf8">
    <meta name="msapplication-navbutton-color" content="#38bdf8">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <link rel="icon" type="image/png" sizes="512x512" href="wqms.png">
    <link rel="apple-touch-icon" type="image/png" sizes="512x512" href="wqms.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.26/dist/shoelace/shoelace.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.26/dist/shoelace/shoelace.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="app.js"></script>
    <script src="custom.js"></script>
</head>


<body>
    <div class="container-fluid graph-body">
        <sl-drawer label="More" class="menu-overview" placement="left">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="graphical-data.php">
                        <sl-icon name="arrow-clockwise" class=""></sl-icon> Refresh
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="graphical-data.php">
                        <sl-icon name="graph-up" class=""></sl-icon> Graphical data
                    </a>
                </li>
                <li class="nav-item">
                    <sl-dialog label="Team" class="team-dialog-overview">
                        <p class="small"><abbr title="Bachelor of Computer Engineering 2018">BENG 18 COE</abbr></p>
                        <sl-menu>
                            <ol>
                                <li class="py-1">
                                    Evodi Kimario
                                </li>
                                <li class="py-1">
                                    Shabani Saidi
                                </li>
                                <li class="py-1">
                                    George J. Mtundi
                                </li>
                                <li class="py-1">
                                    Khabegha E. Khahima
                                </li>
                                <li class="py-1">
                                    Innocent I. Mwakatungila
                                </li>
                            </ol>
                        </sl-menu>

                        <sl-button slot="footer" type="primary">Close</sl-button>
                    </sl-dialog>
                    <a class="nav-link" href="#">
                        <sl-icon name="heart" class=""></sl-icon> Team
                    </a>
                </li>
                <li class="nav-item">
                    <sl-dialog label="Libraries" class="credits-dialog-overview">
                        <sl-menu>
                            <ul>
                                <li class="py-1">
                                    <a href="https://shoelace.style/"> Shoelace style library</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://getbootstrap.com/"> Bootstrap framework</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://fonts.google.com/"> Google fonts</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://app-manifest.firebaseapp.com/"> Web app manifest generator</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://developers.google.com/web/tools/workbox/modules/workbox-cli"> Workbox module</a>
                                </li>
                                <li class="py-1">
                                    <a href="https://firebase-php.readthedocs.io/en/5.14.1/index.html"> Firebase Admin SDK for PHP</a>
                                </li>
                            </ul>
                        </sl-menu>

                        <sl-button slot="footer" type="primary">Close</sl-button>
                    </sl-dialog>
                    <a class="nav-link" href="#">
                        <sl-icon name="collection" class=""></sl-icon> Libraries
                    </a>
                </li>
            </ul>
            <p class="float-left small" slot="footer">&copy; <?php echo date('Y');?>
                <abbr title="Dar Es Salaam Institute of Technology">DIT</abbr>

            </p>
            <sl-button slot="footer" type="default">Close</sl-button>
        </sl-drawer>

        <ul class="nav py-3">
            <li class="nav-item">
                <a class="navbar-brand" href="index.php">
                    WQMS
                </a>
                <p class="small-muted">Water Quality Monitoring System</p>
                <sl-menu-divider></sl-menu-divider>
            </li>

            <li class="nav-item ml-auto icon-button-color">
                <sl-tooltip content="More">
                    <sl-icon-button name="three-dots" label="Settings" class="h3 menu-btn"></sl-icon-button>
                </sl-tooltip>
                <script>
                    (() => {
                        const drawer = document.querySelector('.menu-overview');
                        const openButton = document.querySelector('.menu-btn');
                        const closeButton = drawer.querySelector('sl-button[type="default"]');

                        openButton.addEventListener('click', () => drawer.show());
                        closeButton.addEventListener('click', () => drawer.hide());
                    })();

                    (() => {
                        const dialog = document.querySelector('.team-dialog-overview');
                        const openButton = dialog.nextElementSibling;
                        const closeButton = dialog.querySelector('sl-button[slot="footer"]');

                        openButton.addEventListener('click', () => dialog.show());
                        closeButton.addEventListener('click', () => dialog.hide());
                    })();

                    (() => {
                        const dialog = document.querySelector('.credits-dialog-overview');
                        const openButton = dialog.nextElementSibling;
                        const closeButton = dialog.querySelector('sl-button[slot="footer"]');

                        openButton.addEventListener('click', () => dialog.show());
                        closeButton.addEventListener('click', () => dialog.hide());
                    })();

                </script>
            </li>
        </ul>
        <?php
    include ('includes/dbconfig.php');
    $reference = "";
    $fetchdata = $database->getReference($reference)->getValue();

    foreach($fetchdata as $key => $row) {

    $waterLevel = $row['level-populate'];
    $temperature = $row['temperature-populate'];
    $humidity = $row['humidity-populate'];
    $ph = $row['ph-populate'];
    $salinity = $row['salinity-populate'];
    $turbidity = $row['turbidity-populate'];

    ?>

        <canvas id="chartjs-0" width="100%" height="150%" class="graphical-data"></canvas>
        <script>
            new Chart(document.getElementById("chartjs-0"), {
                "type": "line",
                "data": {
                    "labels": [<?php
                                for ($x = 1; $x <= count($row); $x++) {
                                  echo "$x"."," ;
                                }
                            ?>],
                    "datasets": [{
                            "label": "Water level",
                            "data": [<?php foreach ($waterLevel as $levelValue) { echo $levelValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#22c55e",
                            "lineTension": 0.1
                        },
                        {
                            "label": "Temperature",
                            "data": [<?php foreach ($temperature as $temperatureValue) { echo $temperatureValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#ef4444",
                            "lineTension": 0.1
                        },
                        {
                            "label": "Humidity",
                            "data": [<?php foreach ($humidity as $humidityValue) { echo $humidityValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#0ea5e9 ",
                            "lineTension": 0.1
                        },
                        {
                            "label": "pH level",
                            "data": [<?php foreach ($ph as $phValue) { echo $phValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#fbbf24",
                            "lineTension": 0.1
                        },
                        {
                            "label": "Salinity",
                            "data": [<?php foreach ($salinity as $salinityValue) { echo $salinityValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#6b7280",
                            "lineTension": 0.1
                        },
                        {
                            "label": "Turbidity",
                            "data": [<?php foreach ($turbidity as $turbidityValue) { echo $turbidityValue, ","; }?>],
                            "fill": false,
                            "borderColor": "#78350f",
                            "lineTension": 0.1
                        }
                    ]
                },
                "options": {
                    scales: {
                        yAxes: [{
                            ticks: {
                                suggestedMin: 50,
                                suggestedMax: 100
                            }
                        }]
                    }
                }
            });

        </script>

    </div>

    <?php

    }
    ?>

</body>

</html>
