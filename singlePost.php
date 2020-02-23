<?php  include "inc/headerAll.php" ; ?>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">

      <?php 
      
      // this code for searching reasult

      if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['search']) ){

            $searchData = $_POST['search']; 

            $blogData=$post->getSearchPost($searchData);
            if($blogData){
              while($blog=$blogData->fetch_assoc()){ 
      ?>

                <h2 class="mb-3"><?php echo $blog['postTitle'] ; ?></h2>
        
                <img src="admin/<?php echo $blog['postImage'] ; ?>" width="800px" height="533px" alt="postImage" class="img-fluid">
  
              <p><?php echo $blog['postDescription']  ; ?></p>
             
            
            <?php  } } } ?>
      
  
      
      <?php 
      
      if(!isset($_GET['postId']) &&  $_GET['postId']==NULL) {
             
        echo "<script> window.location='blog.php' </script>";
      }else {

    $postId=$_GET['postId'];
          
       
    //this id are catching form inner page
           
        if(isset($_GET['IdOfPost'])){
            $postId=$_GET['IdOfPost'];
        }
        
              $blogData=$post->getSinglePost($postId);
              if($blogData){
                while($blog=$blogData->fetch_assoc()){ 

      ?>

            <h2 class="mb-3"><?php echo $blog['postTitle'] ; ?></h2>
        
              <img src="admin/<?php echo $blog['postImage'] ; ?>" width="800px" height="533px" alt="postImage" class="img-fluid">

            <p><?php echo $blog['postDescription']  ; ?></p>
           
          
          <?php  } } } ?>


            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">

      <?php 
                $getPostCategory=$postCategory->getAllPostCategory();
                if($getPostCategory){
                  while($category=$getPostCategory->fetch_assoc()){ 

  ?>

                <a href="?categoryId=<?php echo $category['id'] ; ?>" class="tag-cloud-link"><?php echo $category['categoryName'] ; ?></a>
               
       <?php  }   }  ?>

              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>George Washington</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
              </div>
            </div>


            <div class="pt-5 mt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">





                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>




                <li class="comment">
                  

                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>




                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta">October 03, 2018 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta">October 03, 2018 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta">October 03, 2018 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">October 03, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

              </ul>
              <!-- END comment-list -->
              





              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form class="bg-primary" action="#" class="p-5 bg-light" method="post" >
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>

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
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
<?php 
                $getPostCategory=$postCategory->getAllPostCategory();
                if($getPostCategory){
                  while($showCategory=$getPostCategory->fetch_assoc()){ 

  ?>

                <li><a href="?categoryId=<?php echo $showCategory['id']; ?>"><?php echo $showCategory['categoryName']; ?><span>(12)</span></a></li>

<?php }  } ?>                    
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">

              <h3 class="heading-sidebar">Recent Blog</h3>
      
       <?php 
                $getBlogData=$post->getRangeLimitPost();
                if($getBlogData){
                  while($blog=$getBlogData->fetch_assoc()){ 

        ?>  

               <div class="block-21 mb-4 d-flex">
               <a class="blog-img mr-4" style="background-image: url(admin/<?php echo $blog['postImage']; ?>);"></a>
                <div class="text">
                  <h3 class="heading"><a href="?postId=<?php echo $blog['postId']; ?>"><?php echo $blog['postTitle']; ?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $helper->DateFormate($blog['date']) ; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span><?php echo $blog['postAuthor'] ?></a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>

             <?php   }  } ?>

            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">


        <?php 
                        $getPostCategory=$postCategory->getAllPostCategory();
                        if($getPostCategory){
                          while($showCategory=$getPostCategory->fetch_assoc()){ 

          ?>
            

                <a href="<?php echo $showCategory['id']; ?>" class="tag-cloud-link"><?php echo $showCategory['categoryName']; ?></a>
        
        <?php  }   }   ?>

              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->
    
    



    <?php include "inc/footerAll.php" ;?>