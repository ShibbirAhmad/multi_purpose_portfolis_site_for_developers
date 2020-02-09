<?php  include "inc/headerAll.php" ; ?>



	  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/shibbir_it _blog.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Our Developed project</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a>
            </span> <span class="mr-2"><a href="single.php">Projects<i class="ion-ios-arrow-forward"></i></a></span>
             <span>Project Single <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>  
		

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">

          
      
      <?php 
              $projectData=$project->getLimitTwoProject();
              if($projectData){
                while($project=$projectData->fetch_assoc()){ 

      ?>

            <h2 class="mb-3"><?php echo $project['projectName'] ; ?></h2>
        
              <img src="admin/<?php echo $project['projectImage'] ; ?>" width="800px" height="Auto" alt="postImage" class="img-fluid">

            <p><?php echo $project['projectDescription']  ; ?></p>
           
          
          <?php  }  } ?>


          >
            

          </div> <!-- .col-md-8 -->









          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar"> Website Categories</h3>
              <ul class="categories">
<?php 
                $getProjectCategory=$projectCategory->getAllProjectCategory();
                if($getProjectCategory){
                  while($showCategory=$getProjectCategory->fetch_assoc()){ 

  ?>

                <li><a href="?categoryId=<?php echo $showCategory['id']; ?>"><?php echo $showCategory['categoryName']; ?><span>(12)</span></a></li>

<?php }  } ?>                    
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">

              <h3 class="heading-sidebar">Recent Developed Project </h3>
    
  <?php 
              $projectData=$post->getLimitedProject();
              if($projectData){
                while($project=$projectData->fetch_assoc()){ 

      ?>
          
    
               <div class="block-21 mb-4 d-flex">

         <a class="blog-img mr-4" style="background-image: url(admin/<?php echo $project['projectImage']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php echo $project['projectId']; ?>"><?php echo $project['projectName']; ?></a></h3>
                  <div class="meta">
                    <div><a href="<?php echo $project['projectId']; ?>"><span class="icon-calendar"><?php echo $project['date']; ?> </span></a></div>
      
                  </div>
                </div>
               </div>

       <?php   }  } ?> 

            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">


<?php 
                $getProjectCategory=$projectCategory->getAllProjectCategory();
                if($getProjectCategory){
                  while($showCategory=$getProjectCategory->fetch_assoc()){ 

  ?> 

                <a href="<?php echo $showCategory['id']; ?>" class="tag-cloud-link"><?php echo $showCategory['categoryName']; ?></a>
        
        <?php  }   }   ?>

              </div>
            </div>

         
          </div>

        </div>
      </div>
    </section> <!-- .section -->
    
    



    <?php include "inc/footerAll.php" ;?>