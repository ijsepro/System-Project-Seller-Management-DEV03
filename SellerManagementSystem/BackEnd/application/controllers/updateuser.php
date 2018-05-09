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



$sql = "UPDATE user SET username = '$userid', password = '$password'  WHERE username='$userid'";;

if(mysqli_query($conn,$sql)){
	echo 'User updated successfully';
}

header("refresh:1; url=adminpros.html")

?>
