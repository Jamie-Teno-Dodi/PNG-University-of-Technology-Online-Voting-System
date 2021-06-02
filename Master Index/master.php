
<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: ../admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: ../home.php');
    }
?>
<?php include '../includes/header.php'; ?>
<html>

<body class="hold-transition login-page" >
<?php include '../index.php'; ?>


	
<?php include '../includes/scripts.php' ?>
</body>
</html>