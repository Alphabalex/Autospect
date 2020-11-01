<?php
require_once('header.php');
if (isset($_POST['login'])) {
    if (!empty($_POST['pword'])) {
        $pword = $_POST['pword'];
        $q2 = "SELECT * FROM staffs WHERE Password = '$pword'";
        $query = mysqli_query($conn,$q2);
        while($result=mysqli_fetch_assoc($query)){
        $password= $result['Password'];
        $user=     $result['Full_Name'];
        }
        if ($pword===$password) {
            $_SESSION['loggedIn']= true;
            $_SESSION['user']=$user;
            header('location:view.php');
        } else {
            $message = 'Oops! Wrong Credential!';
        }
    }
}
 ?>
       <div class="form">
            <form method="POST" class="login100-form validate-form">
    	                  		 <h2 class="msg"><i><?php if (isset($message)) {
    	                echo $message;
    	                    }
    	       		 ?></i></h2>
                <span class="login100-form-title p-b-34 p-t-27">
                    <i>Enter Your Access Code</i>
                </span><br><br>
                 <div class="validate-input" data-validate = "Access_Code">
                    <input type="password" name="pword" id="input" placeholder="Access_Code" class="field">
                    <span></span>
                </div><br><br>
                  <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg">
            </form>
        </div>
 <?php 	require_once 'footer.php'; ?>