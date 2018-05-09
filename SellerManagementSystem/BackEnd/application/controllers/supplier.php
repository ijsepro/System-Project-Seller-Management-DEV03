
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 5/2/2018
 * Time: 10:40 AM
 */
<?php


include('connection.php');
if(!$conn){
    echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
    echo 'DB Not selected';
}


$suid = $_POST['suid'];
$suname = $_POST['suname'];
$suaddress= $_POST['suaddress'];
$sutelephone = $_POST['sutelephone'];
$sucompany= $_POST['sucompany'];



$sql = "INSERT INTO supplier(`suid`, `suname`, `suaddress`, `sutelephone` ,`sucompany`)VALUES('$suid','$suname','$suaddress','$sutelephone','$sucompany')";

if(mysqli_query($conn,$sql)){
    echo 'Supplier added successfully';
}

header("refresh:1; url=adminpros.html");

?>
