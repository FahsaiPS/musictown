<?php 
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MUSICTOWN</title>
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
  <style>
    /* The container feedback */
    .container1 {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 16px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container1 input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
    }

    /* On mouse-over, add a grey background color */
    .container1:hover input ~ .checkmark {
      background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container1 input:checked ~ .checkmark {
      background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */
    .container1 input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */
    .container1 .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
  </style>
</head>

<body>
  <!----------edit---------->
    <?php if (isset($_SESSION['success'])) : ?>
                        <div class="success">
                            <h3>
                                <?php 
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                ?>
                            </h3>
                        </div>
    <?php endif ?>
<!----------edit---------->

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
  <?php
    
    $sql = 
    "SELECT * FROM `report`
    ";
    //GROUP BY = select specific row 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) :
    // output data of each row
?>

     <section id="blog" class="blog">
                    <div class="container" data-aos="fade-up">
                    <br><br><br><br>
                    <div class="row">
                        <form>
                        <div class="col-lg-12 entries">
                        <article class="entry entry-single">
                        
                            <div class="entry-content">
                            <div class="text-center">
                                    <p class="boxProblem"; ><b>FEEDBACK</b></p>
                            </div>
                                <div class="row">
                                <?php
                                    while($row = $result->fetch_assoc()):
                                ?>
                                    <p style="border: 2px solid rgb(238, 232, 232);
                                    border-radius: 12px;
                                    padding-top: 25px;
                                    
                                    font-size: 22px;"><?php echo $row['fname']?>&nbsp;<?php echo $row['lname']?><br>
                                    <label>problem: <?php echo $row['massage']?></label>
                                        <a class="boxProblem"; style="background-color: black; color: white ; float:right; width: 200px; 
                                        height: 50px; 
                                        margin: 15px;"><label class="container1" float:right; >ตอบกลับ
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        </a> <a class="boxProblem"; style="background-color: black; color: white ; float:right; width: 150px; 
                                            height: 50px; 
                                            margin: 15px
                                            ;">รายละเอียด
                                        </a> 
                                    </p>
                                 <?php endwhile ?>
                                 <?php    else : ?>
                                      <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
                                  <?php endif ?>
                                </div>
                            </form>            
                        </div>
                        </article>
                    </div>
                    </div>
                </div>


                <br><br><br><br><br><br>
        <!-- ======= footer ======= -->
        <?php include 'footer.php'?>
</section>    
    

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
