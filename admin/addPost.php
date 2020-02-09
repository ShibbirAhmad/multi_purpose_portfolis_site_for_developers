<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Project</h2>

          <?php
      
              
      if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['submit'])  ) {
             
          $adminDataSending=$post->addPost($_POST,$_FILES);
   
          if ($adminDataSending) {
             
               return $adminDataSending;
            }
   
          }
   
       
        
        ?>


        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" name="title" placeholder="Enter post title..." class="medium" />
                    </td>
                </tr>	
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="description" class="tinymce"></textarea>
                    </td>
                </tr>
			
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input name="image" type="file" />
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label>Tags</label>
                    </td>
                    <td>
                        <input type="text" name="tags" placeholder="Enter related tags..." class="medium" />
                    </td>
                </tr> 
             
                <tr>
                    <td>
                        <label>Post Author</label>
                    </td>
                    <td>
                        <input type="text" name="author" placeholder="Enter post Author..." class="medium" />
                    </td>
                </tr>

            	<tr>
                    <td>
                        <label>PublisherId</label>
                    </td>
                    <td>
                        <input type="text" name="publisherId" placeholder="Enter publisherId..." class="medium" />
                    </td>
                </tr>
             
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" />
                    </td>
                </tr>
            </table>
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


