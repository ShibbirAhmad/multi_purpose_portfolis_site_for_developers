<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post Category List</h2>
                <div class="block">  

				<?php 
				
				if (isset($_GET['deletePostCategoryId'])) {
					
						$delId=$_GET['deletePostCategoryId'];
						
						$delCategory=$postCategory->deleteCategory($delId);
						
						if ($delCategory) {
							
							return $delCategory;
						}
				}
				
				?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th  >Serial No.</th>
							<th>Category Name</th>

							<th>Action</th>
						</tr>
					</thead>
					<tbody>


                    
	<?php
                
				$get_admin=$postCategory->getAllPostCategory();

                if($get_admin){ 

                      $i=0;

                while ($result=$get_admin->fetch_assoc()) {

                	$i++;

                 
    ?>
                 
						<tr class="odd gradeX">
							<td> <?php  echo $i; ?> </td>
							<td> <?php echo $result['categoryName']; ?> </td>
				
							<td><a href="editPostCategory.php?editPostCategoryId=<?php echo $result['id']; ?>">Edit</a> ||
							             <a   onclick="return confirm('Are you sure to Delete!');" href="?deletePostCategoryId=<?php echo $result['id']; ?>">Delete</a></td>
						</tr>
						


<?php  }  }   ?>

					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

