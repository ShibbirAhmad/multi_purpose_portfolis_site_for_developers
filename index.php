<?php  include "inc/header.php" ; ?>



 <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-section="home">
      <div class="overlay"></div>
      <div class="container">   
			<?php 
								$getAuthorData=$title->getAdminTitle();
								if($getAuthorData){
									while($result=$getAuthorData->fetch_assoc()){ 

			?>
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate" data-scrollax=" properties: { translateY: '70%' }"> 
            <h1  class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $result['title']; ?></h1>
       


            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $result['description']; ?> </p>
								
									<?php }  }   ?>

						<p><a href="#" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#modalAppointment">subscribe us</a></p>
          </div>
        </div>
      </div>
		</section>  
		



    <section class="ftco-section ftco-counter ftco-no-pt ftco-no-pb img" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-end">
    			<div class="col-lg-12">
    				<div class="ftco-counter-wrap">
	    				<div class="row no-gutters d-md-flex align-items-center align-items-stretch">
			          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text">
			              	<div class="icon d-flex justify-content-center align-items-center">
			              		<span class="flaticon-house"></span>
			              	</div>
			                <strong class="number" data-number="3">0</strong>
			                <span>Years of Experienced</span>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text">
			              	<div class="icon d-flex justify-content-center align-items-center">
			              		<span class="flaticon-handshake"></span>
			              	</div>
			                <strong class="number" data-number="10000">0</strong>
			                <span>Total Subscriber</span>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text">
			              	<div class="icon d-flex justify-content-center align-items-center">
			              		<span class="flaticon-lawyer"></span>
			              	</div>
			                <strong class="number" data-number="20">0</strong>
			                <span>Developed Project</span>
			              </div>
			            </div>
			          </div>

			          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
			            <div class="block-18">
			              <div class="text">
			              	<div class="icon d-flex justify-content-center align-items-center">
			              		<span class="flaticon-medal"></span>
			              	</div>
			                <strong class="number" data-number="5">0</strong>
			                <span>MY Honors &amp; Awards</span>
			              </div>
			            </div>
									
			          </div>
		          </div>
		        </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light" id="about-section">
    	<div class="container">
    	





    	</div>
    </section>

    <section class="ftco-about ftco-no-pt ftco-no-pb img ftco-section bg-light">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-6 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
	    				<div class="img d-flex align-self-stretch align-items-end" style="background-image:url(images/shibbir_it.png);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-6 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate pb-5">
		          	<span  class="subheading">Admiration</span>
		            <h2 class="mb-4" style="font-size: 44px; text-transform: capitalize;">Developers Speech of shibbirit</h2>

		          </div>
		          <div class="col-md-12 testimony-section">
								<div class="owl-carousel carousel-testimony">
			
			
				<?php 
								$getDeveloperData=$developer->getAllDeveloper();
								if($getDeveloperData){
									while($result=$getDeveloperData->fetch_assoc()){ 

			      ?>
									<div class="item">
										<div class="testimony-wrap">
				          		<div class="text mb-5">
				          			<div class="icon">
				          				<span class="icon-quote-left"></span>
				          			</div>
				          			<p><?php echo $result['description'] ; ?></p>
				          		</div>
				          		<div class="d-flex">
				          			<div class="user-img img mr-3" style="background-image: url(admin/<?php echo $result['image']; ?>);"></div>
				          			<div>
				          				<p class="name mb-0"><?php echo $result['name']; ?></p>
			                    <span class="position"><?php echo $result['designation']; ?></span>
				          			</div>
				          		</div>
				          	</div>
									</div>


           <?php  }  }  ?>
                     
								</div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-services" id="practice-section">
      <div class="container">
      	<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">Site Category Area</span>
            <h2 class="mb-4">Developed Application</h2>
            <p>we Develop every kinds of application.just click every category and select what type site do you want to design or develop by us.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-5 col-lg-3 ftco-animate py-4 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link px-4 py-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><span class="mr-3 flaticon-ideas"></span> Project Category</a>

              <a class="nav-link px-4 py-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><span class="mr-3 flaticon-flasks"></span> E-commerce Site</a>

              <a class="nav-link px-4 py-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><span class="mr-3 flaticon-analysis"></span>Educational Site</a>

              <a class="nav-link px-4 py-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><span class="mr-3 flaticon-web-design"></span>Protfolio</a>


              <a class="nav-link px-4 py-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false"><span class="mr-3 flaticon-innovation"></span>school/college </a>

              <a class="nav-link px-4 py-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false"><span class="mr-3 flaticon-idea"></span> News Site</a>

              <a class="nav-link px-4 py-1" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false"><span class="mr-3 flaticon-idea"></span>Videos site</a>

              <a class="nav-link px-4 py-1" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false"><span class="mr-3 flaticon-idea"></span>Learning Site</a>

 

            </div>
          </div>
          <div class="col-md-7 col-lg-9 ftco-animate p-4 p-md-5 d-flex align-items-center">
            
            <div class="tab-content pl-lg-4" id="v-pills-tabContent">

             

              <div class="tab-pane fade show active py-0 py-lg-5" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block  "></span>
		              </div>
		              <div class="text">
		                <h2 class="mb-4">Project Category</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
		              </div>
		              <div class="text">
		                <h2 class="mb-4">Ecommerce Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block  "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Educational Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Portfolio Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">school/college</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">News Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Videos Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Learning Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Learning Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>

              <div class="tab-pane fade py-0 py-lg-5" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
              	<div class="d-lg-flex">
	              	<div class="icon-law mr-md-4 mr-lg-5">
		                <span class="icon mb-3 d-block "></span>
	                </div>
	                <div class="text">
		                <h2 class="mb-4">Blog Site</h2>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
		                <p>Inventore fugit error iure nisi reiciendis fugiat illo pariatur quam sequi quod iusto facilis officiis nobis sit quis molestias asperiores rem, blanditiis! Commodi exercitationem vitae deserunt qui nihil ea, tempore et quam natus quaerat doloremque.</p>
		                <p><a href="#" class="btn btn-primary px-4 py-3">Learn More</a></p>
	                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
    <section class="ftco-section bg-light" id="attorneys-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
          	<span class="subheading">About Us</span>
            <h2 class="mb-4">Developers of SHIBBIR-IT</h2>
            <p>All are full stack developer.to develop your website/aplication or get support contact with them.</p>
          </div>
        </div>

        <div class="row">
					
               
			
				<?php 
								$DeveloperData=$developer->getAllDeveloper();
								if($DeveloperData){
									while($show=$DeveloperData->fetch_assoc()){ 

			      ?>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(admin/<?php echo $show['image'] ;?>);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2"><?php echo $show['name'] ; ?></h3>
									<span class="position mb-4"><?php echo $show['designation']; ?></span>
									<div class="faded">
										<ul class="ftco-social text-center">
	                <li class="ftco-animate"><a href="<?php echo $show['linkedin'] ; ?>"><span class="icon-linkedin"></span></a></li>
	                <li class="ftco-animate"><a href="<?php echo $show['facebook'] ; ?>"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
	                <li class="ftco-animate"><a href="<?php echo $show['instragram'] ; ?>"><span class="icon-instagram"></span></a></li>
			              </ul>
		              </div>
		            </div>
							</div>
						</div>
					</div>


               <?php }  }  ?>

				</div>
    	</div>
    </section>

    <section class="ftco-section" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">My Blog</h2>

            <p>This is the blog section.Regularly i post here about information technology.specialy, who want to be web builder i guide them by regular shareing new tricks and way how to be develop carrier</p>

          </div>
        </div>
        <div class="row d-flex">

			
			<?php 
							$blogData=$post->getLimitPost();
							if($blogData){
								while($blog=$blogData->fetch_assoc()){ 

		      ?>


          <div class="col-md-4 d-flexphpimate">
          	<div class="blog-entry justify-content-end">

     		<div class="text">
          			<h3 class="heading"><a href="single.php"><?php echo $blog['postTitle'] ; ?></a></h3>
          		</div>
              <a href="single.php" class="block-20" style="background-image: url('admin/<?php echo $blog['postImage']; ?>');">
              </a>
              <div class="text mt-3 float-right d-block">
                <p><?php echo $helper->textshorten($blog['postDescription'],150); ?></p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0"><a href="single.php?definatePostId=<?php echo $blog['postId']; ?>" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#attorneys-section" class="mr-2"><?php echo $blog['postAuthor']; ?></a>
	                	<a href="single.php?definatePostId=<?php echo $blog['postId']; ?>" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>

  

            </div>
          </div>
                
             <?php  }  }  ?>
         
      </div>
    </section>




    <section class="ftco-section contact-section ftco-no-pb bg-light" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <span class="subheading">Contact</span>
            <h2 class="mb-4">Contact ME</h2>
            <p>I have no high demand.after completing your project if you satisfied then i am satisfied.
						contact with me always, i will try to provide you best service. </p>
          </div>
        </div>

				<?php 
								$contactData=$updateContact->getUpdateContact();
								if($contactData){
									while($show=$contactData->fetch_assoc()){ 

			  ?>

        <div class="row d-flex contact-info mb-5">
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p><?php echo $show['address'] ; ?></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://<?php echo $show['number']; ?>"><?php echo $show['number'] ;?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="<?php echo $show['email'] ; ?>"><?php echo $show['email'] ; ?></a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex ftco-animate">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="<?php echo $show['website'] ; ?>"><?php echo $show['website'] ; ?></a></p>
	          </div>
          </div>
        </div>


         <?php   }  }  ?>


<!--
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
          
            <form action="#" class="bg-primary p-5 contact-form">
              <div class="form-group">
                <input type="text"  class="form-control" placeholder="enter your name" />
              </div>

        
              <div class="form-group">
                <input type="text" class="form-control" placeholder="your email" />
              </div>

              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-darken py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div>
        </div>
			  	-->

      </div>
    </section>
	

<?php include "inc/footer.php";  ?>