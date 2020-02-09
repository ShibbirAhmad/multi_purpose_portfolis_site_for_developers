<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update  Developer</h2>
       
          <?php 
               
               if(!isset($_GET['editDeveloperId']) || $_GET['editDeveloperId']==NULL ){
            
                 echo  "<script> window.location='developerList.php' </script>";
               } else{
        
                  $developerId=$_GET['editDeveloperId'];

                  if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['update']) ) {
              
                    $updatingData=$developer->developerUpdate($_POST,$_FILES,$developerId);
                  
                    if ($updatingData) {
                       
                           return $updatingData;
                    }
             }
    
               }
        
             
                   ?>

        
        <div class="block">   
                     
         <form action="" method="post" enctype="multipart/form-data">
            <?php  
                   
                   $getproduct=$developer->getDefinateDeveloper($developerId);
               if($getproduct) {
                   while($show=$getproduct->fetch_assoc()){
               
   
            ?>  
            
            <table class="form">
           
                        
               <tr>
                   <td>
                       <label>Name</label>
                   </td>
                   <td>
                       <input type="text" name="name" value="<?php echo $show['name'] ;?>" class="medium" />
                   </td>
               </tr>	
               <tr>
                   <td>
                       <label>Upload Image</label>
                   </td>
                   <td>
                       <input name="image" type="file" /> 
                       <img src="<?php echo $show['image'] ; ?>" width="110px" height="130px" /> 
                       
                   </td>
               </tr>

               <tr>
                   <td>
                       <label>Designation</label>
                   </td>
                   <td>
                       <input type="text" name="designation"  value="<?php echo $show['designation'] ;?>"  class="medium" />
                   </td>
               </tr>

                <tr>
                   <td style="vertical-align: top; padding-top: 9px;">
                       <label>Description</label>
                   </td>
                   <td>
                       <textarea name="description" class="tinymce">
                       
                            <?php echo $show['description'] ;?>

                       </textarea>
                   </td>
               </tr>
           
               
               
               <tr>
                   <td>
                       <label>email</label>
                   </td>
                   <td>
                       <input type="text" name="email"  value="<?php echo $show['email'] ;?>"  class="medium" />
                   </td>
               </tr> 
            
               <tr>
                   <td>
                       <label>Facebook Link</label>
                   </td>
                   <td>
                       <input type="text" name="facebook"  value="<?php echo $show['facebook'] ;?>"  class="medium" />
                   </td>
               </tr>

               <tr>
                   <td>
                       <label>LInkedIn Link</label>
                   </td>
                   <td>
                       <input type="text" name="linkedin"  value="<?php echo $show['linkedin'] ;?>"  class="medium" />
                   </td>
               </tr>
               <tr>
                   <td>
                       <label>Instragram</label>
                   </td>
                   <td>
                       <input type="text" name="instragram"  value="<?php echo $show['instragram'] ;?>"  class="medium" />
                   </td>
               </tr>
               <tr>
                   <td>
                       <label>Skill Position N0.</label>
                   </td>
                   <td>
                       <input type="text" name="skillPosition"  value="<?php echo $show['skillPosition'] ;?>"  class="medium" />
                   </td>
               </tr>
               <tr>
                   <td></td>
                   <td>
                       <input type="submit" name="update" Value="update" />
                   </td>
               </tr>
           </table>
                    <?php }} ?> 

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


