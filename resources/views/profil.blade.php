<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <style>
        body {
            background-color: rgba(227, 222, 222);
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

        .data-container {
            display: flex;
            justify-content: center;
            align-items: center;
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

    <title>Profil</title>
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
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
            </div>
        </nav>
    </header>

    <div class="data-container" style="padding-top: 4rem;">
        <div class="card mb-3" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-4" style="display: flex; justify-content: center; align-items: center;">
                    <img src="https://avatars.githubusercontent.com/u/128687596?v=4" alt="profile_picture" width="200px" style="border: 4px solid black; border-radius: 50%; box-shadow: 4px 4px 15px -3px rgba(0,0,0,0.4);">
                </div>
                
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $nama; ?></h2>
                        <p class="card-text"><?php echo $deskripsi; ?></p>
                        <p class="card-text">
                            <strong>Alamat: </strong><?php echo $alamat; ?><br>
                            <strong>Email: </strong><?php echo $email; ?><br>
                            <strong>Telepon: </strong><?php echo $telepon; ?><br>
                            <strong>Hobi: </strong><?php echo $hobi; ?><br>
                        </p>

                        <button class="btn btn-primary">
                            <a href="{{ url('form') }}" style="text-decoration: none; color: white;">Form Data Mahasiswa</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>