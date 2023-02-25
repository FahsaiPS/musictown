<?php 
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NCT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:200,300i,300,300i|Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="img/logo1.png" />

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
        height: 550px;
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
      .butt {
        background-color: #E8126A;
        border: none;
        color: white;
        padding: 10px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 1px 2px;
        cursor: pointer;
        border-radius: 50px;
        }

        .buttt {
        background-color: #212529;
        border: none;
        color: white;
        padding: 5px 25px;
        text-align: center;
        display: inline;
        font-size: 10px;
        margin: 0px 0px;
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



<?php
    
    $sql = 
    "SELECT product.ItemID, product.pName, product.Price, picture.Img, product.category
    FROM product
    INNER JOIN picture ON product.ItemId = picture.ItemID
    GROUP BY product.ItemID HAVING (product.ItemID) <='8'
    ";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) :
    // output data of each row
?>
<br><br>
<div id="portfolio" class="portfolio">
      <div class="container">
        <br><br><br><div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" style="font-size: 20px;">NCT</li>
            </ul>
          </div>
        </div>
<div class = "boxalbum">
    <div class= "rowalbum">
    <?php
        while($row = $result->fetch_assoc()):
    ?>
           <div class = "columnalbum">
                    <div class = "albumicon">
                        <album>
                            
                            <img src=  "data: img/jpeg;base64, <?php echo base64_encode($row['Img'])?> ">
                            </a>
                            <p style="font-size:19px;">&nbsp; <?php echo $row['pName']?></p>
                            <p>ราคา:&nbsp;<?php echo number_format($row['Price'],2)?>&nbsp;บาท</p>
                            
                            <?php    if ($row['category'] <='product_category') : ?>
                              <div class="buttt"><a href="<?php echo $row['category']; ?>.php" align="center" >รายละเอียดสินค้า</a></div><br><br>
                              <?php endif ?>  

                                <div class="butt"><a href="all_product.php" align="center" class="button">BUY NOW</a></div>
                               
                        </album>
                    </div>
            </div> 
    <?php endwhile ?> 
    <?php    else : ?>
        <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
    <?php endif ?>
    </div>    
</div>

<!-- ======= Footer ======= -->
<?php include 'footer.php'?>
<!-- End Footer -->


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
