<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';
	
	if(isset($_POST['btn_submit'])){
		$username = $_SESSION['ten'];
		$password = $_POST["newpassword"];

		mysqli_query($conn,"UPDATE tbllogin SET username='$username', password='$password', loai = 'sinhvien' WHERE username='$username'");
		$conn->close();
		header("location:Student.php");
	}
?>

<html>
	<style type="text/css">
	.colbox{
		margin-left: 0px;
		margin-right: 0px;
	}
	</style>
	<head>
		<meta charset="utf-8">
		<title>Change Password</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
					<legen>EDIT FORM</legen>
					<form method='POST' action="ChangePassword.php">
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Mat khau moi</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text"  placeholder="Nhap mat khau moi" required="" name="newpassword" />
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left ">	
							<input type="submit" value="Change" name="btn_submit"  class="btn btn-info">
							<a href="Student.php" type="button" value="Reset" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>
					
			</div>
		</div>
	</div> 
	</body>
</html>