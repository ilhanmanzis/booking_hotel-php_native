<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL - KONTAK</title>
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
        <h2 class="fw-bold h-font text-center">KONTAK KAMI</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Possimus deserunt aspernatur mollitia tempore itaque vitae sequi voluptates eveniet perspiciatis nemo!</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe height="320px" class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3952.5970068290762!2d110.37193883732603!3d-7.832404839414509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a573faed5cf79%3A0xf65a0ed1021fb705!2skontrakan%20cah%20tegal!5e0!3m2!1sid!2sid!4v1729787976333!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Alamat</h5>
                    <a href="https://maps.app.goo.gl/GfARxYi794he8YAJ9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i>
                        Jl. Tegal Asri Jl. Imogiri Barat KM 4,5, Sokowaten, Tamanan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188
                    </a>
                    <h5 class="mt-4">Hubungi Kami</h5>
                    <a href="tel: +6281282544112" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +6281282544112</a>
                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: admin@admin.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> admin@admin.com</a>
                    <h5 class="mt-4">Follow Kami</h5>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="#" class="d-inline-block mb-3 text-dark fs-5 me-2">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Kirim Pesan</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Subject</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight: 500;">Pesan</label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <button class="btn text-white custom-bg mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end maint content -->

    <?php require('template/footer.php'); ?>

</body>

</html>