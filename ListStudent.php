<?php
	include_once 'DBConnect.php';
	include_once 'LoginCheck.php';

	if(isset($_GET['inputSearch'])){
		$inputSearch = $_GET["inputSearch"];
		$sql = "SELECT * FROM tblsinhvien WHERE ma LIKE '%$inputSearch%' or gioitinh LIKE '%$inputSearch%' or hoten LIKE '%$inputSearch%' or cmt LIKE '%$inputSearch%' or ngaysinh LIKE '%$inputSearch%' or diem2 LIKE '%$inputSearch%' or diem3 LIKE '%$inputSearch%' or nguyenvong LIKE '%$inputSearch%' or diem1 LIKE '%$inputSearch%'";

		$result = $conn->query($sql);
		$arr = array();
		$arr = mysqli_fetch_all($result , MYSQLI_ASSOC);
	}
	else{
		$sql = "SELECT * FROM tblsinhvien";
		$result = $conn->query($sql);
		if($result->num_rows == 0){
			echo "<script>alert('khong co du lieu');</script>";
		}
		else if($result->num_rows >0){
			$arr = mysqli_fetch_all($result, MYSQLI_ASSOC);
		}
	}
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
	<title>Manage Student</title>>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<h2>Manage Student</h2>

<form>
	<form method="GET" action="ListStudent.php">
		<input type="text" id="myInput" name="inputSearch" placeholder="Search for...">
			
			<button class="btn btn-info" type="submit" value="SEARCH"><span class="glyphicon glyphicon-search"></span>SEARCH</button><br>
	</form>
	<a class="btn btn-info" role="button" href="Add.php">Add Student</a>
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
			<th style="width:10%;"></th>
			<th style="width:10%;"></th>
		</tr>
		</thead>
		<tbody>
		<?php 
			foreach ($arr as $tblsinhvien) {
		?>
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
            <th><a href="edit.php?id=<?php echo $tblsinhvien["ma"]; ?>" class="btn btn-info">EDIT</a></th>
			<th><a href="delete.php?id=<?php echo $tblsinhvien["ma"]; ?>" class="btn btn-info">DELETE</a></th>
        </tr>
		<?php }
		?>
		</tbody>
	</table>
	<a href="Logout.php" class="btn btn-info">LOGOUT</a>
</form>
</body>
</html>