<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WQMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="custom.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.0.0-beta.26/dist/shoelace/shoelace.esm.js"></script>
    <script src="app.js"></script>
    <script src="custom.js"></script>
</head>


<body>
    <div class="container-fluid">
        <sl-drawer label="Menu" class="menu-overview">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>

            <sl-button slot="footer" type="primary">Close</sl-button>
        </sl-drawer>

        <ul class="nav py-2">
            <li class="nav-item">
                <a class="nav-link active" href="./">WQMS</a>
            </li>
            <li class="nav-item ml-auto">
                <sl-button type="primary" class="menu-btn">
                    <sl-icon name="three-dots-vertical"></sl-icon> MENU
                </sl-button>
                <script>
                    (() => {
                        const drawer = document.querySelector('.menu-overview');
                        const openButton = document.querySelector('.menu-btn');
                        const closeButton = drawer.querySelector('sl-button[type="primary"]');

                        openButton.addEventListener('click', () => drawer.show());
                        closeButton.addEventListener('click', () => drawer.hide());
                    })();

                </script>
            </li>
        </ul>
        <div class="jumbotron py-4">
            <h4><strong>Hey Kay Khahima,</strong></h4>
            <p class="small mb-0">Welcome home</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-water-level text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Water Level <sl-icon name="graph-up"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="75" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #16a34a;">6250 cm</sl-progress-ring>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-temperature text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Temperature <sl-icon name="thermometer-half"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="50" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #0284c7;">33.89&deg;C</sl-progress-ring>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-humidity text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Humidity <sl-icon name="droplet"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="75" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #ef4444;">75.02%</sl-progress-ring>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-ph text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">pH level <sl-icon name="clipboard-data"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="75" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #d97706;">6</sl-progress-ring>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-salinity text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Salinity <sl-icon name="droplet-half"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="75" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #4b5563;">4 ppm</sl-progress-ring>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                <div class="card border-0 p-4 card-turbidity text-white text-center mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Turbidity <sl-icon name="cloud"></sl-icon>
                        </h5>
                        <sl-progress-ring percentage="50" size="200" class="progress-ring-labels h4" stroke-width="15" style="--indicator-color: #4d2201;">5 NTU</sl-progress-ring>
                    </div>
                </div>
            </div>
        </div>




    </div>

</body>

</html>
