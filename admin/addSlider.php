<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php'; ?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Project Slider</h2>

    <?php
        
        if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['submit'])  ) {
               
               $adminDataSending=$slider->addProjectSlider($_POST,$_FILES);
        
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
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <label>slider Link</label>
                    </td>
                    <td>
                        <input type="text" name="link" />
                    </td>
                </tr>

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Insert" />
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


