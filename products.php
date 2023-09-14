<?php
include "assets/load.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- updated code -->
<!-- Google tag (gtag.js) --> 
<script async src="https://www.googletagmanager.com/gtag/js?id=G-EKTLZCJV6J&quot;"></script> 

<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-EKTLZCJV6J'); </script>
   





<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Products</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #f7f8fc;">
    <main class="products-container">

        <?php
        load_template('_product_header');
        ?>

        <!-- ======= Products Section Start ======= -->
        <?php
        load_template('_Call Center Dialer');
        ?>
        <?php
        load_template('_CRM');
        ?>
        <?php
        load_template('_IPPBX');
        ?>
        <?php
        load_template('_Complete Business Suite');
        ?>
        <?php
        load_template('_IVR System');
        ?>
        <?php
        load_template('_Customer_care')
        ?>
        <?php
        load_template('_fire wall');
        ?>
        <?php
        load_template('_remote dailer');
        ?>
        <?php
        load_template('_remote pbx');
        ?>
        <?php
        load_template('_VMS');
        ?>
        <?php
        load_template('_Bulk SMS');
        ?>
        <?php
        load_template('_Third Party')
        ?>
        <?php
        load_template('_Gateway');
        ?>
    </main>

    <?php
    load_template('_Footer');
    ?>
    <!-- End Footer -->
    <!-- ======= Products Section End ======= -->

    <!-- Vendor JS Files -->

    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>