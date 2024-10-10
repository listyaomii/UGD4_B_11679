<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home-11679</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Courgette', cursive;
            padding: 0px;
            scroll-behavior: smooth;
        }

        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 600px; 
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 50px; 
            padding: 10px; 
            border: 2px solid grey; 
            border-radius: 10px; 
            background-color: #fff; 
        }

        .social-icons i {
            font-size: 24px; 
            padding: 10px; 
            border-radius: 5px; 
            transition: background-color 0.3s; 
        }

        .social-icons i:hover {
            background-color: #e9ecef; 
        }

        .navbar-nav {
            width: 100%;
            justify-content: center; /* Menyelaraskan menu ke tengah */
        }

        .nav-link {
          position: relative; 
          padding: 0.5rem 1rem; 
          display: inline-block; /* Agar garis di bawah mengikuti lebar teks */
        }

        .nav-link.active {
            border-bottom: 3px solid #000; 
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            left: 50%; /* Posisikan ke tengah */
            transform: translateX(-50%); /* Pindahkan ke kiri setengah dari lebar garis */
            bottom: -3px; /* Posisi garis di bawah link */
            height: 3px; /* Tinggi garis */
            width: 100%; /* Lebar garis sesuai dengan lebar link */
            background-color: #000; /* Warna garis */
        }

        @media (max-width: 2000px) {
            .carousel-item img {
                max-height: 2000px;
            }

            .social-icons {
                gap: 30px; 
            }
        }

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
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profile') }}">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-sun-fill text-dark"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Light Mode</a></li>
                            <li><a class="dropdown-item" href="#">Dark Mode</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar akhir -->

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/img1.jpg') }}" class="d-block w-100" alt="Gambar pertama">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img2.jpg') }}" class="d-block w-100" alt="Gambar kedua">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img3.jpg') }}" class="d-block w-100" alt="Gambar ketiga">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- carousel akhir -->

    <!-- container -->
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="social-icons d-flex justify-content-around">
                    <a href="https://www.instagram.com/listyaomi/">
                        <i class="bi bi-instagram text-dark"></i>
                    </a>
                    <a href="https://open.spotify.com/user/zevtt3az593irqturrwp5p4ec">
                        <i class="bi bi-linkedin text-dark"></i>
                    </a>
                    <a href="https://github.com/listyaomii">
                        <i class="bi bi-github text-dark"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- container akhir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
