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
		<link rel="stylesheet" href="css/bootstrap.min.css" />

	<link rel="icon" href="img/favicon.png" type="image/png" />
	<link rel="shortcut icon" href="img/favicon.ico" />		

    <style type="text/css"> 
	
	
	
	</style>		
	</head>
	<body>
	 
	<div class="main_wrap slider_bg">
	
	   
		<div class="wrap">
		<style>
		       
			   .portfoio{width:935px} 
			   .portfolio table{}
			   .portfolio table tr {}
			   .portfolio table td{}
	   
			   .innerRangePhp{float:left;width:800px;height:50px;border-radius:30px; background:#fc721e;} 
			   .rangePhp{width:935px;height:50px;border-radius:30px; background:#fff;} 


				.innerRangeLaravel{float:left;width:300px;height:50px;border-radius:30px; background:#fc721e;} 
			   .rangeLaravel{width:935px;height:50px;border-radius:30px; background:#fff;} 
				
			   .innerRangeJavascript{float:left;width:500px;height:50px;border-radius:30px; background:#fc721e;} 
			   .rangeJavascript{width:935px;height:50px;border-radius:30px; background:#fff;} 
				
			   </style>	
		 <div class="portfolio"> 
				 
				  <table class='table bg-success ' >
							<tr>
								  <td><h4> POP & OOP(PHP)</h4> </td>
								  <td>
									   <div class="rangePhp">
											   <div class="innerRangePhp"></div>
									   </div>
								  
								  </td>
							</tr>
	   
							<tr> 
							<td><h4> Laravel </h4> </td>
								  <td><div class="rangeLaravel">
								       <div class="innerRangeLaravel"></div>
								  </div></td>   
							</tr>
	   
							<tr> 
							<td><h4> javascript(front end) </h4> </td>
								  <td><div class="rangeJavascript">
								          <div class="innerRangeJavascript"></div>
								  </div></td>   
							</tr>
				  </table>    
	   
		 </div>

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