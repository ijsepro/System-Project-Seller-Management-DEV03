<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 5/2/2018
 * Time: 10:55 AM
 */



include('connection.php');
if(!$conn){
    echo 'Not connected';
}

if(!mysqli_select_db($conn,'hoteldb')){
    echo 'DB Not selected';
}


$seid = $_POST['seid'];
$sename = $_POST['sename'];
$seaddress= $_POST['seaddress'];
$setelephone = $_POST['setelephone'];
$secompany= $_POST['secompany'];



$sql = "INSERT INTO seller(`seid`, `sename`, `seaddress`, `setelephone`,`secompany`)VALUES('$suid','$suname','$suaddress','$sutelephone','$secompany')";

if(mysqli_query($conn,$sql)){
    echo 'Supplier added successfully';
}

header("refresh:1; url=adminpros.html");

?>