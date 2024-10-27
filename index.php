<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL - HOME</title>
    <!-- bootstrap 5 -->
    <?php require('template/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form {
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <!-- navbar start -->
    <?php require('template/header.php'); ?>

    <!-- start main content -->

    <!-- Swiper -->
    <!-- carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container ">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="assets/images/carousel/6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- check availability form -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white p-4 shadow rounded">
                <h5 class="mb-4">Check Ketersediaan pesanan</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500;">Check-In</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label p-0" style="font-weight: 500;">Dewasa</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label p-0" style="font-weight: 500;">Anak-anak</label>
                            <select class="form-select shadow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- our rooms -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Kamar Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="assets/images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Nama Room</h5>
                        <h6 class="mb-4">Rp. 100.000 per malam</h6>
                        <div class="fitur mb-4">
                            <h6 class="mb-1">Fitur</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcon</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="fasilitas mb-4">
                            <h6 class="mb-1">Fasilitas</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ac</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dewasa</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Anak-anak</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="assets/images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Nama Room</h5>
                        <h6 class="mb-4">Rp. 100.000 per malam</h6>
                        <div class="fitur mb-4">
                            <h6 class="mb-1">Fitur</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcon</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="fasilitas mb-4">
                            <h6 class="mb-1">Fasilitas</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ac</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dewasa</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Anak-anak</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="assets/images/rooms/1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Nama Room</h5>
                        <h6 class="mb-4">Rp. 100.000 per malam</h6>
                        <div class="fitur mb-4">
                            <h6 class="mb-1">Fitur</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Kamar</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Kamar Mandi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcon</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">3 Sofa</span>
                        </div>
                        <div class="fasilitas mb-4">
                            <h6 class="mb-1">Fasilitas</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">Ac</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">TV</span>
                        </div>
                        <div class="guest mb-4">
                            <h6 class="mb-1">Guest</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dewasa</span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">2 Anak-anak</span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Booking Sekarang</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none fw-bold">Lihat lebih banyak >>></a>
            </div>
        </div>
    </div>

    <!-- our fasilitas -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Fasilitas Kami</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="assets/images/facilities/IMG_43553.svg" alt="" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="assets/images/facilities/IMG_49949.svg" alt="" width="80px">
                <h5 class="mt-3">AC</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="assets/images/facilities/IMG_96423.svg" alt="" width="80px">
                <h5 class="mt-3">Oven</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="assets/images/facilities/IMG_27079.svg" alt="" width="80px">
                <h5 class="mt-3">Pemadam</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 shadow-none fw-bold">Lihat lebih banyak >>></a>
            </div>
        </div>
    </div>

    <!-- testimoni -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Testimoni</h2>
    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimoni">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi incidunt nam magni, expedita molestias, magnam aliquam cumque recusandae nihil delectus aperiam amet voluptatum. Quia, soluta alias. Reiciendis, possimus? Asperiores, ea.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi incidunt nam magni, expedita molestias, magnam
                        aliquam cumque recusandae nihil delectus aperiam amet voluptatum. Quia, soluta alias. Reiciendis, possimus?
                        Asperiores, ea.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" width="30px" />
                        <h6 class="m-0 ms-2">Random User</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi incidunt nam magni, expedita molestias, magnam
                        aliquam cumque recusandae nihil delectus aperiam amet voluptatum. Quia, soluta alias. Reiciendis, possimus?
                        Asperiores, ea.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- hubungi kami -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Hubungi Kami</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3952.5970068290762!2d110.37193883732603!3d-7.832404839414509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a573faed5cf79%3A0xf65a0ed1021fb705!2skontrakan%20cah%20tegal!5e0!3m2!1sid!2sid!4v1729787976333!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Hubungi Kami</h5>
                    <a href="tel: +6281282544112" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +6281282544112</a>
                    <h5>Email</h5>
                    <a href="mailto: admin@admin.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> admin@admin.com</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Kami</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram"></i> Instagram
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- end maint content -->

    <?php require('template/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            }

        });
        var swiper = new Swiper(".swiper-testimoni", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>