<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Post List</h2>

 <?php 

if (isset($_GET['deletePostId']) ) {
		
	    $delId=$_GET['deletePostId'];
		$delPost=$post->deletePost($delId);
		
		if ($delPost) {

			return  $delPost;
		}
}

?>

        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
				    <th width="10%" >Serial</th>
					<th width="15%" >post Title</th>
					<th width="20%" >Description</th>
					<th width="20%" >Image</th>
					<th width="20%" >Author</th>
					<th width="15%" >Action</th>
				</tr>
			</thead>
			<tbody>
			
	<?php
                
				$get_admin=$post->getAllPost();

                if($get_admin){ 

                      $i=0;

                while ($result=$get_admin->fetch_assoc()) {

                	$i++;

                 
    ?>

				<tr class="odd gradeX">
            
	
					<td><?php echo $i; ?></td>
					<td><?php echo $result ['postTitle'] ;?></td>
					<td><?php echo $helper->textshorten( $result ['postDescription'],80 );?></td>
					<td><img src="<?php echo $result['postImage']; ?>" height="100px" width="50px"/> </td>
                    <td> <?php echo $result['postAuthor'];  ?></td>
					<td><a href="editPost.php?editPostId=<?php echo $result['postId'] ; ?>">Edit</a> ||
					 <a onclick="return confirm('Are sure to Delete');"  
					  
					  href="?deletePostId=<?php echo $result['postId'] ; ?>">Delete</a></td>

		

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
