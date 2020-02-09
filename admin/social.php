<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Social Media</h2>
     <?php 
     
     if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
                    
                 $sendData=$social->updateSocial($_POST);
                 if($sendData){
                     
                    return $sendData;
                 }
     }
     
     ?>

        <div class="block">               
         <form action="" method="post" >
            <table class="form">					
            <tr>
                    <td>
                        <label>LinkedIn</label>
                    </td>
                    <td>
                        <input type="text" name="linkedin" placeholder="linkedin link.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Facebook</label>
                    </td>
                    <td>
                        <input type="text" name="facebook" placeholder="Facebook link.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Instragram</label>
                    </td>
                    <td>
                        <input type="text" name="instragram" placeholder="instragram link.." class="medium" />
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>Twitter</label>
                    </td>
                    <td>
                        <input type="text" name="twitter" placeholder="Twitter link.." class="medium" />
                    </td>
                </tr>
				
	
			
				
				 <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include 'inc/footer.php';?>