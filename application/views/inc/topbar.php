<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= business_info('buname') ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= asset_url('img/favicon.png') ?>" rel="icon">
    <link href="<?= asset_url('img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

    <!-- Vendor CSS Files -->
    <link href="<?= asset_url('vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
    <link href="<?= asset_url('vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= asset_url('css/style.css') ?>" rel="stylesheet">

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope"></i> <a href="mailto:contact@example.com"><?= business_info('email') ?></a>
                <i class="bi bi-phone"></i> <?= business_info('phone') ?>
            </div>
            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="<?= social_media_links('twitter') ?>" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="<?= social_media_links('facebook') ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?= social_media_links('instagram') ?>" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="<?= social_media_links('linkedin') ?>" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </div>