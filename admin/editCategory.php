<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update project Category</h2>

      <?php
      
      if (!isset($_GET['editCategoryId']) && isset($_GET['editCategoryId'])==NULL ) {
                    
        echo "<script> window.location='categoryList.php' </script>";
     }else{

        $editcatId=$_GET['editCategoryId'];


              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['update'])  ) {
           
        $adminDataSending=$category->updateProjectCategory($_POST,$editcatId);
 
        if ($adminDataSending) {
           
             return $adminDataSending;
        }
 
 }
 

}
      
      ?>

        <div class="block sloginblock">               
         <form action="" method="post">
            <table class="form">

            <?php 
            
            
        $get_admin=$projectCategory->getDefinateCategory($editcatId);

        if($get_admin){ 

        while ($result=$get_admin->fetch_assoc()) {


            ?>
				 <tr>
                    <td>
                        <label>Project Category</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['categoryName']; ?>"  name="category" class="medium" />
                    </td>
                </tr>
				
                <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea name="description" class="tinymce">
                        <?php echo $result['categoryDescription'] ; ?>
                        </textarea>
                    </td>
                </tr>
				

				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="update" Value="update" />
                    </td>
                </tr>

<?php } }  ?>

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