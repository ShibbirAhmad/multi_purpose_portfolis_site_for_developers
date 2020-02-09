<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';
    
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>update Project</h2>
        <div class="block">  

          <?php 
               
       if(!isset($_GET['editProjectId']) || $_GET['editProjectId']==NULL ){
    
         echo  "<script> window.location='projectList.php' </script>";
       } else{

          $editProjectId=$_GET['editProjectId'];



          if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
         
                 $updating= $project->updateProject($_POST,$_FILES,$editProjectId);
                
                 if( $updating){

                    return  $updating;
                 }
             }


       }

     
           ?>
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
         <?php  
                   
               
          
                $getProject=$project->getDefinateProject($editProjectId);
            if($getProject) {
                while($show=$getProject->fetch_assoc()){
            

         ?>
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $show['projectName'] ; ?>" 
                        name="name"  class="medium" />
                    </td>
                </tr>

				<tr>
                    <td>
                        <label>Category</label>
                    </td>
                    <td>
                        <select id="select" name="category">
                           
        <?php 
                                        
										$result=$projectCategory->getAllProjectCategory();
							              if($result){ 
										 while ($cat=$result->fetch_assoc()) {
															  
								
       ?>
                       <option 

<?php  
 
     if($show['projectCategoryId'] == $cat['id']){

?>
             selected="selected"
         <?php 
     }

       ?>

  value="<?php echo $cat['id'];?>" > <?php echo $cat['categoryName'];  ?>
                 
               </option>

    <?php }} ?>          
                               </select>
                    </td>
                </tr>
				
                
                
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea class="tinymce" name="description" >

                          <?php echo $show['projectDescription'] ; ?>
                          
                        </textarea>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Price</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $show['projectPrice'];?>" name="price" class="medium" />
                    </td>
                </tr>
            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <img src="<?php echo $show['projectImage'] ; ?>" width="100px" height="200px" /> <br/>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="update" />
                    </td>
                </tr>
            </table>

        <?php  } } ?>

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


