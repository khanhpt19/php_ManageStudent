<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';

	$sql = "SELECT * FROM tblsinhvien WHERE (ma='{$_GET['id']}')";
	$result = $conn->query($sql); 
	if ($result->num_rows > 0) {  
		$arr = mysqli_fetch_all ($result, MYSQLI_ASSOC); 
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		mysqli_query($conn,"DELETE FROM tblsinhvien WHERE ma='{$_GET['id']}'");
		$conn->close();
		header("location:ListStudent.php");
	}
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Delete Student</title>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
					<legen>DELETE FORM</legen>
					<?php 
							foreach ($arr as $tblsinhvien) {
						?>
					<form method='POST' action="delete.php?id=<?php echo $_GET['id'] ?>">
						
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ma Thi Sinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									
									<input type="text" class="form-control" value="<?php echo $_GET['id']; ?>" disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ho Ten</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="hoten" class="form-control" value="<?php echo $tblsinhvien["hoten"]; ?>" disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">CMT</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="cmt" class="form-control" value="<?php echo $tblsinhvien['cmt']?> " disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Ngay Sinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
								<input type="text" name="ngaysinh" class="form-control" value="<?php echo $tblsinhvien['ngaysinh']?> " disabled><br>	
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Gioi Tinh</label>
								</div>
								<div class="col-lg-8 col-sm-8">
								<input type="text" name="gioitinh" class="form-control" value="<?php echo $tblsinhvien['gioitinh']?> " disabled><br>	
									
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 1</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem1" class="form-control" value="<?php echo $tblsinhvien['diem1']?> " disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 2</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem2" class="form-control" value="<?php echo $tblsinhvien['diem2']?> " disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Diem Mon 3</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="diem3" class="form-control" value="<?php echo $tblsinhvien['diem3']?> " disabled><br>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row colbox">
								<div class="col-lg-4 col-sm-4">
									<label class="control-label">Nguyen Vong Dang Ki</label>
								</div>
								<div class="col-lg-8 col-sm-8">
									<input type="text" name="nguyenvong" class="form-control" value="<?php echo $tblsinhvien['nguyenvong']?> " disabled><br>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left ">	
							<input type="submit" value="Delete" class="btn btn-info">
							<a href="ListStudent.php" type="button" value="Reset" class="btn btn-danger">Cancel</a>
							</div>
					</div>
					<?php 
						}
					?>
					</form>
				</div>
			</div>
		</div> 
	</body>
</html>