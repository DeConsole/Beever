
<?php
session_start();
require 'DBConnection.php';
require 'Config.php';
// IF USER LOGGED IN
if(isset($_SESSION['User_Phone_Number'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Beever</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="index.html">Bee<span>V</span>er</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->


    </div>
</header><!-- End Header -->

<main id="main">


    <section id="hero" class="services">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <h6 class="font-weight-light">Sign in to continue</h6>
                        <form class="pt-3" action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" name="User_Phone_Number" class="form-control form-control-sm"
                                       id="User_Phone_Number"
                                       placeholder="Phone Number">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="bx bx-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="User_Password" class="form-control form-control-sm"
                                       id="User_Password"
                                       placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="bx bx-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" style= "color: black" class="get-started-btn scrollto"><b>SIGN
                                        IN</b></button>
                            </div>
                            <?php
                            if(isset($success_message)){
                                echo '<div class="success_message" style="color: #fd7e14"><h6 class="font-weight-light">'.$success_message.'</h6></div>';
                            }
                            if(isset($error_message)){
                                echo '<div class="error_message" style="color: #fd7e14"><h6 class="font-weight-light">'.$error_message.'</h6></div>';
                            }
                            ?>
                            <div class="mt-3">
                                <a href="#" class="font-weight-light text-secondary">Forgot password?</a>
                            </div>
                            <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="Registration.php" class="text-primary">Create</a>
                            </div>
                        </form>
                    </div>
                </div>


        </div>
    </section><!-- End Services Section -->




</main>
<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="../assets/vendor/purecounter/purecounter.js"></script>
<script src="../assets/vendor/aos/aos.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="../assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="../assets/js/main.js"></script>

</body>

</html>