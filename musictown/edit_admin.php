<?php 
	include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>EDIT ADMIN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icon -->
  <link rel="icon" type="image/png" href="img/logo1.png" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:200,300i,300,300i|Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- =======================================================
  * Template Name: Sailor - v4.7.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

     <!-- ======= ADMIN Header ======= -->
     <?php include 'header_admin.php'?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/new_ban.png)">
          
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/kpop.jpg)">
          
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/KPOP_g.png)">
          
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <center><h2><span class="badge rounded-pill bg-danger font-size:20em;">The Most Selling</span></h2></center><br><br><br>
    <!-- ======= Edit ======= -->
    <div class="card mb-2 align-items-center " style="padding: 40px;">
        <div class="row g-0">
      <div class="col-md-4">
        <img src="img\Straykids.jpeg" class="card-img-top" alt="..." style="margin-right:550px">
       <div style="margin: 20px 120px;font-size: 15px;">ODDINARY - Stray Kids</div>
      </div>
      <div class="col-md-4">
        <div class="card-body">
          <div>
          <b><form>
          <label for="tname" style="font-size:22px">Title:</label>
          &nbsp;&nbsp;<input type="text" id="tname" name="tname" style="background-color: #dddddd;width: 250px;height: 30px;"> 
          <a href="index.html" >
                  <b><span class="badge font-size:20em;" style="color:#E8126A;" >
                Change</span></b></div>
          <br><div><label for="lname" style="font-size:22px;color:black;">Link:</label>
          &nbsp;&nbsp;<input type="text" id="lname" name="lname" style="background-color: #dddddd;width: 200px;height: 30px;">
          <b><span class="badge font-size:20em;" style="color:#E8126A;" >
                Change</span></b></div>
          <br><div><label for="Pname" style="font-size:22px;color:black">Photo:</label>
          &nbsp;&nbsp;<input type="file" id="Pname" name="Pname" value="upload" style="background-color: #dddddd;width: 200px;height: 30px;"> <b><span class="badge font-size:20em;" style="color:#E8126A;" >
                Change</span></b></div>
          </form></b>
          <br>
        </div>
          
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="text-start">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="all_product.php"><button type="submit" class="buttonPay">ยืนยัน</button></a>
                    <a href="index_admin.php"><button type="submit" class="buttonSub" name="order_btn" id="order_btn">ยกเลิก</button></a>
                  </div>
        </div>
      </div>
    </div>
  </div>

        <br><br><br>
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

</html>