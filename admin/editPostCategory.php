<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>update post Category</h2>

      <?php
      
      if (!isset($_GET['editPostCategoryId']) && isset($_GET['editPostCategoryId'])==NULL ) {
                    
        echo "<script> window.location='postCategoryList.php' </script>";
     }else{

        $editcatId=$_GET['editPostCategoryId'];


              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['update'])  ) {
           
        $adminDataSending=$postCategory->updatePostCategory($_POST,$editcatId);
 
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
            
            
        $get_admin=$postCategory->getDefinatePostCategory($editcatId);

        if($get_admin){ 

        while ($result=$get_admin->fetch_assoc()) {


            ?>
				 <tr>
                    <td>
                        <label>Post Category</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['categoryName']; ?>"  name="category" class="medium" />
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


<?php include 'inc/footer.php';?>