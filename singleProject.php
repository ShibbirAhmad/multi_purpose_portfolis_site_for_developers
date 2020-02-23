<?php  include "inc/headerAll.php" ; ?>



    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">

          <?php 
  
  //get category result data 

        if(isset($_GET['categoryId']) && $_GET['categoryId'] != NULL){

            $sendCat=$_GET['categoryId'];

            $getCatData=$project->getCategoryProject($sendCat);

           if($getCatData){

            while($project=$getCatData->fetch_assoc()){  
  
  ?>

<h2 class="mb-3"><?php echo $project['projectName'] ; ?></h2>
        
        <img src="admin/<?php echo $project['projectImage'] ; ?>" width="800px" height="Auto" alt="postImage" class="img-fluid">

      <p><?php echo $project['projectDescription']  ; ?></p>
     
    
    <?php  } } }else {
        
           echo "<h2> Search Data aren't available </h2>";          

    } ?> 


          <?php 
      
      // this code for searching reasult

      if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['search']) ){

            $searchData = $_POST['search']; 

            $projectData=$project->getSearchProject($searchData);
            if($projectData){
              while($project=$projectData->fetch_assoc()){ 
      ?>


<h2 class="mb-3"><?php echo $project['projectName'] ; ?></h2>
        
        <img src="admin/<?php echo $project['projectImage'] ; ?>" width="800px" height="Auto" alt="postImage" class="img-fluid">

      <p><?php echo $project['projectDescription']  ; ?></p>
     
    
    <?php  } } } ?>         
      






          <?php  
          
          if(isset($_GET['idOfProject'])){
            $projectId=$_GET['idOfProject'];
        
            
        $projectData=$project->getSingleProject($projectId);
        if($projectData){
          while($project=$projectData->fetch_assoc()){   ?>

           <h2 class="mb-3"><?php echo $project['projectName'] ; ?></h2>
        
              <img src="admin/<?php echo $project['projectImage'] ; ?>" width="800px" height="Auto" alt="postImage" class="img-fluid">

            <p><?php echo $project['projectDescription']  ; ?></p>
           
          
          <?php  } } } ?>


      <?php 

               
            if(!isset($_GET['projectId']) &&  $_GET['projectId']==NULL) {
                    
                echo "<script> window.location='project.php' </script>";
            }else {

                   $projectId=$_GET['projectId'];
          


              $projectData=$project->getSingleProject($projectId);
              if($projectData){
                while($project=$projectData->fetch_assoc()){ 

      ?>

            <h2 class="mb-3"><?php echo $project['projectName'] ; ?></h2>
        
              <img src="admin/<?php echo $project['projectImage'] ; ?>" width="800px" height="Auto" alt="postImage" class="img-fluid">

            <p><?php echo $project['projectDescription']  ; ?></p>
           
          
          <?php  } } } ?>


          >
            

          </div> <!-- .col-md-8 -->









          <div class="col-lg-4 sidebar ftco-animate">
          

          <div class="sidebar-box">
              <form action="#" method="post" class="search-form">
                <div class="form-group">
                  <span style="cursor:pointer" class="icon icon-search"></span>
                  <input type="text" class="form-control" name="search" placeholder="Type a keyword and hit enter">
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
                  <h3 class="heading"><a href="?idOfProject=<?php echo $project['projectId']; ?>"><?php echo $project['projectName']; ?></a></h3>
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