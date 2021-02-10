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
        <sl-drawer label="Settings" class="menu-overview" placement="left">
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

        <ul class="nav py-3">
            <li class="nav-item">
                <a class="navbar-brand" href="./">
                    WQMS
                </a>
                <p class="small-muted">Water Quality Monitoring System</p>
                <sl-menu-divider></sl-menu-divider>
            </li>
            <li class="nav-item ml-auto icon-button-color">
                <sl-tooltip content="Settings">
                    <sl-icon-button name="gear-fill" label="Settings" class="h3 menu-btn"></sl-icon-button>
                </sl-tooltip>
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
        <div class="jumbotron custom-jumbotron bg-gray py-4">
            <h4><strong>Hello Kay,</strong></h4>
            <p class="small mb-0">Welcome home.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-6 card-water-level">
                <sl-drawer placement="bottom" class="water-level-drawer-placement-bottom text-center">
                    <sl-icon name="bar-chart-fill" class="h1"></sl-icon>
                    <p class="card-title">Water level</p>
                    <h3><strong>6250 cm</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="bar-chart-fill" class="h1"></sl-icon>
                        <p class="card-title">Water level</p>
                        <h3><strong>6250 cm</strong></h3>
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
                    <h3><strong>33.89&deg;C</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="thermometer-half" class="h1"></sl-icon>
                        <p class="card-title">Temperature</p>
                        <h3><strong>33.89&deg;C</strong></h3>
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
                    <h3><strong>75.02%</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="droplet-fill" class="h1"></sl-icon>
                        <p class="card-title">Humidity</p>
                        <h3><strong>75.02%</strong></h3>
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
                    <h3><strong>6.75</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="clipboard-data" class="h1"></sl-icon>
                        <p class="card-title">pH level</p>
                        <h3><strong>6.75</strong></h3>
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
                    <h3><strong>4 ppm</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="droplet-half" class="h1"></sl-icon>
                        <p class="card-title">Salinity</p>
                        <h3><strong>4 ppm</strong></h3>
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
                    <h3><strong>5 NTU</strong></h3>
                    <div class="mx-auto pt-3">
                        <sl-button slot="footer" type="default" class="mx-auto">Close</sl-button>
                    </div>
                </sl-drawer>
                <div class="card border-0 text-center mb-2">
                    <div class="card-body">
                        <sl-icon name="cloud-fill" class="h1"></sl-icon>
                        <p class="card-title">Turbidity</p>
                        <h3><strong>5 NTU</strong></h3>
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
