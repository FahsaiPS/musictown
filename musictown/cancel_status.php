<?php 
  include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cancel Status</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="icon" type="image/png" href="img/logo1.png" />

    <!-- Favicons -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300i,300,300i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRaleway:300,300i,400,400i,500,500i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    
  </head>

  <body>
 
         <!-- ======= Admin Header ======= -->
         <?php include 'header_admin.php'?>

    <br><br><br><br><br>

    <main id="main">
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-8 entries" style="margin: auto;">
                    <article class="entry entry-single">
                        <p style="text-align: center; font-size: 25px;">คุณต้องการยกเลิกคำสั่งนี้ใช่หรือไม่</p>
                        <div class="row">
                            <div class="col-md-3 form-group"></div>
                            <div class="col-md-4 form-group">
                                <button type="submit" class="buttonSub" style="width: 60px; height: 30px; font-size: 20px;"><a href="status.php">ยกเลิก</a></button>
                            </div>
                            <button type="submit" class="buttonSub" style="background-color: #E8126A; width: 60px; height: 30px; font-size: 20px;"><a href="home.php">ตกลง</a></button>
                        </div>
                        
                    </article>
                </div>
            </div>
        </section>

                <!-- ======= footer ======= -->
                <?php include 'footer.php'?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>