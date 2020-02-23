
<!DOCTYPE html>


<?php 

include "admin/lib/config.php";
include "admin/lib/database.php"; 




spl_autoload_register(function($class){

         include_once "admin/classes/".$class.".php";
});

          $db            = new database();
          $helper        = new helper();
          $admin         = new admin ();
          $title         = new titleDescription();
          $slider        = new projectSlider();
          $projectCategory  = new projectCategory();
          $postCategory  = new postCategory();
          $project       = new project();
          $post          = new post();
          $updateContact = new updateContact();
          $social        = new social ();
          $developer     = new developer();
          $subscriber    = new subscriber();

?>



<html lang="en">
  <head>
    <title>shibbirit.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
		
	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="img/favicon.ico" />		


    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
     


      <script src="myjs/jquery-3.2.1.min.js"></script>



  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">SHIBBIR-IT</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="index.php " class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="portfolio.php " class="nav-link"><span>Protfolio</span></a></li>
	          <li class="nav-item"><a href=project.php " class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href=" index.php " class="nav-link"><span>Developer Team</span></a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link"><span>Blog</span></a></li>

	          <li class="nav-item"><a href="index.php" class="nav-link"><span>Contact to order </span></a></li>

	          <li class="nav-item cta"><a href="#" class="nav-link" data-toggle="modal" data-target="#modalAppointment">Subscribe Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

	 