<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Site Title and Description</h2>

      <?php
      
              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['update'])  ) {
           
        $adminDataSending=$title->titleSloganUPdate($_POST);
 
        if ($adminDataSending) {
           
             return $adminDataSending;
        }
 
 }
 
     
      
      ?>

        <div class="block sloginblock">               
         <form action="" method="post">
            <table class="form">	
           			
       <?php 
       
       $get_admin=$title->getAdminTitle();

         if($get_admin){ 

        while ($result=$get_admin->fetch_assoc()) {
       ?>
                <tr>
                    <td>
                        <label>Admin Title</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['title'];?>"  name="title" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Admin Description</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['description'];?>" name="description" class="medium" />
                    </td>
                </tr>
				
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="update" Value="Update" />
                    </td>
                </tr>
                 <?php }  } ?> 
            </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>