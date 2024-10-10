<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - Listya Omi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Courgette', cursive;
            padding: 0px;
            scroll-behavior: smooth;
        }

        .nav-link {
            position: relative; /* Untuk positioning garis */
        }

        .nav-link.active {
            padding-bottom: 5px; 
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            left: 50%; /* Posisikan ke tengah */
            transform: translateX(-50%); /* Pindahkan ke kiri setengah dari lebar garis */
            bottom: 0; /* Posisi garis di bawah link */
            height: 3px; /* Tinggi garis */
            width: 100%; /* Lebar garis sesuai dengan lebar link */
            background-color: #000; /* Warna garis */
        }

        .card {
            width: 30rem; 
            margin: auto; 
        }

        .card-img-top {
            border-radius: 50%; 
            width: 200px; 
            height: 200px; 
            object-fit: cover; 
            margin: auto; 
            border: 1px solid #FF0000; 
        }

        .card-body {
            display: flex; 
            flex-direction: column; 
            align-items: flex-end;
        }

        /* Navbar menu agar selalu di tengah */
        .navbar-nav {
            width: 100%;
            justify-content: center; /* Untuk menyelaraskan menu ke tengah */
        }

        .navbar {
            justify-content: center; /* Untuk menyelaraskan navbar ke tengah */
        }

        /* Untuk menyesuaikan tampilan ketika layar kecil */
        @media (max-width: 992px) {
            .navbar-expand-lg .navbar-nav {
                text-align: center; /* Agar menu di tengah ketika layar kecil */
            }

            .nav-link.active::after {
                width: 10%; /* Ubah lebar garis di bawah Profile untuk layar kecil */
            }
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AtmaTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sun-fill text-dark"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h1 class="text-center">My Profile</h1>
    <!-- card -->
    <div class="d-flex justify-content-center mt-5">
        <div class="card" style="width: 20rem;">
            <h5 class="card-title text-center mt-3 mb-3"><?php echo $nama; ?></h5>
            <img src=<?php echo $foto; ?> class="card-img-top" alt="harusnya sih gambar">
            <div class="card-body">
                <p class="card-text text-center"><?php echo $quotes; ?></p>
                <a href="{{ url('/') }}" class="btn btn-danger">Back to home</a>
            </div>
        </div>
    </div>
    <!-- end card -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
