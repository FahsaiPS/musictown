<?php

    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $upassword = mysqli_real_escape_string($conn, $_POST['upassword']);
    }

    $strSQL = "SELECT * FROM buyer WHERE username = '".$username."' and upassword = '".$upassword."'";
    $objQuery = mysqli_query($conn,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if(!$objResult)  { 
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username/password try again!!";
        header('location: index.php');
     }
    else {
      //*** Session
        $_SESSION["success"] = $objResult["success"];
        $_SESSION['username'] = $username;
        session_write_close();
     
      //*** Go to Main page
          header("location:home.php");
        }
      mysqli_close($con);
?>