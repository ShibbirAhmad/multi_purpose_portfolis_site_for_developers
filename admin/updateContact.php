<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Contact Information</h2>

      <?php
      
              
    if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['update'])  ) {
           
        $adminDataSending=$updateContact->updateContact($_POST);
 
        if ($adminDataSending) {
           
             return $adminDataSending;
        }
 
 }
 
     
      
      ?>

        <div class="block sloginblock">               
         <form action="" method="post">
            <table class="form">	
           			
       <?php 
       
       $get_admin=$updateContact->getUpdateContact();

         if($get_admin){ 

        while ($result=$get_admin->fetch_assoc()) {
       ?>
                <tr>
                    <td>
                        <label>Address</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['address'];?>"  name="address" class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Contact Number</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['number'];?>" name="number" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email Address</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['email'];?>" name="email" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Website</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $result['website'];?>" name="website" class="medium" />
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