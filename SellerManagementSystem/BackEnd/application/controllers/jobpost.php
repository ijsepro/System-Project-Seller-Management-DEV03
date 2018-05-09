<?php
include('connection.php');

$title = $_POST['position'];
$desc = $_POST['jobdesc'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$closing = $_POST['closing'];

$sql = "INSERT INTO careers (vid,title,jobdesc,qualifications1,qualifications2,qualifications3,qualifications4,qualifications5,closing) VALUES (NULL,'$title','$desc','$q1','$q2','$q3','$q4','$q5','$closing')";

 if(mysqli_query($conn,$sql)){
     echo "Post Successfull";
 }

header("refresh:1; url=adminpros.html");
?>