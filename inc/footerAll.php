

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About <span>shibbir-it</span></h2>
              <p>Shibbir-it are developed any kinds of website/webe application.we provied
               you best service with in  few weeks.we also support our clainet with in free cost </p>
            </div>
          </div> 
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="project.php"><span class="icon-long-arrow-right mr-2"></span>project</a></li>
                <li><a href="portfolio.php"><span class="icon-long-arrow-right mr-2"></span>portfolio</a></li>
                <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Developer Team</a></li>
                <li><a href="blog.php"><span class="icon-long-arrow-right mr-2"></span>Blog</a></li>
                <li><a href="index.php"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Project Categories</h2>
              <ul class="list-unstyled">
                 
              <?php 
              
                    $getCategory=$projectCategory->getAllProjectCategory();
                    if($getCategory){
                    while($show=$getCategory->fetch_assoc()){
  
             ?>
               

                <li><a href="project.php"><span class="icon-long-arrow-right mr-2"></span> <?php echo $show['categoryName']; ?> </a></li>
                
               
                    <?php   }  }
            
              ?> 
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-0">
	              <ul>
      <?php 
              
              $getContact=$updateContact->getUpdateContact();
              if($getContact){
              while($show=$getContact->fetch_assoc()){

       ?>
                  <li><span class="icon icon-map-marker"></span><span class="text"><?php echo $show['address']; ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $show['number']; ?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $show['email']; ?></span></a></li>
	              
        <?php }} ?>    
                </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
      <?php 
              
              $getSocialContact=$social->getSocial();
              if($getSocialContact){
              while($show=$getSocialContact->fetch_assoc()){

       ?>

                <li class="ftco-animate"><a href="<?php echo $show['linkedin']; ?>"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $show['facebook']; ?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $show['instragram']; ?>"><span class="icon-instagram"></span></a></li>
              <?php }  }  ?>      
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://shibbirit.com" target="_blank">shibbirit</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div  class="modal-header">
            <h5 class="modal-title"  id="modalAppointmentLabel">Subscribe US <br/>
            
          
          <?php 
            
          
              
            if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['subscribe'])  ) {
                   
                $subscriberDataSending=$subscriber->subscriberCreate($_POST);
         
                if ($subscriberDataSending) {
                   
                     return $subscriberDataSending;
                  }
         
                }
         
          
            ?>
            </h5>



            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          <div  class="bg-primary" class="modal-body">
         


            <form action=""  method="post">

              <div  class="form-group">
                <label for="appointment_name" class="text-black">Your Full Name</label>
                <input type="text" name="name" placeholder="type name....." class="form-control" id="appointment_name">
              </div>

            <div class="form-group">
                <label for="appointment_name" class="text-black">Your Profession</label>
                <input type="text" name="profession" placeholder="type profession......" class="form-control" id="appointment_name">
              </div>

              <div class="form-group">
                <label for="appointment_email" class="text-black">Your Email</label>
                <input type="email" name="email" placeholder="type email....." class="form-control" id="appointment_email">
              </div>
          
              

              <div class="form-group">
                <label for="appointment_message" class="text-black"> Review or tells what's on your mind about shibbirit  </label>
                <textarea name="message" id="appointment_message" placeholder="derop your valueable comments......." class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="subscribe" value="subscribe" class="btn btn-primary">
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

  <script type="text/javascript" src="myjs/myscript.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>