<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Slider List</h2>

<?php 

if (isset($_GET['deleteSliderId']) ) {
		
	    $delId=$_GET['deleteSliderId'];
		$delSlider=$slider->deleteSliderImage($delId);
		
		if ($delSlider) {

			return $delSlider;
		}
}

?>

        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th width="5%" >No.</th>
					<th width="20%" >Slider Title</th>
					<th width="55%" >Slider Image</th>
					<th width="20%" >Action</th>
				</tr>
			</thead>
			<tbody>

	<?php
                
				$get_admin=$slider->getAllProjectSlider();

                if($get_admin){ 

                      $i=0;

                while ($result=$get_admin->fetch_assoc()) {

                	$i++;

                 
    ?>
				<tr class="odd gradeX">
					<td><?php echo $i; ?></td>
					<td><?php echo $result['link'] ;?></td>
					<td><img src="<?php echo $result['projectImage']; ?>" height="100px" width="50px"/></td>				
				<td>
					<a href="editSlider.php?editSliderId=<?php echo $result['id'] ; ?>">Edit</a> || 
					<a onclick="return confirm('Are you sure to Delete!');" href="?deleteSliderId=<?php echo $result['id'] ; ?>" >Delete</a> 
				</td>
					</tr>	
					
					<?php  }  }  ?>
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
