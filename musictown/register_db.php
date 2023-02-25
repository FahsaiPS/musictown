<?php
    session_start();
    include('server.php');

    $errors = array();

    if(isset($_POST['reg_user'])){
        $first_name = mysqli_real_escape_string($conn,$_POST['first_name']);
        $last_name = mysqli_real_escape_string($conn,$_POST['last_name']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $upassword = mysqli_real_escape_string($conn,$_POST['upassword']);
        $id = rand();
        
        $user_check_query = "SELECT * FROM buyer WHERE username = '$username' OR email ='$email' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if($result){//if user exists
            if($result['username'] === $username){
                array_push($errors, "Username already exists");
            }
            if($result['email'] === $email){
                array_push($errors, "Email already exists");
            }
        }
        
        if (count($errors) == 0){
            $upassword = $upassword;

            $sql = "INSERT INTO buyer (first_name, last_name, email, username, upassword) 
            VALUE ('$first_name', '$last_name', '$email', '$username', '$upassword')";
            mysqli_query($conn, $sql);
            //$_SESSION['username'] = $username;
            //$_SESSION['success'] = "You are now logged in";
            header('location : entersite.php');
        }else{
            array_push($errors, "Username or Email already exists");
            $_SESSION['error'] == "Username or Email already exists";
            header("location: entersite.php");
        }

    }
?>