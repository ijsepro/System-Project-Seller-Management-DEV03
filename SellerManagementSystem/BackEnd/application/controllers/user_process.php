<?php
include('connection.php');
if(!$conn){
	echo 'Not connected';
}

if(!mysqli_select_db($conn,'Seller')){
	echo 'DB Not selected';
}


	$user = $_POST['user'];
	$pass = sha1($_POST['pass']);
	
	$query = "SELECT * FROM user WHERE username = '{$user}' AND password = '{$pass}' LIMIT 1";
	
	$result_set = mysqli_query($conn,$query);
	
	if($result_set){
			//query succes
			if(mysqli_num_rows($result_set) == 1){
				//valid user found
				//redirect to editroom.php
				session_start();
				$row = mysqli_fetch_assoc($result_set);
				$_SESSION['userid']=$row['uid'];
				header('Location:userpage.php');
			}
			else{
				//username password invalid
				echo 'Username/Password invalid';
				header('Location:login.php');
				
			}
		}
		
		
		
	//////////////////////


	
	

?>
