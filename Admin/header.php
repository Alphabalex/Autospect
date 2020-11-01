<?php
ob_start();
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>AutoSpect Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/lab.css">
   <link rel="stylesheet" href="css/print.css" media="print">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="img/logo.jpg" width="100" height="100" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a href="index.php" class="nav-link"> Home <i class="sr-only fa fa-home">(current)</i></a></li>
        <?php if (isset($_SESSION['admin_username'])): ?>
        <li class="nav-item"><a href="staffs.php" class="nav-link"><i class="fa fa-user-plus"> Manage Users</i></a></li>
        <li class="nav-item"><a href="report.php" class="nav-link"><i class="fa fa-file-text"> View Reports</i></a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-power-off"> Logout</i></a></li>
      </ul>
      <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group mb-2">
          <label for="username" class="sr-only">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter New Username" name="username">
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="inputPassword2" class="sr-only">Password</label>
          <input type="password" class="form-control" id="inputPassword2" placeholder="Enter New Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="cre">Change Credentials</button>
      </form>
      <?php endif; ?>
      <?php 
        if (isset($_POST['cre']) && !empty($_POST['username']) && !empty($_POST['password'])) {
          $username=mysqli_real_escape_string($conn, $_POST['username']);
          $password=mysqli_real_escape_string($conn, $_POST['password']);
          $change=mysqli_query($conn,"UPDATE admin SET Username='$username', Password='$password'");
          if ($change) { ?>
            <script type="text/javascript">
              alert('Credentials changed successfully! You will be logged out...');
              window.location='logout.php';
            </script>
          <?php 
          }
        }

       ?>
    </div>
  </nav>