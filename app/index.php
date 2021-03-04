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
    <?php
    session_start();

    include ('includes/dbconfig.php');
    $reference = "";
    $fetchdata = $database->getReference($reference)->getValue();

    foreach($fetchdata as $key => $row) {

        $_SESSION['water-level'] = $row['level'];
        $_SESSION['temperature'] = $row['temperature'];
        $_SESSION['humidity'] = $row['humidity'];
        $_SESSION['ph'] = round($row['ph'], 2);
        $_SESSION['salinity'] = $row['salinity'];
        $_SESSION['turbidity'] = $row['turbidity'];

        if($_SESSION['ph'] < 7) {
            $_SESSION['ph-status'] = "(acidic)";
        }
        else if($_SESSION['ph'] > 7) {
            $_SESSION['ph-status'] = "(alkaline)";
        }
        else {
            $_SESSION['ph-status'] = "(neutral)";
        }

    }
    ?>

    <div class="container-fluid mb-5">
        <sl-drawer label="More" class="menu-overview" placement="left">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="./">
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
                <a class="navbar-brand" href="./">
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
        <div class="jumbotron custom-jumbotron bg-gray py-4">
            <h4><strong><?php date_default_timezone_set('Africa/Dar_es_Salaam'); echo date("H:i");?></strong><span class="small-muted text-white">Hrs</span></h4>
            <p class="small mb-0"><?php echo date("l, M j"); ?></p>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 card-water-level">
                <sl-drawer placement="bottom" class="water-level-drawer-placement-bottom text-center">
                    <sl-icon name="bar-chart-fill" class="h1"></sl-icon>
                    <p class="card-title">Water level</p>
                    <h3><strong><?php echo $_SESSION['water-level']; ?> cm</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="bar-chart-fill" class="h1"></sl-icon>
                        <p class="card-title">Water level</p>
                        <h3><strong><?php echo $_SESSION['water-level']; ?> cm</strong></h3>
                        <p class="card-title small-muted"><?php if($_SESSION['water-level'] < 10) {echo "(low)"; } else {echo "(high)";} ?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.water-level-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');

                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6  card-temperature">
                <sl-drawer placement="bottom" class=" card-temperature-drawer-placement-bottom text-center">
                    <sl-icon name="thermometer-half" class="h1"></sl-icon>
                    <p class="card-title">Temperature</p>
                    <h3><strong><?php echo $_SESSION['temperature']; ?>&deg;C</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="thermometer-half" class="h1"></sl-icon>
                        <p class="card-title">Temperature</p>
                        <h3><strong><?php echo $_SESSION['temperature']; ?>&deg;C</strong></h3>
                        <p class="card-title small-muted"><?php if($_SESSION['temperature'] < 20) {echo "(low)"; } else if($_SESSION['temperature'] >= 20 && $_SESSION['temperature'] <= 22)  {echo "(moderate)"; } else {echo "(high)";} ?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.card-temperature-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');

                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 card-humidity">
                <sl-drawer placement="bottom" class=" card-humidity-drawer-placement-bottom text-center">
                    <sl-icon name="droplet-fill" class="h1"></sl-icon>
                    <p class="card-title"> Humidity
                    <p>
                    <h3><strong><?php echo $_SESSION['humidity']; ?>%</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="droplet-fill" class="h1"></sl-icon>
                        <p class="card-title">Humidity</p>
                        <h3><strong><?php echo $_SESSION['humidity']; ?>%</strong></h3>
                        <p class="card-title small-muted"><?php if($_SESSION['humidity'] < 40) {echo "(low)"; } else if($_SESSION['humidity'] >= 60 && $_SESSION['humidity'] <= 60)  {echo "(moderate)"; } else {echo "(high)";} ?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.card-humidity-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');

                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 card-ph">
                <sl-drawer placement="bottom" class=" card-ph-drawer-placement-bottom text-center">
                    <sl-icon name="clipboard-data" class="h1"></sl-icon>
                    <p class="card-title">pH level</p>
                    <h3><strong><?php echo $_SESSION['ph']; ?></strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="clipboard-data" class="h1"></sl-icon>
                        <p class="card-title">pH level</p>
                        <h3><strong><?php echo $_SESSION['ph']; ?></strong></h3>
                        <p class="card-title small-muted"><?php echo $_SESSION['ph-status'];?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.card-ph-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');

                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 card-salinity">
                <sl-drawer placement="bottom" class=" card-salinity-drawer-placement-bottom text-center">
                    <sl-icon name="droplet-half" class="h1"></sl-icon>
                    <p class="card-title">Salinity</p>
                    <h3><strong><?php echo $_SESSION['salinity']; ?> ppm</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="droplet-half" class="h1"></sl-icon>
                        <p class="card-title">Salinity</p>
                        <h3><strong><?php echo $_SESSION['salinity']; ?> ppm</strong></h3>
                        <p class="card-title small-muted"><?php if($_SESSION['salinity'] <= 5) {echo "(fresh water)"; } else if($_SESSION['salinity'] > 5 && $_SESSION['salinity'] <= 30)  {echo "(average salty water)"; } else {echo "(very salty)";} ?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.card-salinity-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');

                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 card-turbidity">
                <sl-drawer placement="bottom" class=" card-turbidity-drawer-placement-bottom text-center">
                    <sl-icon name="cloud-fill" class="h1"></sl-icon>
                    <p class="card-title">Turbidity</p>
                    <h3><strong><?php echo $_SESSION['turbidity']; ?> NTU</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="cloud-fill" class="h1"></sl-icon>
                        <p class="card-title">Turbidity</p>
                        <h3><strong><?php echo $_SESSION['turbidity']; ?> NTU</strong></h3>
                        <p class="card-title small-muted"><?php if($_SESSION['turbidity'] <= 3) {echo "(low)"; } else if($_SESSION['turbidity'] > 3 && $_SESSION['turbidity'] <= 5)  {echo "(moderate)"; } else {echo "(high)";} ?></p>
                        <script>
                            (() => {
                                const drawer = document.querySelector('.card-turbidity-drawer-placement-bottom');
                                const openButton = drawer.nextElementSibling;
                                const closeButton = drawer.querySelector('sl-button[type="default"]');
                                openButton.addEventListener('click', () => drawer.show());
                                closeButton.addEventListener('click', () => drawer.hide());
                            })();

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
