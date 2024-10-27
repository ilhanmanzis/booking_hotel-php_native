<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL - KAMAR</title>
    <!-- bootstrap 5 -->
    <?php require('template/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transform: all 0.3s;
        }
    </style>
</head>

<body class="bg-light">

    <!-- navbar start -->
    <?php require('template/header.php'); ?>

    <!-- start main content -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">KAMAR KAMI</h2>
        <div class="h-line bg-dark"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filter</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Cek Ketersediaan</h5>
                                <label class="form-label p-0" style="font-weight: 500;">Check-In</label>
                                <input type="date" class="form-control shadow-none">
                                <label class="form-label p-0" style="font-weight: 500;">Check-Out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Fasilitas</h5>
                                <div class="mb2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Fasilitas 1</label>
                                </div>
                                <div class="mb2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Fasilitas 2</label>
                                </div>
                                <div class="mb2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Fasilitas 3</label>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Guest</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Dewasa</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Anak</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12">
                <!-- start room -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="assets/images/rooms/1.jpg" class="img-fluid rounded" alt="...">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Nama Kamar</h5>
                            <div class="fitur mb-2">
                                <h6 class="mb-1">Fitur</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar</span>

                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcon</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                            </div>
                            <div class="fasilitas mb-2">
                                <h6 class="mb-1">Fasilitas</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Ac</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                            </div>
                            <div class="guest">
                                <h6 class="mb-1">Guest</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dewasa</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Anak-anak</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-4">Rp. 100.000 per malam</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Booking Sekarang</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- end room -->
            </div>
        </div>
    </div>
    <!-- end maint content -->

    <?php require('template/footer.php'); ?>

</body>

</html>