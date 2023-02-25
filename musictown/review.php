<?php 
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" type="image/png" href="img/logo1.png" />
    <title>Review</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


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

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>

  <body>
      <!-- ======= Header ======= -->
      <?php include 'header.php'?>

    
    <br><br><br><br><br><br><br><br>

    <main id="main">
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">
                <div class="col-lg-12 entries" style="margin: auto;">
                    <article class="entry entry-single">
                        <p class="boxProblem"; style="margin: 0%; width: 100px; height: 50px;"><b>รีวิว</b></p>
                        
                            <!-- RATE -->
                            <br><br>
                            <div class="upload">
                              <img src="img/inputImage2.png" width = 150 height = 70 alt="">
                              <div class="round">
                                <input type="file" style="padding: 0%; margin: -15px 18px; width: 75px;">
                              </div>
                            </div>
                            <br>
                            <p>คะแนน : 
                              <div class="col-lg-12">
                              <section id="like" class="rating">
                                  <!-- FIFTH HEART -->
                                  <input type="radio" id="heart_5" name="like" value="5" />
                                  <label for="heart_5" title="Five">&#10084;</label>
                                  <!-- FOURTH HEART -->
                                  <input type="radio" id="heart_4" name="like" value="4" />
                                  <label for="heart_4" title="Four">&#10084;</label>
                                  <!-- THIRD HEART -->
                                  <input type="radio" id="heart_3" name="like" value="3" />
                                  <label for="heart_3" title="Three">&#10084;</label>
                                  <!-- SECOND HEART -->
                                  <input type="radio" id="heart_2" name="like" value="2" />
                                  <label for="heart_2" title="Two">&#10084;</label>
                                  <!-- FIRST HEART -->
                                  <input type="radio" id="heart_1" name="like" value="1" />
                                  <label for="heart_1" title="One">&#10084;</label>
                              </section>
                              </div>
                            </p>
                            <div>
                              <p>คำอธิบาย : </p>
                              <textarea class="form-control" name="message" rows="5" placeholder="Text"></textarea>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-10 form-group"></div>
                            <a href="home.php"><button type="submit" class="buttonSub" style="background-color: #E8126A; width: 60px; height: 30px; font-size: 20px;">ยืนยัน</button></a>
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