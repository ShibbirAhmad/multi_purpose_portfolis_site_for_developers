<!DOCTYPE HTML>


<?php 

include "admin/lib/config.php";
include "admin/lib/database.php"; 




spl_autoload_register(function($class){

         include_once "admin/classes/".$class.".php";
});

          $db            = new database();
          $helper        = new helper();
          $slider        = new projectSlider();
       

?>
<html lang="en-US">
	<head>
	
  
	<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="nivocss/nivo-slider.css" type="text/css" media="screen" />		


		<link rel="stylesheet" href="nivocss/nivostyle.css" />
		<link rel="stylesheet" href="nivocss/responsive.css" />


	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="img/favicon.ico" />		

    <style type="text/css"> 
	
	
	
	</style>		
	</head>
	<body>
	 
	<div class="main_wrap slider_bg">
	
	   
		<div class="wrap">
			<section>
				<div id="slider_wrapper">
               
			  <div class="slider-wrapper theme-dark">
			  
			
						<div id="slider" class="nivoSlider">
			<?php
			   
				   $getSliderData=$slider->getAllProjectSlider();
				   if($getSliderData){ 

					while($display=$getSliderData->fetch_assoc()){ 
			 
			 
			   ?>
							<img src="admin/<?php echo $display['projectImage']; ?>" />
							
							
							  <?php }  }  ?>
						</div>
           
					
					</div>	

				</div>					
		</section>			
		</div>
	</div>
		
			
<!--

	<div class="main_wrap">
		<div class="wrap">
			
		</div>
	</div>



-->			
			
			
			
			
			
			
		
    <script type="text/javascript" src="nivojs/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="nivojs/jquery.nivo.slider.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>	
	
	</body>
</html>