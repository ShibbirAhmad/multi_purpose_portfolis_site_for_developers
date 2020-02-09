<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Project List</h2>

 <?php 

if (isset($_GET['deleteProjectId']) ) {
		
	    $delId=$_GET['deleteProjectId'];
		$delProject=$project->deleteProject($delId);
		
		if ($delProject) {

			return $delProject;
		}
}

?>

        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
				    <th width="10%" >Serial</th>
					<th width="15%" >project Title</th>
					<th width="10%" >Category</th>
					<th width="20%" >Description</th>
					<th width="10%" >price</th>
					<th width="20%" >Image</th>
					<th width="15%" >Action</th>
				</tr>
			</thead>
			<tbody>      
			
			    
	<?php
                
				$get_admin=$project->getAllProject();

                if($get_admin){ 

                      $i=0;

                while ($result=$get_admin->fetch_assoc()) {

                	$i++;

                 
    ?>

				<tr class="odd gradeX">
  
					<td><?php echo $i; ?></td>
					<td><?php echo $result ['projectName'] ;?></td>
					<td><?php echo $result ['projectCategoryId'] ;?></td>
					<td><?php echo $helper->textshorten( $result ['projectDescription'],60 );?></td>
					<td><?php echo $result ['projectPrice'] ;?></td>
					<td><img src="<?php echo $result['projectImage']; ?>" height="100px" width="50px"/> </td>
					<td><a href="editProject.php?editProjectId=<?php echo $result['projectId'] ; ?>">Edit</a> ||
					 <a onclick="return confirm('Are sure to Delete');"  
					  
					  href="?deleteProjectId=<?php echo $result['projectId'] ; ?>">Delete</a></td>

			<?php  } } ?>

				</tr>
				
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
