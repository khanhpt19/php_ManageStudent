<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';

	$sql = "SELECT * FROM tblsinhvien WHERE (ma='{$_GET['id']}')";
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) {  
		$tblsinhvien = mysqli_fetch_assoc ($result); 
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){

		$ma = $tblsinhvien["ma"];
		$hoten = $tblsinhvien["hoten"];
		$cmt = $tblsinhvien["cmt"];
		$ngaysinh = $tblsinhvien["ngaysinh"];		
		$gioitinh = $tblsinhvien["gioitinh"];		
		$diem1 = $tblsinhvien["diem1"];
		$diem2 = $tblsinhvien["diem2"];
		$diem3 = $tblsinhvien["diem3"];
		$nguyenvong = $_POST["nguyenvong"];

		mysqli_query($conn,"UPDATE tblsinhvien SET ma='$ma', hoten='$hoten',cmt='$cmt',ngaysinh ='$ngaysinh', gioitinh = '$gioitinh', diem1='$diem1' ,diem2='$diem2', diem3='$diem3',nguyenvong='$nguyenvong' WHERE ma='{$_GET['id']}'");


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
		<title>Edit Student Infomation</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
					<legen>EDIT FORM</legen>
					<form method='POST' action="EditNV.php?id=<?php echo $_GET['id'] ?>">
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Nguyen Vong Dang Ki</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="nguyenvong" class="form-control" value="<?php echo $tblsinhvien['nguyenvong']?> " ><br>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left ">	
							<input type="submit" value="OK" class="btn btn-info">
							<a href="Student.php" type="button" value="Reset" class="btn btn-danger">Cancel</a>
							</div>
						</div>
					</form>
					
			</div>
		</div>
	</div> 
	</body>
</html>