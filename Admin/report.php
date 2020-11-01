<?php require_once('header.php'); 
if (!isset($_SESSION['admin_username'])){
  header("location:index.php");
  exit();
}
?>
<?php 	
				

//deleting a record
if(isset($_POST['delete'])){
 	$vin=mysqli_real_escape_string($conn,$_POST['vin']);
  	$q1=mysqli_query($conn,"SELECT * FROM reports WHERE vin='$vin'");
  	while($record=mysqli_fetch_assoc($q1)){
  		$f=unlink('../'.$record['front']);
  		$b=unlink('../'.$record['back']);
  		$r=unlink('../'.$record['right']);
  		$l=unlink('../'.$record['left']);
  		$d=unlink('../'.$record['driver']);
  		$p=unlink('../'.$record['passenger']);
  		$e=unlink('../'.$record['engine']);
  		$t=unlink('../'.$record['tyre']);
  		$v=unlink('../'.$record['vinplate']);
  		$q2=mysqli_query($conn,"DELETE FROM reports WHERE vin='$vin'");
  		$q3=mysqli_query($conn,"SELECT * FROM damages WHERE vin='$vin'");
  		while ($damage=mysqli_fetch_all($q3,MYSQLI_ASSOC)) {
  			unlink('../'.$damage['image']);
  		}
  		$q4=mysqli_query($conn,"DELETE FROM damages WHERE vin='$vin'");
  		$q5=mysqli_query($conn,"DELETE FROM checklist WHERE vin='$vin'");
  		header("location:report.php");
  	}
  }

?>
<div class="container mt-4">	
	<h2>Vehicle Inspection Reports</h2>	
	<div class="table-responsive">		
		<table id="dataTable" class="table table-striped">
			<div id="alert"></div>
			<thead class="bg-primary text-white">
				<tr>
					<th>Vin</th> 
			 		<th>Model</th>
			 		<th>Color</th>
			 		<th>Location</th>
			 		<th>Mileage</th>
			 		<th>Options</th>
			 		<th>Valuation</th>
			 		<th>Report_By</th>
			 		<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$Query = "SELECT * FROM reports ORDER BY id DESC";
				$result = mysqli_query($conn, $Query) or die("database error:". mysqli_error($conn));
				while( $report = mysqli_fetch_assoc($result) ) {
					$id=$report['id'];
				?>
				   <tr>
				    <td><?php echo $report['vin']; ?></td>
		 			<td><?php echo $report['model']; ?></td>
		 			<td><?php echo $report['color']; ?></td>
		 			<td><?php echo $report['location']; ?></td>
		 			<td><?php echo $report['mileage']; ?></td>
		 			<td contenteditable="true" data-old_value="<?php echo $report['options'] ?>" onBlur="saveInlineEdit(this,'options','<?php echo $id; ?>','reports')" onClick="highlightEdit(this);"><?php echo $report['options'] ?? ''; ?></td>
		 			<td contenteditable="true" data-old_value="<?php echo $report['valuation'] ?>" onBlur="saveInlineEdit(this,'valuation','<?php echo $id; ?>','reports')" onClick="highlightEdit(this);"><?php echo $report['valuation'] ?? ''; ?></td>
		 			<td><?php echo $report['report_by']; ?></td> 
		 			<td>
		 			    <form action="report.php" method="post">
		 			        <input type="hidden" value="<?php echo $report['vin'];?>" name="vin"/>
		 			        <button type="submit" name="delete" class="btn btn-warning"><span class="fa fa-trash"> Delete Report</span></button>
		 			    </form>
		 				<a href="details.php?action=view&vin=<?php echo $report['vin']; ?>" class="btn btn-success"><span class="fa fa-eye"> View Report</span></a>
		 			</td> 
				   </tr>
				<?php } ?>
			</tbody>
		</table>
			
	</div>
</div>
<?php 	require_once 'footer.php'; ?>