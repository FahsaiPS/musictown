<!----------edit---------->
<?php 
  include('server.php');
?>
<!----------edit---------->
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

     <!-- ======= Header ======= -->
  
     <?php include 'header.php'?>
<!----------edit---------->
<?php
    
    $sql = 
    "SELECT product.ItemID, product.pName, product.Price, product.P_Description, 
    detail.Amount, detail.model, detail.Weight, detail.Height, detail.Depth
    FROM product
    INNER JOIN detail ON product.ItemId = detail.ItemID
    ";
    //GROUP BY = select specific row 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) :
    // output data of each row
?>
<!----------edit---------->
  
  
  <!-- ======= Hero Section ======= -->
  <section id="heroalbum">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(img/nct205.jpg)">
          
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(img/nct201.jpg)">
          
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(img/nct202.jpg)">
          
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(img/nct203.jpg)">
          
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

  <!----------edit---------->
  
<?php
       $row = $result->fetch_assoc();
?>
    <!-- ======= Blog Single Section ======= -->
<section id="blog" class="blog">
        <div class="container" data-aos="fade-up"><br><br><br>
  
          <div class="row">
            
            <div class="col-lg-12 entries">
  
              <article class="entry entry-single">
  
                <div class="entry-content">
                    
                    <div class="row">
                      <?php   if ($row['product.ItemID'] ='1') : ?>
                          <div class="col-md-10 form-group">
                            <h1><?php echo $row['pName']?></h1>
                            <h1><?php echo $row['model']?></h1>
                            <h3>Price: <?php echo $row['Price']?> Baht</h3>
                            <h6 class="rating">Rating: <i class="bi bi-heart-fill"></i><i class="bi bi-heart-fill"></i><i class="bi bi-heart-fill"></i><i class="bi bi-heart-fill"></i><i class="bi bi-heart-fill"></i>(30)</h6>
                            <label><?php echo $row['P_Description']?></label>
                            <br><label>Weight: <?php echo $row['Weight']?> g.</label>
                            <br><label>Height: <?php echo $row['Height']?> mm.</label>
                            <br><label>Depth: <?php echo $row['Depth']?> mm.</label>
                            <br><label class="rating">Stock: <?php echo $row['Amount']?> Albums</label>
                          </div>
                        <?php endif ?>
                    </div>                 
  <?php    else : ?>
        <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
  <?php endif ?>
<!----------edit---------->  

                    
<br><br><br>
      <div class="row">
        <div class="col-md-12 form-group">
            <center><img src="img/nct204.jpg" width="700"></center>
        </div>
      </div>

</div>

</article>              
            </div>
          </div>
</div>
</section>
  <!-- End blog entry -->

      <!-- ======= Header ======= -->
      <?php include 'header.php'?>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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