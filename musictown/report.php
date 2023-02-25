<?php 
  include('server.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Report</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icon -->
  <link rel="icon" type="image/png" href="img/logo1.png" />


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
    /*<!----------edit---------->*/
    .columnalbum {
        float: left;
        width: 25%;
        padding: 25px;
      }
      .columnicon {
          float: left;
          width: 20%;
          padding: 15px;
      }
      .albumicon {
        width: 300px;
        height: 520px;
        border: 1px solid lightgray;
      }
      album img{
        width: 100%;
      }
      
      .boxalbum {
            text-align: center;
            display: flex:
            width: 500px;
            margin-left: 1%;
            margin-top: 10px;
            padding: 25px;
        }
      .rowalbum:after {
            content: "";
            display: table;
            clear: both;
      }
      #butt {
        background-color: #E8126A;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 50px;
        }
      .rating{
        color: #E8126A;
      }
  /*<!----------edit---------->*/  
</style>
  <!----------edit---------->
</head>

<body>

      <!-- ======= Header ======= -->
      <?php include 'header.php'?>

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
  <br><br><br><br>
          <div class="row">
            <form action="addst_db.php" method ="post">
            <div class="col-lg-12 entries">

              <article class="entry entry-single">
              <div class="col-lg-12">
                <p class="askProb"><a style="color: #E8126A;" href="FAQ.php">คำถามที่พบบ่อย <i class="material-icons" style="color: #E8126A;font-size:15px"></a></p>
              </div>
                <div class="entry-content">
                  <div class="text-center">
                        <p class="boxProblem"; ><b>แจ้งปัญหา</b></p>
                  </div>
                    <div class="row">
                        <p>Name and Lastname:</p>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="fname" class="formControl" id="fname" placeholder="Name">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="lname" class="formControl" id="lname" placeholder="Lastname" >
                        <p><br>Tel. and E-mail:</p>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="tel" class="formControl" id="tel" placeholder="Tel">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="email" class="formControl" id="email" placeholder="Email">
                        <div class="form-group mt-3">
                        <p>ปัญหาที่พบ:</p>
                        <textarea  class="form-control" name="massage" id="massage" rows="5" placeholder="Text"></textarea>
                        </div>
                        
                        <div class="text-center">
                          <br><button type="submit" class="buttonSub">ส่ง</button>
                        </div>
                    </div>
                  </form>            
               </div>
             </article>
           </div>
         </div>
       </div>
    
  <!-- End blog entry -->

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