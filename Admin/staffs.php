<?php require_once('header.php');
if (!isset($_SESSION['admin_username'])){
  header("location:index.php");
  exit();
}

?>
<?php
if(isset($_POST['Save'])){
	if (!empty($_POST['user']) && !empty($_POST['pword'])){
		$user= $_POST['user'];
		$pword= $_POST['pword'];
		$q= "INSERT INTO staffs(Full_Name,Password) VALUES('$user','$pword')";
		$query= mysqli_query($conn,$q);
		if ($query) {
			$message= "Account created successfully!";
		} else {
			$message= "Account not created successfully!";
		}
	}
}

if(isset($_POST['Update'])) {
	if (!empty($_POST['user']) && !empty($_POST['pword'])){
		$id= $_POST['id'];
		$user= $_POST['user'];
		$pword= $_POST['pword'];
		$q1= "UPDATE staffs SET Full_Name='$user', Password='$pword' WHERE id ='$id'";
			$query= mysqli_query($conn,$q1);
			if ($query) {
				$message= "Update successful!";
		} else {
			$message= "Update Not successful!";
	    }
    }
}

if(isset($_POST['delete'])) {
    $id= $_POST['id'];
    $q2= "DELETE FROM staffs WHERE id= '$id'";
    $query= mysqli_query($conn,$q2);
    if ($query) {
    		$message= "Account deleted successfully!";
    }
}


if(isset($_POST['edit'])){
	if (!empty($_POST['id'])){
		$id= $_POST['id'];
		$q3= "SELECT * FROM staffs WHERE id = '$id'";
		$query= mysqli_query($conn,$q3);
		$result= mysqli_fetch_assoc($query);

    }
}
?>
 <div class="form">
	<form method="POST" class="login100-form validate-form">
		<h4 class="msg"><?php if (isset($message)) {
				echo $message;
			} ?></h4>

		<span class="login100-form-title p-b-34 p-t-27">
			<i class="fa fa-user-plus"> Register User</i>
		</span><br><br>
        <input type="hidden" name="id" value="<?php echo isset($result)? $result['id']:''; ?>">
	 	<div class="wrap-input100 validate-input" data-validate = "Enter username">
			<input class="input100 field" type="text" name="user" value="<?php echo isset($result)? $result['Full_Name']:''; ?>" placeholder="Username">
			<span class="focus-input100"></span>
		</div><br>
		<div class="wrap-input100 validate-input" data-validate = "Enter Access Code">
			<input class="input100 field" type="password" name="pword" value="<?php echo isset($result)? $result['Password']:''; ?>" placeholder="Access Code">
			<span class="focus-input100"></span>
		</div><br>
		<input type="submit" name="<?php echo isset($result)? 'Update':'Save'; ?>" value="<?php echo isset($result)? 'Update':'Save'; ?>" class="btn btn-primary btn-lg">
	</form>
</div>
<div class="container mt-4">	
	<h2>Users Accounts</h2>	
	<div class="table-responsive">		
		<table id="dataTable" class="table table-striped">
			<div id="alert"></div>
			<thead class="bg-primary text-white">
				<tr>
					<th>Username</th> 
			 		<th>Access Code</th>
			 		<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$Query = "SELECT * FROM staffs";
				$result = mysqli_query($conn, $Query) or die("database error:". mysqli_error($conn));
				while( $user = mysqli_fetch_assoc($result) ) {
					$uid=$user['id'];
				?>
				   <tr>
				    <td><?php echo $user['Full_Name']; ?></td>
		 			<td><?php echo $user['Password']; ?></td>
		 			<td>
		 			    <form method="post">
 					    <input type="hidden" name="id" value="<?php echo $uid; ?>">
					    <button type="submit" class="btn btn-warning"  name="edit"><span class="fa fa-edit"> Edit</span></button>
				        </form>
				        <form method="post">
 					    <input type="hidden" name="id" value="<?php echo $uid; ?>">
					    <button type="submit" name="delete" class="btn btn-danger text-white"><span class="fa fa-trash"> Delete</span></button>
				        </form>
		 			</td>
				   </tr>
				<?php } ?>
			</tbody>
		</table>
			
	</div>
</div>
<?php require_once('footer.php'); ?>