<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Display Data</title>
	<style>
		table{
			background-color:#eeeeee;
			text-align:center;
			margin-left:auto;
			margin-right:auto;
			width:100%;
			padding-top:0px;
		}
		th{
			text-align:center;
			width:80%;
			background-color:#55a;
			color:#ffffff;
			padding:15px;
		}
		td{
			text-align:center;
			border-bottom: 1px solid #999;
			width:200px;
			padding:10px;
		}

		tr{
			background-color:#eeeeee;
			padding:10px;
		}

		h3{
			text-align:center;
			margin-top:70px;
		}

		.btnn{
			margin-top:5%;
			height:50px;
			width:200px;

		}

	</style>

</head>

<body>



<?php
include('connection.php');

//$email = $_POST['email];

$sqldata = mysqli_query($conn,"SELECT * FROM email");
echo "<table>";




while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	echo "<tr><td>";
	echo "<a href='mailto:#'>";
	echo $row['email'];
	echo "</a>";
	echo "</td>";

	echo "</tr>";
	echo "<br>";


}
echo "</table>";
?>
</body>
</html>
