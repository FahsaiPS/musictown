<?php

include 'server.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $lastname = $_POST['lastname'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $address = $_POST['address'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['Name'] .' ('. $product_item['qty'] .') ';
         $product_price = number_format($product_item['Price'] * $product_item['qty']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `payment`(name, lastname ,number, email, method, address, total_product, total_price) VALUES('$name','$lastname','$number','$email','$method','$address','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
    echo "
          <script>window.location.href = 'success_payment.php';</script>
    ";
 }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <!-- ======= Header ======= -->
        <?php include 'header.php'?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Payment</title>
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




  <br><br><br><br><br><br><br>
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" >
        <div class="text-center">
                        <p class="boxProblem"  ><b>ชำระเงิน</b></p>
                  </div>
          <div class="row">
            <form action="" method ="post">
            <div class="col-lg-12 entries">

              <article class="entry entry-single">
              <div class="col-lg-12">
               
                <div class="entry-content">
                    <div class="row">

                        <!-- add info --><br><br>
                        <div class="text-center">
                        <br><br><br><p class="boxBucket" ><b style="color: #E8126A;font-size:35px">ข้อมูลการจัดส่ง</b></p>
                        </div>

                        <p style="color: #E8126A;font-size:15px" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ระบุชื่อและนามสกุล :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="name" class="formControl" id="fname" placeholder="Ex: รักดี" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="lastname" class="formControl" id="l" placeholder="Ex: ขอเกรดเอ"required >
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ระบุเบอร์โทรศัพท์และอีเมล :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" name="number" class="formControl" id="tel" placeholder="Ex: 02564xxxx" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="email" class="formControl" id="email" placeholder="Ex: example@gmail.com" required>
                        <div class="form-group mt-3">
                        <p style="color: #E8126A;font-size:15px">ระบุที่อยู่จัดส่งสินค้า :</p>
                        <textarea  class="form-control" name="address" id="massage" rows="5" placeholder="Ex :บ้านเลขที่ xx/x ตำบลคลองหนึ่ง อำเภอคลองหลวง จ.ปทุมธานี 12120" required></textarea>
                        </div>
                        
                        
                        <!-- product --><br><br>
                        <div class="text-center">
                        <br><br><br><p class="boxBucket" ><b style="color: #E8126A;font-size:35px">รายการสินค้า</b></p>
                        </div>


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
                    <td><?php echo $sub_total = number_format(($fetch_cart['Price']*$fetch_cart['qty']));?>&ensp;บาท</td>
                    <td><a href="cart.php?remove=<?php echo $fetch_cart['ItemID']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn" style="color:#E8126A"> <i class="bi-trash" style="font-size:20px"></i></a></td>
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
                        <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn" style="color:#E8126A"> <i class="bi-trash" style="font-size:15px"></i> ลบทั้งหมด </a></td>
                    </tr>

                  </tbody>
                </table>
                 <center>
                
                <!-- METHOD PAYMENT-->

                <div class="text-center">
                <br><br><br><p class="boxBucket" ><b style="color: #E8126A;font-size:35px">ช่องทางการชำระเงิน</b></p>
                </div>




                 <table class="table">
                  <thead align="center">
                      
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                  </thead>
                  <td><a>วิธีการชำระเงิน</a></td>
                  <td><a></a></td>
                  <td><a></a></td>
                  <td><a></a></td>
                  <td><a></a></td>
                  <td><a></a></td>
            <td><a>
                  <div class="inputBox">
                <div style="display: flex; justify-content: flex-end"><select name="method">
                <option value="โอนหรือชำระผ่านบัญชีธนาคาร" selected>โอนหรือชำระผ่านบัญชีธนาคาร</option>
                <option value="บัตรเครดิตหรือบัตรเดบิต">บัตรเครดิตหรือบัตรเดบิต</option>
                <option value="ชำระผ่าน Paypal">ชำระผ่าน Paypal</option>
                </select></div>
                    </div>
            </a></td>
                
            
                  </tbody>
                </table>
                




                        
                <div class="text-end">
                    <a href="all_product.php"><button type="submit" class="buttonSub">ดูสินค้า</button></a>
                    <button type="submit" class="buttonPay" name="order_btn" id="order_btn">ชำระเงิน</button>
                  </div>




                    </div>
                  </form>            
               </div>
             </article>
           </div>
         </div>
       </div>
    
  <!-- End blog entry -->

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