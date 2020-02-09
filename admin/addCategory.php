<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Category </h2>

      <?php
      
              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['save'])  ) {
           
        $adminDataSending=$projectCategory->addProjectCategory($_POST);
 
        if ($adminDataSending) {
           
             return $adminDataSending;
        }
 
 }
 
     
      
      ?>

        <div class="block sloginblock">               
         <form action="" method="post">
            <table class="form">	   
				 <tr>
                    <td>
                        <label>Project Category</label>
                    </td>
                    <td>
                        <input type="text" placeholder="add new category" name="category" class="medium" />
                    </td>
                </tr>

             	 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Category Description</label>
                    </td>
                    <td>
                        <textarea name="description" class="tinymce"></textarea>
                    </td>
                </tr>	

				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="save" Value="save" />
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