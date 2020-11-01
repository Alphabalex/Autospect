<?php require_once('header.php'); 
if (!isset($_SESSION['loggedIn'])){
  header("location:index.php");
  exit();
}else{
    $user=$_SESSION['user'];
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
			 		<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$Query = "SELECT * FROM reports WHERE report_by='{$user}' ORDER BY id DESC";
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
		 			<td>
		 				<form method="post" action="edit.php">
		 					<input type="hidden" name="vin" value="<?php echo $report['vin']; ?>">
		 					<input type="submit" name="edit" value="Edit Report" class="btn btn-warning">
		 				</form>
		 				<a href="details.php?action=view&vin=<?php echo $report['vin']; ?>" class="btn btn-success">View Report</a>
		 			</td> 
				   </tr>
				<?php } ?>
			</tbody>
		</table>
			
	</div>
</div>
<?php 	require_once 'footer.php'; ?>