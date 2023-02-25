<?php 
include 'server.php';

if(isset($_POST['add_to_cart'])){

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_image = $_POST['product_image'];
  $product_quantity = 1;

  $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE Name = '$product_name'");

  if(mysqli_num_rows($select_cart) > 0){
     $message[] = 'product already added to cart';
  }else{
     $insert_product = mysqli_query($conn, "INSERT INTO `cart`(Name, Price, img, qty) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
     $message[] = 'product added to cart succesfully';
  }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Products</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
        padding: 30px;
      }
      .columnicon {
          float: left;
          width: 20%;
          padding: 15px;
      }
      .albumicon {
        width: 300px;
        height: 600px;
        border: 1px solid lightgray;
      }
      .album img{
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
        padding: 10px 1px;
        text-align: center;
        display: fixed;
        font-size: 15px;
        margin: 0px 0px;
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

      .portfolio #portfolio-flters li {
        cursor: pointer;
        display: inline-block;
        padding: 8px 15px 10px 15px;
        font-size: 14px;
        font-weight: 600;
        line-height: 1;
        text-transform: uppercase;
        color: #444444;
        margin-bottom: 5px;
        transition: all 0.3s ease-in-out;
        border-radius: 3px;
      }
      .portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
        color: #fff;
        background: #E8126A;
      }

      
  /*<!----------edit---------->*/

</style>
  <!----------edit---------->
</head>

<body>

   <!-- ======= Header ======= -->
  
  <?php include 'header.php'?>

<br><br>
<div id="portfolio" class="portfolio">
      <div class="container">
        <br><br><br><div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">ALL</li>
            </ul>
          </div>
        </div>


<div class = "boxalbum">
    <div class= "rowalbum">
       <!-- edit -->
      <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
  		   
           <div class = "columnalbum">
            <div class = "albumicon">
            
            <album>
                            <img src="<?php echo $fetch_product['img']; ?>" width="100%">
                            <br><br><p style="font-size:18px;"><?php echo $fetch_product['pName'];?></p>
                            <p><strong>ราคา :&nbsp;<?php echo number_format($fetch_product['Price'],2)?>&nbsp;บาท</strong></p>
                            <?php    if ($fetch_product['category'] <= 'product_category') : ?>
                              <div class="buttt"><a href="<?php echo $fetch_product['category']; ?>.php" align="center" class="button">รายละเอียดสินค้า</a></div><br><br>
                            <?php endif ?>   
                            <p style="color:#E8126A">In Stock:&nbsp;<?php echo $fetch_product['Amount'];?>&nbsp;ชิ้น</p>
                            <!-- form session -->
                            <form action="" method="post" style="width:100%;" >
                           <input type="hidden" name="product_name" value="<?php echo $fetch_product['pName']; ?>">
                          <input type="hidden" name="product_price" value="<?php echo $fetch_product['Price']; ?>">
                          <input type="hidden" name="product_image" value="<?php echo $fetch_product['img']; ?>">
                          <input type="submit" class="butt" name="add_to_cart" value="BUY NOW">
                          </form>
                          
                        </album>
                        
                    </div>
                    
            </div> 
            <?php
         };
      };
      ?>     
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
