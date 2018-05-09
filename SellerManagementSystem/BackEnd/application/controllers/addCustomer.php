<?php


include('connection.php');
if(!$conn){
	echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
	echo 'DB Not selected';
}


$cid = $_POST['cid'];
$cname = $_POST['cname'];
$caddress = $_POST['caddress'];
$ctelephone = $_POST['ctelephone'];


$sql = "INSERT INTO customer(`cid`, `cname`, `caddress`, `ctelephone`)VALUES('$cid','$cname','$caddress','$ctelephone')";

if(mysqli_query($conn,$sql)){
	echo 'Customer added successfully';
}

header("refresh:1; url=../FrontEnd/adminpros.html");

?>
