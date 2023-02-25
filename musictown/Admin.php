<?php 
	session_start();
	include('server.php');
?>
<!DOCTYPE html>
<!--divinectorweb.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MUSICTOWN</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/logo1.png" />
    <style>
        *{
	font-family: 'Montserrat', sans-serif;
    }
.bg-light {
	background-color: transparent !important;
}
.carousel-item {
	height: 100vh;
	min-height: 300px;
}
.carousel-caption {
	bottom: 220px;
}
.carousel-caption h5 {
	font-size: 45px;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-top: 25px;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 0.5;
}
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	background: #d8015a;
	padding: 10px 30px;
	display: inline-block;
	color: rgb(255, 255, 255);
	margin-top: 15px;
}
.navbar-nav a {
	font-size: 18px;
	text-transform: uppercase;
	font-weight: bold;
}
.navbar-nav label {
	font-size: 18px;
	text-transform: uppercase;
	font-weight: bold;
	margin-top: 8px;
	margin-left: 15px;
}
.navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
.navbar-light .navbar-brand:focus, .navbar-light .navbar-brand:hover {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link:focus, .navbar-light .navbar-nav .nav-link:hover {
	color: #fff;
}
.navbar-light .navbar-nav .show-btn {
	color: #fff;
}
.navbar-light .navbar-nav .show-btn:focus, .navbar-light .navbar-nav .show-btn:hover {
	color: #fff;
}
.w-100 {
	height: 100vh;
}
.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
.show-btn{
	cursor: pointer;
}
input[type="checkbox"]{
	display: none;
}
.popup-container{
	display: none;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background: #fff;
	Width: 450px;
	height: 490px;
	padding: 70px;
	border-radius: 10px;
	box-shadow:20px 20px 20px rgba(0, 0, 0, 0.5);
}
#show:checked ~ .popup-container{
	display: block;
}
.popup-container .close-btn{
	position: absolute;
	right: 25px;
	top: 25px;
	font-size: 20px;
	cursor: pointer;
}
.popup-container .close-btn:hover{
	color: #d8015a;
}
.popup-container .popup-login{
	font-size: 35px;
	font-weight: 600;
}
.popup-container form{
	margin-top: 20px;
}
.popup-container form .popup-data{
	height: 45px;
	width: 100%;
	margin: 10px 0;
}
form .popup-data input{
	margin-top: 20px;
	height: 100%;
	width: 100%;
	padding-left: 10px;
	font-size: 17px;
	border: 1px solid lightgray;
	border-radius: 4px;
}
form .popup-btn{
	margin-top: 100px;
	height: 45px;
	width: 100%;
	position: relative;
	overflow: hidden;
	box-shadow:5px 5px 5px rgba(0, 0, 0, 0.2);
	border-radius: 4px;
}
form .popup-btn .popup-inner{
	height: 100%;
	width: 300%;
	position: absolute;
	left: -100%;
	background: #d8015a;
}

form .popup-btn button{
	height: 100%;
	width: 100%;
	background: none;
	border: none;
	color: #fff;
	font-size: 18px;
	font-weight: 500;
	letter-spacing: 1px;
	cursor: pointer;
}
form .signup-link{
	margin-top: 20px;
	margin-bottom: 20px;
}
form .signup-link a{
	color: #d8015a;
	text-decoration: none;
}
form .signup-link a:hover{
	text-decoration: underline;
}

@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
		background: rgba(0, 0, 0, 0.5);
	}
	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 17px;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
}

#right {    
    text-align: right;  
}  
    </style>
</head>
<body>
    
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
            <div id ="left">  
                <img src="img/banner.png">  
                </div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.html">Home</a>
					</li>
					<li class="nav-item">
						<label for="show" class="show-btn">Sign In</label>
					</li>
				</ul>

                
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100" src="img/itzy-banner.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">MUSICTOWN</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">BEST KPOP ONLINE STORE FOR KPOP ALBUM</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="home.php">ENTERSITE</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/skz-banner.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">MUSICTOWN</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">BEST KPOP ONLINE STORE FOR KPOP ALBUM</p>
					<p class="animated bounceInRight" style="animation-delay: 3s" ><a href="home.php">ENTERSITE</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="img/nct-banner.jpg">
				<div class="carousel-caption">
					<h5 class="animated bounceInRight" style="animation-delay: 1s">MUSICTOWN</h5>
					<p class="animated bounceInLeft d-none d-md-block" style="animation-delay: 2s">BEST KPOP ONLINE STORE FOR KPOP ALBUM</p>
					<p class="animated bounceInRight" style="animation-delay: 3s"><a href="home.php">ENTERSITE</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
	</script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js">
	</script>

	<div class="popup-center">
		<input type="checkbox" id="show">
		<div class="popup-container">
			<label for="show" class="close-btn fas fa-times"></label>
			<br><br>
			  <h2 class="popup-login">ADMIN PAGE</h2>
			<form action="loginAdmin_db.php" method = "post">
			<?php if (isset($_SESSION['error'])) : ?>
                <div class="error">
                    <h3>
                        <?php 
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </h3>
                </div>
        	<?php endif ?>
			
			<div class="popup-data">
				<input type="text" name="A_firstname"  id="A_firstname" placeholder="Username" required>
				<input type="password" name = "A_lastname" id = "A_lastname" placeholder="Password" required>
			</div>
			<div class="popup-btn">
				<div class="popup-inner">
				<button type = "submit" name="login_user">Sign In</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>
