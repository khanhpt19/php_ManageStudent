<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';

	$ten = $_SESSION['username'];

	$sql = "SELECT * FROM tblsinhvien WHERE ma LIKE '%$ten%'";
	$query = $conn->query($sql);
	$tblsinhvien = mysqli_fetch_assoc($query );
	$_SESSION['ten'] = $ten;

	$conn->close();
?>
<!DOCTYPE html>
<html>
<style>
body{
	background-color: #efeffb;
}
* {
  box-sizing: border-box;
}

#myInput {
	align: right;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 30%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
	
	table-align: center;
	width: 70%;
  border-collapse: collapse;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
  
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.table, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
<head>
	<meta charset="utf-8">
	<title>Student Infomation</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<h1>Student Information</h1>
	<a href="ChangePassword.php" class="btn btn-info">Change Password</a>
	

<form>
	<form method="GET" action="Student.php">
	<table class="table" id="myTable" cellspacing="5" cellpadding="5" border="1" align="center">
		<thead>
		<tr>
			<th style="width:10%;">Ma Thi Sinh</th>		
			<th style="width:10%;">Ho Ten</th>
			<th style="width:10%;">CMT</th>
			<th style="width:10%;">Ngay Sinh</th>
			<th style="width:10%;">Gioi Tinh</th>
			<th style="width:10%;">Diem Mon 1</th>
			<th style="width:10%;">Diem Mon 2</th>
			<th style="width:10%;">Diem Mon 3</th>
			<th style="width:10%;">Nguyen Vong Dang Ki</th>
		</tr>
		</thead>
		<tbody>
		
		<tr>
			 
            <td><?php echo $tblsinhvien["ma"]; ?></td>			
            <td><?php echo $tblsinhvien["hoten"]; ?></td>
			<td><?php echo $tblsinhvien["cmt"]; ?></td>
            <td><?php echo $tblsinhvien["ngaysinh"]; ?></td>
            <td><?php echo $tblsinhvien["gioitinh"]; ?></td>
            <td><?php echo $tblsinhvien["diem1"]; ?></td>
            <td><?php echo $tblsinhvien["diem2"]; ?></td>
            <td><?php echo $tblsinhvien["diem3"]; ?></td>
            <td><?php echo $tblsinhvien["nguyenvong"]; ?></td>

            <th><a href="EditNV.php?id=<?php echo $tblsinhvien["ma"]; ?>" class="btn btn-info">Dang Ky Nguyen Vong</a></th>

        </tr>
		</tbody>
	</table>
</form>
	<a href="Logout.php" class="btn btn-info">LOGOUT</a>

</body>
</html>