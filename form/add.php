<?php include('koneksi.php'); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Form Daftar</title>
    <link rel="icon" href="../assets/images/fav.png" sizes="32x32" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/splide.min.css">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- datatable -->
    <link rel="stylesheet" href="../assets/vendor/datatables/dataTables.bootstrap4.min.css">
</head>

<body>
    <!-- start Navbarr -->
    <nav id="primary-navbar" class="primary-nav navbar navbar-expand-lg navbar-light bg-warning fixed-top font-nunito">
        <div class="container px-4 px-sm-0">
            <a class="navbar-brand" href="#"><img src="../assets/images/logo-2.png"></a>
            <!-- Search Button -->
            <div class="box">
                <input type="text" class="input"><button class="src"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
            </div>
            <!-- Menu Nav -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Work</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Branding</a></li>
                            <li><a class="dropdown-item" href="#">UI/UX</a></li>
                            <li><a class="dropdown-item" href="#">Hybrid Apps</a></li>
                            <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                            <li><a class="dropdown-item" href="#">Growth Hacking</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <button id="open-sidenav" class="open-sidenav bg-transparent border-0 ms-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#2c333a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- start FORM/CRUD -->
    <section class="hero bg-white">
        <h1 class="text-center mt-3">Form Daftar</h1>
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <form action="save.php" method="POST" enctype="multipart/form-data">
                                    <!-- nama -->
                                    <div class="mb-3">
                                        <label for="">Nama</label>
                                        <input type="text" name="nama" class="form-control" autofocus="" required="" />
                                    </div>
                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <!-- No Hp -->
                                    <div class="mb-3">
                                        <label for="">No Hp</label>
                                        <input type="text" name="no_hp" class="form-control">
                                    </div>
                                    <!-- foto -->
                                    <div class="mb-3">
                                        <label for="">Foto</label><br>
                                        <input type="file" name="img">
                                    </div>

                                    <h1 align="right">
                                        <a href="index.php" class="btn btn-danger">Cancel</a>
                                        <button type="submit" class="btn btn-warning">Save</button>

                                    </h1>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FORM/CRUD -->








    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/splide.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <!-- datatable -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>
</body>

</html>