<?php

include('connection.php');
if(!$conn){
	echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
	echo 'DB Not selected';
}

$emailid = $_POST['emailid'];

$sql = "INSERT INTO email(email)VALUES('$emailid')";

if(mysqli_query($conn,$sql)){
	echo 'Thank you';
}

header("refresh:1; url=../FrontEnd/index.html")

?>
