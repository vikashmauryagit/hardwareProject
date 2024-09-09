<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="shortcut icon" href="./img/logo/sunny.jpg" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>
    <div class="d-none d-sm-flex justify-content-center bg-primary text-light gap-5 p-2">
        <div><i class="fa-solid fa-envelope text-light"></i> sunnyelastomers@gmail.com</div>
        <div><i class="fa-solid fa-phone text-light"></i> +91 9892168784 / 9920210247</div>
        <div><i class="fa-solid fa-star text-light"></i> ISO CERTIFIED 9001:2015</div>
    </div>

    <nav class="navbar navbar-expand-lg bg-color shadow-sm">
        <div class="container-fluid">
            <div class="navbar-brand">
                <img src="./img/logo/sunny.jpg" alt="img/error" class="img-fluid">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item fw-semibold">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                    </li>
                    
                    <div class="dropdown">
                        <button class="btn border-one dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </button>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="silicon_tube.php">SILICON SLEEVE-TUBE</a>
                                <!-- <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Nested Item 1</a></li>
                                    <li><a class="dropdown-item" href="#">Nested Item 2</a></li>
                                    <li><a class="dropdown-item" href="#">Nested Item 3</a></li>
                                </ul> -->
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Rubber Cord</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">VITON CORDS</a></li>
                                    <li><a class="dropdown-item" href="#">VITON GASKETS</a></li>
                                    <li><a class="dropdown-item" href="#">VITON O-RINGS</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#">Marine Rubber D-Fender</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">D-Type Long Rubber Fenders</a></li>
                                    <li><a class="dropdown-item" href="#">Hollow Cylindrical Rubber Fender</a></li>
                                    <li><a class="dropdown-item" href="#">Rubber Fender O Shape(Wing)</a></li>
                                    <li><a class="dropdown-item" href="#">Cylindrical Type Rubber Fender</a></li>
                                    <li><a class="dropdown-item" href="#">M Shape Rubber Fender</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <li class="nav-item fw-semibold">
                        <a class="nav-link " href="about.php">Abouts</a>
                    </li>
                    <li class="nav-item fw-semibold">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item fw-semibold">
                        <a class="nav-link" href="contactus.php">Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // Enable nested dropdowns functionality
        document.querySelectorAll('.dropdown-submenu').forEach(function(submenu) {
            submenu.addEventListener('click', function(e) {
                e.stopPropagation();
                this.classList.toggle('show');
                this.querySelector('.dropdown-menu').classList.toggle('show');
            });
        });
    </script>
</body>

</html>