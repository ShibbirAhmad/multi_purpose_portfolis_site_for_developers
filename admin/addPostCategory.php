<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Post Category </h2>

      <?php
      
              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['save'])  ) {
           
        $adminDataSending=$postCategory->addPostCategory($_POST);
 
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
                        <label>Post Category</label>
                    </td>
                    <td>
                        <input type="text" placeholder="add new category" name="category" class="medium" />
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



<?php include 'inc/footer.php';?>