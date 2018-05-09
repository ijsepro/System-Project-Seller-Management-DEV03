<?php include_once('/xampp/htdocs/SellerManagement/BackEnd/connection.php');?>
<?php
//check submit
if(isset($_POST['submit'])){

	$errors = array();

	//username password
	if(!isset($_POST['user']) || strlen(trim($_POST['user']))<1){
		$errors[] = 'Username is invalid';
	}

	if(!isset($_POST['pass']) || strlen(trim($_POST['pass']))<1){
		$errors[] = 'Password is invalid';
	}

	//errors
	if(empty($errors)){

		//save unam password into variables
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$hashed_password = sha1($pass);

		//prepare db query
		$query = "SELECT * FROM user WHERE username = '{$user}' AND password = '{$hashed_password}' LIMIT 1";

		$result_set = mysqli_query($conn,$query);

		if($result_set){
			//query succes
			if(mysqli_num_rows($result_set) == 1){
				//valid user found
				//redirect to editroom.php
				header('Location:adminpros.html');
			}
			else{
				//username password invalid
				$errors[] = 'Username/Password invalid';
			}
		}
		else{
			$errors[] = 'Database query faild';
		}

		//check if user valid



		//if not display error

	}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!--Jquery & slideshow-->
	<script src="jquery/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
	<script src="/https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>
	<link rel="icon" type="image/png" href="img/logo.png" />
	<title>Global Traders | Login</title>

</head>

<style>


	.login table tr td{
		padding:20px;

	}

	login{width:100%;}
</style>

<script>
	jQuery(document).ready(function(){
		$('#admin').click(function(){
			$('.loginform').show(300);
			$('.loginform2').hide();
		});
		$('#user').click(function(){
			$('.loginform2').show(300);
			$('.loginform').hide();
		});

	});
</script>

</head>




<body>
<!--Collapsible navbar for xs, sm, & md sizes only-->
<div class="menubar hidden-lg" data-toggle="collapse" data-target=".dropdown">
	<h3>MENU</h3>
	<img src="img/btn-white.png" width="40" height="40" class="btnn">
</div>

<div class="dropdown collapse out">
	<ul>
		<a href="index.html"><li>Home</li></a>
		<a href="about.html"><li>About us</li></a>
		<a href="rates.html"><li>Rates</li></a>
		<a href="facilities.html"><li>Facilities</li></a>
		<a href="gallery.html"><li>Gallery</li></a>
		<a href="contact.html"><li>Contact</li></a>
	</ul>
</div>
<!--end Collapsible navbar-->

<div class="container-fluid">

	<div class="row">

		<!--start Logo div-->
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo text-center">
			<p class="btn btn-primary right"><a href="index.html">Home</a></p>

			<img src="img/logo.png" width="100" height="auto" id="logo">
		</div>
		<!--end Logo div-->

		<!--Start login box-->
		<div class="login center-block col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="text-center loginchooser">
				<input type="radio" id="admin" name="login"> Admin Login&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="radio" id="user" name="login" checked="true"> Stock Manager Login

			</div>
			<form action="process.php" method="POST">
				<table border="0" class="center-block loginform" width="400">
					<tr>
						<td colspan="2" class="text-center"><h3>Admin Login</h3>
						</td>
					<tr>

					<tr>
						<td>Username
						</td>
						<td><input type="text" class="form-control" id="user" name="user" required>
						</td>
					</tr>
					<tr>
						<td>Password
						</td>
						<td><input type="password" class="form-control" id="pass" name="pass" required>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td><input type="submit" class="btn btn-primary" value="Login" name="submit">
						</td>

					</tr>

				</table>
			</form>

			<form action="user_process.php" method="POST">
				<table border="0" class="center-block loginform2" width="400">
					<tr>
						<td colspan="2" class="text-center"><h3>Stock Manager Login</h3>
						</td>
					<tr>

					<tr>
						<td>Username
						</td>
						<td><input type="text" class="form-control" id="user" name="user" required>
						</td>
					</tr>
					<tr>
						<td>Password
						</td>
						<td><input type="password" class="form-control" id="pass" name="pass" required>
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td><input type="submit" class="btn btn-primary" value="Login" name="submit">
						</td>

					</tr>

				</table>
			</form>
		</div><!--end login box-->
	</div>
</div>

</body>
</head>
</html>

