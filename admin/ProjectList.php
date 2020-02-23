<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Project List</h2>

 <?php 

if (isset($_GET['deleteProjectId']) ) {
		  
	    $delId=$_GET['deleteProjectId'];
		$delProject=$Project->deleteProject($delId);
		
		if ($delProject) {

			return  $delProject;
		}
}

?>

        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
				    <th width="10%" >Serial</th>
					<th width="15%" >Project Name</th>
					<th width="30%" >Description</th>
					<th width="20%" >Image</th>
					<th width="10%" >Author</th>
					<th width="15%" >Action</th>
				</tr>
			</thead>
			<tbody>       
			
	<?php
                
				$getProject=$project->getAllProject();

                if($getProject){ 

                      $i=0;

                while ($result=$getProject->fetch_assoc()) {

                	$i++;

                 
    ?>

				<tr class="odd gradeX">
            
	
					<td><?php echo $i; ?></td>
					<td><?php echo $result['projectName'] ;?></td>
					<td><?php echo $helper->textshorten( $result ['projectDescription'],120 );?></td>
					<td><img src="<?php echo $result['projectImage']; ?>" height="150px" width="100px"/> </td>
                    <td> <?php echo $result['projectAuthor'];  ?></td>
					<td><a href="editProject.php?editProjectId=<?php echo $result['projectId'] ; ?>">Edit</a> ||
					 <a onclick="return confirm('Are sure to Delete');"  
					  
					  href="?deleteProjectId=<?php echo $result['projectId'] ; ?>">Delete</a></td>

		

				</tr>
					<?php  } } ?>
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
