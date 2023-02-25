<?php include('server.php');
    $sq = "SELECT * FROM buyer";
    $resul = $conn->query($sq);


     session_start();
     if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

   

?>

<!DOCTYPE html>
<html lang="en">

<head>

        <!-- ======= Header ======= -->
        <?php include 'header.php'?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- icon -->
  <link rel="icon" type="image/png" href="img/logo1.png"/>
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

  <!----------edit---------->
</head>

<body>


       <!-- ======= Header =======--> 
       <?php include 'header.php'?>

       <?php
        $name = $_SESSION['username'];

        $sql = "SELECT buyer.B_id, buyer.username, buyer.first_name, buyer.last_name,
        buyer.email, buyer.gender, b_phone.B_phone, buyer.About,buyer.Street,buyer.District,buyer.Province,
        buyer.Zipcode
        FROM buyer
        LEFT JOIN b_phone 
        ON buyer.B_id = b_phone.B_id
        WHERE buyer.username ='$name'";
        $result = $conn->query($sql);

      ?>


  
    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" >
        <div class="text-center"><br></br></br>
                        <p class="boxProblem"  ><b>แก้ไขข้อมูล</b></p>
                  </div>
          <div class="row">
          <?php
            while(($row = $result->fetch_assoc()) !== null){
          ?>
          <!-- FORMMMMMM -->
            <form action="acc_db.php" method ="post">
            <div class="col-lg-12 entries">
             
              <article class="entry entry-single">
              <div class="col-lg-12">
              
                <div class="entry-content">
                    <div class="row">

                        <!-- add info --><br><br>

                        
                        <p style="color: #E8126A;font-size:15px" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ชื่อและนามสกุล :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="first_name" class="formControl" id="first_name" placeholder="Ex: รักดี" value="<?php echo $row['first_name'] ?>"required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="last_name" class="formControl" id="last_name" placeholder="Ex: ขอเกรดเอ"  value="<?php echo $row['last_name'] ?>" required >
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Username และ User ID :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="username" class="formControl" id="username" placeholder="Ex: Konsuay" value="<?php echo $row['username'] ?>"required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="B_id" class="formControl" id="B_id" placeholder="Ex: 11" value="<?php echo $row['B_id'] ?>"required >
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ระบุเบอร์โทรศัพท์และอีเมล :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="B_phone" class="formControl" id="B_phone" value="<?php echo $row['B_phone'] ?>" placeholder="Ex: 02564xxxx" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="email" class="formControl" id="email" placeholder="Ex: example@gmail.com" value="<?php echo $row['email'] ?>" required>
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;เพศ :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="gender" class="formControl" id="gender" placeholder="Ex: LGBTQ+" value="<?php echo $row['gender'] ?>" required>
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ที่อยู่ :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="About" class="formControl" id="About" placeholder="Ex: 13/99 หมู่ 10 ตำบลคลองหนึ่ง" value="<?php echo $row['About'] ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="Street" class="formControl" id="Street" placeholder="Ex: ถนนเชียงราก" value="<?php echo $row['Street'] ?>" required>
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;อำเภอและจังหวัด :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="District" class="formControl" id="District" placeholder="Ex: อำเภอ" value="<?php echo $row['District'] ?>" required>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="text" name="Province" class="formControl" id="Province" placeholder="Ex: จังหวัดปทุมธานี" value="<?php echo $row['Province'] ?>" required>
                        
                        <p style="color: #E8126A;font-size:15px" ><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;รหัสไปรษณีย์ :</p>&nbsp;&nbsp;&nbsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        <input type="text" name="Zipcode" class="formControl" id="Zipcode" placeholder="Ex: 12120" value="<?php echo $row['Zipcode'] ?>" required>
                        
         




                        
                <div class="text-center"><br><br>
                    <a href="#"><button type="submit" class="buttonPay" name="edit_user">แก้ไข</button></a>
                    <a href="loginlaew.php"><button type="reset" value="Reset" class="buttonSub"  onclick="goBack()">ยกเลิก</button></a>
                  </div>




                    </div>
                  </form>
                  <?php } ?>             
               </div>
             </article>
           </div>
         </div>
       </div>
       </div>

       <script>
            function goBack() {
                window.history.back();
            }
        </script>
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