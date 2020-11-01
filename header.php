<?php
ob_start();
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>AutoSpect Report App</title>
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
      <img src="Admin/img/logo.jpg" width="100" height="100" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="fa fa-home"> Home</i></a></li>
        <?php if (isset($_SESSION['loggedIn'])): ?>
        <li class="nav-item"><a href="view.php" class="nav-link"><i class="fa fa-file-text"> Reports</i></a></li>
        <li class="nav-item"><a href="report.php" class="nav-link"><i class="fa fa-send"> Pre-Purchase Inspection</i></a></li>
        <li class="nav-item"><a href="corporate-report.php" class="nav-link"><i class="fa fa-send"> Corporate Inspection</i></a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="fa fa-power-off"> Logout</i></a></li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>