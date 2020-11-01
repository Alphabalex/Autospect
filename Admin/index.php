<?php
require_once('header.php');
if (isset($_POST['login'])) {
    if (!empty($_POST['username']) && !empty($_POST['pword']) ) {
        $username = $_POST['username'];
        $pword = $_POST['pword'];
        $q2 = "SELECT * FROM admin WHERE Username = '$username'";
        $query = mysqli_query($conn,$q2);
        $result = mysqli_fetch_assoc($query);
        $password = $result['Password'];
        if ($pword===$password) {
        	$_SESSION['admin_username']=$username;
            header('location:report.php');
        } else {
            $message = 'Oops! Wrong Credential!';
        }
    }
}

 ?>

			<div class="form">
				<form method="POST" class="login100-form validate-form">
					<h2 class="msg"><?php if (isset($message)) {
							echo $message;
						} ?></h2>

					<span class="login100-form-title p-b-34 p-t-27">
						<i>Enter Your Login Details</i>
					</span><br><br>

				 	<div class="wrap-input100 validate-input" data-validate = "Enter Your username">
						<input class="input100 field" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div><br>
					<div class="wrap-input100 validate-input" data-validate = "Enter Your password">
						<input class="input100 field" type="password" name="pword" placeholder="Password">
						<span class="focus-input100"></span>
					</div><br>
					<input type="submit" name="login" value="Login" class="btn btn-primary btn-lg">
				</form>
			</div>
<?php 	require_once('footer.php'); ?>