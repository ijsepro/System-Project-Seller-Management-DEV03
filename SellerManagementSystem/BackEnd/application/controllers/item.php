<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 5/2/2018
 * Time: 11:04 AM
 */



include('connection.php');
if(!$conn){
	echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
	echo 'DB Not selected';
}


$itid = $_POST['itid'];
$itdescription = $_POST['itdescription'];
$itprice= $_POST['itprice'];
$itquantity = $_POST['itquantity'];




$sql = "INSERT INTO seller(`itid`, `itdescription`, `itprice`, `itquantity`)VALUES('$itid','$itdescription','$itprice','$itquantity')";

if(mysqli_query($conn,$sql)){
	echo 'Supplier added successfully';
}

header("refresh:1; url=../FrontEnd/adminpros.html");

?>
