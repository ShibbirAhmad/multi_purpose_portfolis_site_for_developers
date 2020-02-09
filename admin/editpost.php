<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update  Post</h2>

             <?php 
               
               if(!isset($_GET['editPostId']) || $_GET['editPostId']==NULL ){
            
                 echo  "<script> window.location='postList.php' </script>";
               } else{
        
                  $id=$_GET['editPostId'];
        
        
        
                  if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
                 
                         $updating= $post->updatePost($_POST,$_FILES,$id);
                        
                         if( $updating){
        
                            return  $updating;
                         }
                     }
        
        
               }
        
             
                   ?>

        
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
            <?php  
                   
               
          
                   $getproduct=$post->getDefinatePost($id);
               if($getproduct) {
                   while($show=$getproduct->fetch_assoc()){
               
   
            ?>
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $show['postTitle']; ?>" class="medium" />
                    </td>
                </tr>	
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="description" class="tinymce">
                           <?php echo $show['postDescription']; ?>
                        </textarea>

                    </td>
                </tr>
			
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                    <img src="<?php echo $show['postImage'] ; ?>" width="100px" height="200px" /> <br/>
                        <input name="image" type="file" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" name="tags" value="<?php echo $show['postTags']; ?>" class="medium" />
                    </td>
                </tr> 
             
                <tr>
                    <td>
                        <label>Post Author</label>
                    </td>
                    <td>
                        <input type="text" name="author"  value="<?php echo $show['postAuthor']; ?>" class="medium" />
                    </td>
                </tr>

            	<tr>
                    <td>
                        <label>PublisherId</label>
                    </td>
                    <td>
                        <input type="text" name="publisherId"  value="<?php echo $show['publisherId']; ?>" class="medium" />
                    </td>
                </tr>
             
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="update" />
                    </td>
                </tr>
            </table>
                   <?php }} ?>

            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


