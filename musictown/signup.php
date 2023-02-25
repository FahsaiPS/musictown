<?php 
    session_start();
    include('server.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>MUSICTOWN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="logo1.png" />
     <style>
        *{
	font-family: 'Montserrat', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    }
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: #d8015a;
}
.container{
  max-width: 500px;
  width: 100%;
  background-color: #fff;
  padding: 70px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 30px;
  font-weight: 600;
  position: relative;
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
.content form .user-name{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: 100%;
}
form .user-name .input-box{
  width: calc(100% / 2 - 10px);
}
.user-name .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-name .input-box input:focus,
.user-name .input-box input:valid{
  border-color: #d8015a;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #d8015a;
}
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: #d8015a;
 }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }


     </style>
   </head>
<body>

  <div class="container">
    <div class="title">Create an account</div>
    <div class="content">
      <form action="register_db.php" method="POST">
        <div class=" user-name">
            <div class="input-box">
             <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="input-box">
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <input type="text" id="email" name="email" placeholder="Email Address" required>
          </div>
          <div class="input-box">
            <input type="text" id="username" name="username" placeholder="User Name" required>
          </div>
          <div class="input-box">
            <input type="password" id="upassword" name="upassword"placeholder="Enter your password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" id="reg_user" name="reg_user" value="Sign Up">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
