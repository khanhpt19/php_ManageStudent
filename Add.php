<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$ma = $_POST["ma"];
		$hoten = $_POST["hoten"];
		$cmt = $_POST["cmt"];
		$ngaysinh = $_POST["ngaysinh"];		
		$gioitinh = $_POST["gioitinh"];		
		$diem1 = $_POST["diem1"];
		$diem2 = $_POST["diem2"];
		$diem3 = $_POST["diem3"];
		$result = mysqli_query($conn,"insert into tblsinhvien values('$ma', '$hoten','$cmt','$ngaysinh', '$gioitinh','$diem1', '$diem2', '$diem3', '0')");
		$query = mysqli_query($conn, "insert into tbllogin values ('$ma', '$cmt', 'sinhvien')");
		header("location:ListStudent.php");
	}
?>
<!DOCTYPE html>
<html>
	<style type="text/css">
	.colbox{
		margin-left: 0px;
		margin-right: 0px;
	}
	</style>
	<head>
		<meta charset="utf-8">
	<title>Add Student</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="row">
		
			<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
				<legen>ADD FORM</legen>
				<form method='POST' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Ma Thi Sinh</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="ma" class="form-control"><br>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Ho Ten</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="hoten" class="form-control"><br>
						</div>
					</div>
				</div>
			
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">CMT</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="cmt" class="form-control"><br>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Ngay Sinh</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="ngaysinh" class="form-control"><br>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Gioi Tinh</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="gioitinh" class="form-control"><br>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Diem Mon 1</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="diem1" class="form-control"><br>
						</div>
					</div>
				</div>

			<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Diem Mon 2</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="diem2" class="form-control"><br>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label class="control-label">Diem Mon 3</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input type="text" name="diem3" class="form-control"><br>
						</div>
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left ">
					<input type="submit" value="Add" class="btn btn-info" role="button">
					<a href="ListStudent.php" type="button" value="Reset" class="btn btn-danger">Cancel</a>
				</div>
				</div>
				</form>
					</div>
				</div>
			</div>
		</div> 
	</body>
</html>