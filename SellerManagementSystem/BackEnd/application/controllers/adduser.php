<?php

include('connection.php');
if(!$conn){
	echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
	echo 'DB Not selected';
}

$userid = $_POST['userid'];
$password = sha1($_POST['password']);



$sql = "INSERT INTO user(username,password)VALUES('$userid','$password')";

if(mysqli_query($conn,$sql)){
	echo 'User added successfully';
}

header("refresh:1; url=../FrontEnd/adminpros.html")

?>
