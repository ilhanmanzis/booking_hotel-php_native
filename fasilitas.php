<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL - FASILITAS</title>
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
        <h2 class="fw-bold h-font text-center">FASILITAS KAMI</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Possimus deserunt aspernatur mollitia tempore itaque vitae sequi voluptates eveniet perspiciatis nemo!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="assets/images/facilities/IMG_27079.svg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Pemadam</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Expedita rerum possimus perspiciatis enim dolore reprehenderit beatae eos, perferendis praesentium ex.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="assets/images/facilities/IMG_43553.svg" alt="" width="40px">
                        <h5 class="m-0 ms-3">Wifi</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Expedita rerum possimus perspiciatis enim dolore reprehenderit beatae eos, perferendis praesentium ex.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <img src="assets/images/facilities/IMG_41622.svg" alt="" width="40px">
                        <h5 class="m-0 ms-3">TV</h5>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Expedita rerum possimus perspiciatis enim dolore reprehenderit beatae eos, perferendis praesentium ex.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end maint content -->

    <?php require('template/footer.php'); ?>

</body>

</html>