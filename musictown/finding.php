<?php 
  include('server.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MUSICTOWN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="icon" type="image/png" href="img/logo1.png" />
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
      .butt {
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
      .blank {
            background-color: white;
            width: 11%;
            height: 100%;
            display: inline-block;
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

  <table>
    <?php
        $filter = $_GET['search']
    ?>

    <h1 style="margin-top: 50px;" align="center"></br></br>Search: <?php echo $filter?></h1>

    </br></br>
        <div class = "blank"></div>
   </table>

<?php
    $sql = 
    "SELECT product.pName, product.ItemID, product.Price, picture.Img 
    FROM product
    INNER JOIN picture ON product.ItemId = picture.ItemID";
    if( isset($_GET['search']) ){
        //$pName = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
        $sql = "SELECT product.pName, product.ItemID, product.Price, picture.Img 
                FROM product
                INNER JOIN picture ON product.ItemId = picture.ItemID 
                WHERE product.pName LIKE '%$filter%'";
    }
   
    $result = $conn->query($sql);

    if ($result->num_rows > 0) :
    // output data of each row
?>
<br><br>

<div class = "boxalbum">
    <div class= "rowalbum">
    <?php
        while($row = $result->fetch_assoc()):
    ?>
           <div class = "columnalbum">
                    <div class = "albumicon">
                        <album>
                            <a>
                            <img src=  "data: img/jpeg;base64, <?php echo base64_encode($row['Img'])?> ">
                            </a>
                            <p style="font-size:19px;">&nbsp; <?php echo $row['pName']?></p>
                            <p>&nbsp;Price: <?php echo $row['Price']?> Baht</p>

                            <?php    if ($row['ItemID'] >= '1') : ?>
                                <div class="butt"><a href="all_product.php" align="center" class="button">BUY NOW</a></div>
                            
                            <?php endif ?>   
                        </album>
                    </div>
            </div> 
    <?php endwhile ?> 
    <?php    else : ?>
        <h2 style="margin:200px;"><?php echo "0 results" ?></h2>
    <?php endif ?>
    </div>    
</div>

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
