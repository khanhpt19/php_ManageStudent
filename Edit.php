<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';

	$sql = "SELECT * FROM tblsinhvien WHERE (ma='{$_GET['id']}')";
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) {  
		$tblsinhvien = mysqli_fetch_assoc ($result); 
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$ma = $_POST["ma"];
		$hoten = $_POST["hoten"];
		$cmt = $_POST["cmt"];
		$ngaysinh = $_POST["ngaysinh"];		
		$gioitinh = $_POST["gioitinh"];		
		$diem1 = $_POST["diem1"];
		$diem2 = $_POST["diem2"];
		$diem3 = $_POST["diem3"];
		$nguyenvong = $tblsinhvien["nguyenvong"];
		
		mysqli_query($conn,"UPDATE tblsinhvien SET ma='$ma', hoten='$hoten',cmt='$cmt',ngaysinh ='$ngaysinh', gioitinh = '$gioitinh', diem1='$diem1' ,diem2='$diem2', diem3='$diem3',nguyenvong='$nguyenvong' WHERE ma='{$_GET['id']}'");
		$conn->close();
		header("location:ListStudent.php");
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
		<title>Edit Student</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
					<legen>EDIT FORM</legen>
					
					<form method='POST' action="edit.php?id=<?php echo $_GET['id'] ?>">
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ma Thi Sinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									
									<input type="text" name ="ma" class="form-control" value="<?php echo $_GET['id']; ?>" ><br>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ho Ten</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="hoten" class="form-control" value="<?php echo $tblsinhvien["hoten"]; ?>"><br>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">CMT</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="cmt" class="form-control" value="<?php echo $tblsinhvien['cmt']?> "><br>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ngay Sinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="ngaysinh" class="form-control" value="<?php echo $tblsinhvien['ngaysinh']?> "><br>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Gioi Tinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="gioitinh" class="form-control" value="<?php echo $tblsinhvien['gioitinh']?> "><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 1</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem1" class="form-control" value="<?php echo $tblsinhvien['diem1']?> "><br>
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 2</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem2" class="form-control" value="<?php echo $tblsinhvien['diem2']?> "><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 3</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem3" class="form-control" value="<?php echo $tblsinhvien['diem3']?> "><br>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left ">	
							<input type="submit" value="Edit" class="btn btn-info">
							<a href="ListStudent.php" type="button" value="Reset" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>
					
			</div>
		</div>
	</div> 
	</body>
</html>