<?php
include('connection.php');



$name = $_POST['msgname'];
$email = $_POST['msgemail'];
$tel = $_POST['msgtel'];
$message = $_POST['message'];

$sql = "INSERT INTO messages (msgid,name,email,tel,message) VALUES (NULL,'$name','$email','$tel','$message')";

if(mysqli_query($conn,$sql)){
	echo 'Your messege sent';
}

header("refresh:1; url=FrontEnd/contact.html");
?>
