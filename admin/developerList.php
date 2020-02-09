<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Developer List</h2>

 <?php 

if (isset($_GET['deleteDeveloperId']) ) {
		
	    $delId=$_GET['deleteDeveloperId'];
		$delDeveloper=$developer->deleteDeveloper($delId);
		
		if ($delDeveloper) {

			return  $delDeveloper;
		}
}

?>

        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
				    <th width="10%" >Serial</th>
					<th width="15%" >Name</th>
                    <th width="10%" >Image</th>
					<th width="10%" >Designation</th>
                    <th width="20%" >Description</th>
					<th width="20%" >Email</th>
					<th width="15%" >Action</th>
				</tr>
			</thead>
			<tbody>
				
            
	<?php
                
				$get_developer=$developer->getAllDeveloper();

                if($get_developer){ 

                      $i=0; 

                while ($result=$get_developer->fetch_assoc()) {

                	$i++;

                 
    ?>
<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result ['name'] ;?></td>
                    <td><img src="<?php echo $result['image']; ?>" height="100px" width="60px"/> </td>
                    <td><?php echo $result ['designation'] ;?></td>
					<td><?php echo $helper->textshorten( $result ['description'],80 );?></td>
					
                    <td> <?php echo $result['email'];  ?></td>
					<td><a href="editDeveloper.php?editDeveloperId=<?php echo $result['developerId'] ; ?>">Edit</a> ||
					 <a onclick="return confirm('Are sure to Delete');"  
					  
					  href="?deleteDeveloperId=<?php echo $result['developerId'] ; ?>">Delete</a></td>

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
