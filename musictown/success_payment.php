<?php

include 'server.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET qty = '$update_value' WHERE ItemID = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE ItemID = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My cart</title>
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
    <link rel="icon" type="image/png" href="img/logo1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
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
    </style>

  </head>

  <body>
      <!-- ======= Header ======= -->
      <?php include 'header.php'?>
    
    <br><br><br><br><br><br><br>
    
    <div class="text-center">
                  <p class="boxBucket"; style="color:#E8126A"><b style="font-size:40px">ขอบคุณสำหรับการชำระเงิน</b></p>
                  <p class="boxBucket"; style="color:#E8126A"><b style="font-size:40px">ออเดอร์ของคุณกำลังดำเนินการ</b></p>
                </div>
                
    
    <main id="main">
      <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
          <div class="row">
            <div class="col-lg-12 entries">
              <article class="entry entry-single">

                <!-- Space -->

                <center>
                <table class="table">
                  <thead align="center">
                      
                      <th scope="col">สินค้า</th>
                      <th scope="col">ชื่อสินค้า</th>
                      <th scope="col">ราคาสินค้า</th>
                      <th scope="col"></th>
                      <th scope="col">ราคารวม</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                  </thead>
                  
                  <tbody align="center">
                  <?php 
                    $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                    $grand_total = 0;
                    if(mysqli_num_rows($select_cart) > 0){
                        while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                ?>


                  <tr>
                      
                      <td><img src="<?php echo $fetch_cart['img']; ?>" height="100" alt=""></td>
                      <td><?php echo $fetch_cart['Name']; ?></td>
                      <td><?php echo number_format($fetch_cart['Price']); ?>&ensp;บาท</td>
                      <td>
                      <form action="" method="post">
                          <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['ItemID']; ?>" >
                          &emsp;&emsp;&emsp;&emsp;&emsp;<input class="formQ" type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['qty']; ?>" >
                      </form>   
                    </td>
                    <td><?php echo $sub_total = number_format($fetch_cart['Price']*$fetch_cart['qty']);?>&ensp;บาท</td>
                  </tr>
              <?php
              
                  $grand_total += ((int)$sub_total)+25;  
                    };
                };
              ?>
                       <tr class="table-bottom">
                       <td colspan=""></td>
                        <td colspan="3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                          ค่าส่งสินค้า</td>
                        <td> 50 บาท</td>
                        </tr>
                       <tr class="table-bottom">
                       <td colspan=""></td>
                        <td colspan="3">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                          ราคาสินค้าทั้งหมด</td>
                        <td><?php echo $grand_total; ?>&ensp;บาท</td>
                        
                    </tr>

                  </tbody>
                </table>
                 <center>
 

              </article><!-- End blog entry -->

                                
                  <!-- text start is left , text end is right -->
                  <div class="text-center">
                  <div class="butt"><a href="home.php" align="center" class="button">คลิกเพื่อกลับหน้าหลัก</a></div>
                  </div>

            </div>
          </div>
        </div>
    </main>
   <!-- ======= Footer ======= -->
<?php include 'footer.php'?>
<!-- End Footer -->


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