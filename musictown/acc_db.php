<?php 
    session_start();
    require_once('server.php');
    $errors = array();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: entersite.php');
    }

    $name = $_SESSION['username'];  
    
    if(isset($_POST['edit_user'])) {
        $B_id =  mysqli_real_escape_string($conn, $_POST['B_id']);
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $B_phone = mysqli_real_escape_string($conn,$_POST['B_phone']);
        $gender = mysqli_real_escape_string($conn,$_POST['gender']);
        $About =  mysqli_real_escape_string($conn, $_POST['About']);
        $Street = mysqli_real_escape_string($conn,$_POST['Street']);
        $District = mysqli_real_escape_string($conn,$_POST['District']);
        $Province = mysqli_real_escape_string($conn,$_POST['Province']);
        $Zipcode = mysqli_real_escape_string($conn,$_POST['Zipcode']);
        }
    
        $sql = "UPDATE buyer
        SET gender='$gender' , About='$About', email='$email',
        first_name = '$first_name', last_name = '$last_name',
        Street ='$Street' , District='$District', Province='$Province', Zipcode='$Zipcode'
        WHERE B_id = '$B_id'";
        $sql2 = "UPDATE b_phone
        SET B_phone ='$B_phone'
        WHERE  B_id = '$B_id'";
     
     if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
      echo "<script language=\"JavaScript\">";
      echo "alert('UPDATED SUCCESSFULLY');";
      echo "window.open(\"edit_profile.php\",\"_self\");";
      echo "</script>";    

    } else {
      array_push($errors, "Wrong combination");
      $_SESSION['error'] = "Wrong try again!!";
      header('location: edit_profile.php');
      mysqli_error($conn);
    }

?>