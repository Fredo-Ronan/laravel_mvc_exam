<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: black;
        }

        .navbar {
            --bs-navbar-color: rgba(179, 177, 177);
            --bs-navbar-hover-color: rgba(128, 124, 124);
            --bs-navbar-disabled-color: aqua;
            --bs-navbar-brand-color: white;
            --bs-navbar-brand-hover-color: rgba(128, 124, 124);
            --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba%28117, 114, 114, 0.90%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
            --bs-navbar-toggler-border-color: rgba(117, 114, 114);
        }

        .navbar-nav {
            --bs-nav-link-color: var(--bs-navbar-color);
            --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
            --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
        }

        .bg-body-tertiary {
            background-color: #403e3e !important;
        }

        .navbar-toggler {
            color: rgba(133, 130, 130);
        }

        img {
            width: 100%;
            opacity: 0.7;
        }

        .box {
            background-color: rgba(48, 48, 48, 0.6);
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        @media (min-width: 992px) {
            .navbar-expand-lg {
                flex-wrap: wrap;
            }

            .navbar-expand-lg .navbar-toggler {
                display: block;
            }

            .navbar-expand-lg .navbar-collapse {
                display: block !important;
                flex-basis: 100%;
            }

            .collapse:not(.show) {
                display: none !important;
            }

            .navbar-collapse {
                flex-grow: 1;
            }

            .navbar-expand-lg .navbar-nav {
                flex-direction: column;
            }
        }
    </style>

    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary" style="z-index: 2;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('home') }}">UGD4_B_11446</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('profil') }}">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('form') }}">Form</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="carousel-container" style="position: fixed; top: 0; z-index: -1;">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="position: fixed;">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/picture1.jpg') }}" class="d-block" alt="picture1">
                    <div class="carousel-caption d-none d-md-block" style="position: fixed;">
                        <div class="box">
                            <h1>Mountain</h1>
                            <p>Modul 4 - Laravel MVC</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/picture2.jpg') }}" class="d-block" alt="picture2">
                    <div class="carousel-caption d-none d-md-block" style="position: fixed;">
                        <div class="box">
                            <h1>Awesome Bridge</h1>
                            <p>Modul 4 - Laravel MVC</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/picture3.jpg') }}" class="d-block" alt="picture3">
                    <div class="carousel-caption d-none d-md-block" style="position: fixed;">
                        <div class="box">
                            <h1>Highlands</h1>
                            <p>Modul 4 - Laravel MVC</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>