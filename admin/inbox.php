﻿<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">  

				<?php 
				
				if (isset($_GET['approveSubscriberId'])) {
					
						$approveId=$_GET['approveSubscriberId'];
						
						$approveSubscriber=$subscriber->approve($approveId);
						
						if ($approveSubscriber) {
							
							return $approveSubscriber;
						}
				}
				
				?>      
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th width="10%" >Serial No.</th>
							<th width="15%" > Name</th>
							<th width="15%" >profession</th>
							<th width="20%" >email</th>
                            <th width="30%" >reviews</th>
							<th width="10%" >Action</th>
						</tr>
					</thead>
					<tbody>


                    
	<?php
                
				$get_subscriber=$subscriber->getUnapprovedSubscriber();

                if($get_subscriber){ 

                      $i=0;

                while ($result=$get_subscriber->fetch_assoc()) {

                	$i++;

                 
    ?>
    
        <tr class="odd gradeX">
            <td> <?php  echo $i; ?> </td>
            <td> <?php echo $result['name']; ?> </td>
            <td> <?php echo $result['profession']; ?> </td>
            <td> <?php echo $result['email']; ?> </td>
            <td> <?php echo $helper->textshorten($result['review'],120) ; ?> </td>
            <td> <a   onclick="return confirm('Are you sure to Approve!');" href="?approveSubscriberId=<?php echo $result['subscriberId']; ?>">Approve</a></td>
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

