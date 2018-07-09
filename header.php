<?php 
 //checking if variabe page_title is set.
   if(!isset($page_title)){
       $page_title = "PTrack.Ng";
   }
?>



<!DOCTYPE html>
<html lang="en">
	<head>
    	<!-- 
    	Boxer Template
    	http://www.templatemo.com/preview/templatemo_446_boxer
    	-->
		<meta charset="utf-8">
		<title> <?php echo htmlspecialchars($page_title); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate css -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700,800' rel='stylesheet' type='text/css'>

		<!-- custom css -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<!-- start preloader -->
		
		<!-- end preloader -->
		<!-- start navigation -->
		<nav class="navbar-default navbar-expand-lg navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
				
					<a href="index.php" class="navbar-brand">PTrack.Ng</a>
				</div>
				<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#links" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>-->
				<div class="collapse navbar-collapse " id="links">
					<ul class="nav navbar-nav navbar-right text-uppercase ">
					    <li><a href="index.php">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#feature">Features</a></li>
						<li><a href="#contact">Contact Us</a></li>
						<li><a href="sign_up.php" ><button class="btn btn-primary">Sign Up</button></a></li>
						<li><a href="login.php" ><button class="btn btn-primary">Login</button></a></li>
						
					</ul>
				</div>
			</div>
		</nav>