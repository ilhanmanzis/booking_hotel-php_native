<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TENTANG KAMI</title>
    <!-- bootstrap 5 -->
    <?php require('template/links.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .pop:hover {
            border-top-color: var(--teal) !important;
            transform: scale(1.03);
            transform: all 0.3s;
        }

        .box {
            border-top-color: var(--teal) !important;
        }
    </style>
</head>

<body class="bg-light">

    <!-- navbar start -->
    <?php require('template/header.php'); ?>

    <!-- start main content -->

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">TENTANG KAMI</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Possimus deserunt aspernatur mollitia tempore itaque vitae sequi voluptates eveniet perspiciatis nemo!</p>
    </div>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1 order-md-1">
                <h3 class="mb-3">Lorem, ipsum dolor.</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda ea at nulla nesciunt consequuntur sit laboriosam voluptas a quis, vitae saepe eveniet iusto eligendi. Repudiandae sequi doloribus atque quisquam amet.</p>
            </div>
            <div class="col-lg-6 col-md-5 mb-4 order-1 order-lg-2 order-md-2">
                <img src="assets/images/about/about.jpg" alt="" class="w-100">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 px-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="assets/images/about/hotel.svg" alt="" width="70px">
                    <h4 class="mt-3">100+ Rooms</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="assets/images/about/customers.svg" alt="" width="70px">
                    <h4 class="mt-3">600+ customers</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="assets/images/about/rating.svg" alt="" width="70px">
                    <h4 class="mt-3">140+ Rating</h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 px-3">
                <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
                    <img src="assets/images/about/staff.svg" alt="" width="70px">
                    <h4 class="mt-3">20 Staff</h4>
                </div>
            </div>
        </div>
    </div>

    <h3 class="my-5 h-font fw-bold text-center">MANAGEMENT TEAM</h3>
    <div class="container px-4">
        <!-- Swiper -->
        <div class="swiper paginationSwiper">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white text-center oferflow-hidden rounded">
                    <img src="assets/images/about/IMG_17352.jpg" alt="" class="w-100">
                    <h5 class="mt-2">RANDOM NAME</h5>
                </div>
                <div class="swiper-slide bg-white text-center oferflow-hidden rounded">
                    <img src="assets/images/about/IMG_17352.jpg" alt="" class="w-100">
                    <h5 class="mt-2">RANDOM NAME</h5>
                </div>
                <div class="swiper-slide bg-white text-center oferflow-hidden rounded">
                    <img src="assets/images/about/IMG_17352.jpg" alt="" class="w-100">
                    <h5 class="mt-2">RANDOM NAME</h5>
                </div>
                <div class="swiper-slide bg-white text-center oferflow-hidden rounded">
                    <img src="assets/images/about/IMG_17352.jpg" alt="" class="w-100">
                    <h5 class="mt-2">RANDOM NAME</h5>
                </div>
                <div class="swiper-slide bg-white text-center oferflow-hidden rounded">
                    <img src="assets/images/about/IMG_17352.jpg" alt="" class="w-100">
                    <h5 class="mt-2">RANDOM NAME</h5>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- end maint content -->

    <?php require('template/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".paginationSwiper", {
            spaceBetween: 40,
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
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>