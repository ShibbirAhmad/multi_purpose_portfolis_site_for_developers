<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Edit Project  Slider</h2>

        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
            
            <?php 
            
                 if (!isset($_GET['editSliderId']) && isset($_GET['editSliderId'])==NULL ) {
                    
                    echo "<script> window.location='sliderList.php' </script>";
                 }else{

                    $editSliderId=$_GET['editSliderId'];


            
                if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['update'])  ) {
                    
                    $adminDataSending=$slider->updateProjectSlider($_POST,$_FILES,$editSliderId);
            
                    if ($adminDataSending) {
                    
                        return $adminDataSending;
                    }
            
                       }

                     
                    $getSlider=$slider->getDefinateSlider($editSliderId);
                    
                if ($getSlider) {
                         
                  while ($value=$getSlider->fetch_assoc()) {
                    
            ?>


                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                        <img src="<?php echo $value['projectImage'] ; ?> "  width="100px" height="300px"  />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>slider Link</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $value['link'];?>" name="link" />
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="update" Value="update" />
                    </td>
                </tr>
            </table>

            </form>
                   
        
                        <?php   }  }  } ?>
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


