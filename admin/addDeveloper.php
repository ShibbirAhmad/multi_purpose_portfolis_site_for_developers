<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Web Builder Member</h2>

          <?php
      
              
      if ($_SERVER['REQUEST_METHOD']=="POST" &&  isset($_POST['submit'])  ) {
             
          $developerDataSending=$developer->developerCreate($_POST,$_FILES);
   
          if ($developerDataSending) {
             
               return $developerDataSending;
            }
   
          }
   
       
        
        ?>


        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" name="name" placeholder="Enter name..." class="medium" />
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
                        <label>Designation</label>
                    </td>
                    <td>
                        <input type="text" name="designation" placeholder="Enter Desigantion..." class="medium" />
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
                        <label>email</label>
                    </td>
                    <td>
                        <input type="text" name="email" placeholder="your valid email address.." class="medium" />
                    </td>
                </tr> 
             
                <tr>
                    <td>
                        <label>Facebook Link</label>
                    </td>
                    <td>
                        <input type="text" name="facebook" placeholder="Enter facebook link.." class="medium" />
                    </td>
                </tr>

            	<tr>
                    <td>
                        <label>LInkedIn Link</label>
                    </td>
                    <td>
                        <input type="text" name="linkedin" placeholder="Enter linkedin Link.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Instragram</label>
                    </td>
                    <td>
                        <input type="text" name="instragram" placeholder="Enter instragram link.." class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Skill Position N0.</label>
                    </td>
                    <td>
                        <input type="text" name="skillPosition" placeholder="Enter SkillPositioin.." class="medium" />
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


