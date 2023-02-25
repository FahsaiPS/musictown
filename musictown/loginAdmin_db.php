<?php

    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $A_firstname = mysqli_real_escape_string($conn, $_POST['A_firstname']);
        $A_lastname = mysqli_real_escape_string($conn, $_POST['A_lastname']);
    }

    $strSQL1 = "SELECT * FROM admin WHERE A_fisrtname = '".$A_firstname."' and A_lastname = '".$A_lastname."'";
    $objQuery1 = mysqli_query($conn,$strSQL1);
    $objResult1 = mysqli_fetch_array($objQuery1);
    
    if(!$objResult1)  { 
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username/password try again!!";
        header('location: Admin.php');
     }
    else {
      //*** Session
        $_SESSION["success"] = $objResult1["success"];
        $_SESSION['username'] = $A_firstname;
        session_write_close();
     
      //*** Go to Main page
          header("location:index_admin.php");
        }
      mysqli_close($con);
?>