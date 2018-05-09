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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

	<link rel="icon" type="image/png" href="img/logo.png" />
	<title>Global Traders</title>



	<style>
		.editor{
			padding-top:2%;
			padding-bottom:2%;
		}
		.editor table tr td p{
			padding-bottom:0px;
			padding-top:20px;

		}

		.editor table tr td {
			padding-bottom:10px;
			padding-top:0px;
		}

		.avail{
			margin-top:0px;
			padding:5%;
			background-color:#dddddd;
		}


		.logo{
			margin-bottom:50px;
		}
	</style>

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
			<p class="btn btn-primary right"><a href="login.php">Logout</a></p>

			<img src="img/logo.png" width="100" height="auto" id="logo">
		</div>
		<!--end Logo div-->




		<div class="facilities">

			<!--start editor div--
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
            <div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv4"><h3>Rooms</h3>
                <img src="img/btn-white.png" width="40" height="40">
            </div>
            <div class="collapsediv4 team collapse out">
                <iframe width="100%" src="bookings.php"></iframe>

                <table border="0" width="95%" height="95%" align="center">
                <form action="bookroom.php" method="POST">
                    <tr>
                        <td>
                            <p>Room Number</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="roomid" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Booking Date (YYYY-MM-DD)</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="date" class="form-control" name="bdate" required>
                        </td>
                    </tr>

                    <tr>
                        <td><br>
                            <input type="submit" class="btn btn-primary" value="Book Rooms">
                        </td>
                    </tr>
                </form>
                </table>
            </div>
        </div><!--end editor div

            <!--start editor div--
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
            <div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv"><h3>Add Rooms</h3>
                <img src="img/btn-white.png" width="40" height="40">
            </div>
            <div class="collapsediv team collapse out">


                <table border="0" width="95%" height="95%" align="center">
                <form action="addrooms.php" method="POST">
                    <tr>
                        <td>
                            <p>Room Number</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="rid" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Room Type</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="typename">
                                <option class="form-control" value="standard">Standard</option>
                                <option class="form-control" value="deluxe">Deluxe</option>
                                <option class="form-control" value="luxury">Luxury</option>
                                <option class="form-control" value="family">Familiy</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Adults</p>
                            <select class="form-control" name="adults">
                                <option class="form-control" value="1">1</option>
                                <option class="form-control" value="2">2</option>
                                <option class="form-control" value="3">3</option>
                            </select>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>kids</p>
                            <select class="form-control" name="kids">
                                <option class="form-control" value="1">1</option>
                                <option class="form-control" value="2">2</option>
                                <option class="form-control" value="3">3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Availability</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <select class="form-control" name="availability">
                                <option class="form-control" value="yes">Yes</option>
                                <option class="form-control" value="no">No</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <p>Price</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" class="form-control" name="price" required>
                        </td>
                    </tr>

                    <tr>
                        <td><br>
                            <input type="submit" class="btn btn-primary" value="Add to Database">
                        </td>
                    </tr>
                </form>
                </table>
            </div>
        </div><!--end editor div-->

			<!--start editor div--
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
                <div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv2"><h3>Edit Rooms</h3>
                    <img src="img/btn-white.png" width="40" height="40">
                </div>
                <div class="collapsediv2 team collapse out">

                    <table border="0" width="95%" height="95%" align="center">
                    <form action="editrooms.php" method="POST">
                        <tr>
                            <td>
                                <p>Room Number</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="rid">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Room Type</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control" name="typename">
                                    <option class="form-control" value="standard">Standard</option>
                                    <option class="form-control" value="deluxe">Deluxe</option>
                                    <option class="form-control" value="luxury">Luxury</option>
                                    <option class="form-control" value="family">Familiy</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Adults</p>
                                <select class="form-control" name="adults">
                                    <option class="form-control" value="1">1</option>
                                    <option class="form-control" value="2">2</option>
                                    <option class="form-control" value="3">3</option>
                                </select>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <p>kids</p>
                                <select class="form-control" name="kids">
                                    <option class="form-control" value="1">1</option>
                                    <option class="form-control" value="2">2</option>
                                    <option class="form-control" value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Availability</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select class="form-control" name="availability">
                                    <option class="form-control" value="yes">Yes</option>
                                    <option class="form-control" value="no">No</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <p>Price</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" name="price">
                            </td>
                        </tr>

                        <tr>
                            <td><br>
                                <input type="submit" class="btn btn-primary" value="Update Room">
                            </td>
                        </tr>
                    </form>
                    </table>
                </div>
            </div><!--end editor div-->

			<!--start editor div-->
			<!--end editor div

               <!--start editor div-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
				<div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv5"><h3>New GRN</h3>
					<img src="img/btn-white.png" width="40" height="40">
				</div>
				<div class="collapsediv5 team collapse out">


					<table border="0" width="95%" height="95%" align="center">
						<form action="../BackEnd/updateuser.php" method="POST">
							<tr>
								<td>
									<p>GRN id</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Supplier NIC</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Supplier Order Id</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Item name</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Price</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Order Quantity</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>
							<tr>
								<td>
									<p>Delivered Quantity</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>
							<tr>
								<td>
									<p>Description</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Received Date</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="date" class="form-control" name="userid" required>
								</td>
							</tr>
							<tr>
								<td>
									<p>Return Date</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="date" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Delivary Location</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>




							<tr>
								<td><br>
									<input type="submit" class="btn btn-primary" value="Add">
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div><!--end editor div-->


			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
				<div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv14"><h3>New Supplier Order</h3>
					<img src="img/btn-white.png" width="40" height="40">
				</div>
				<div class="collapsediv14 team collapse out">


					<table border="0" width="95%" height="95%" align="center">
						<form action="../BackEnd/updateuser.php" method="POST">
							<tr>
								<td>
									<p>Id</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Date</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="date" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Supplier Id</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Item name</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Quantity</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>

							<tr>
								<td>
									<p>Unit Price</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>
							<tr>
								<td>
									<p>Quantity on Hand</p>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="form-control" name="userid" required>
								</td>
							</tr>


							<tr>
								<td><br>
									<input type="submit" class="btn btn-primary" value="Add">
								</td>
							</tr>
						</form>
					</table>
				</div>
			</div>




			<!--start editor div-->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
				<div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv7"><h3>View Return Items</h3>
					<img src="img/btn-white.png" width="40" height="40">
				</div>
				<div class="collapsediv7 team collapse out">

					<table border="0" width="95%" height="95%" align="center">
						<form action="../BackEnd/jobpost.php" method="POST">

						</form>
					</table>
				</div>
			</div><!--end editor div-->



			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 editor event">
				<div class="collapsebtn" data-toggle="collapse" data-target=".collapsediv1"><h3>View Orders</h3>
					<img src="img/btn-white.png" width="40" height="40">
				</div>
				<div class="collapsediv1 team collapse out">
					<!--                    <iframe width="100%" src="emailviewer.php"></iframe>-->

				</div>
			</div><!--end editor div-->
		</div><!--end dropdown-->
	</div>
</div>




<!--start Links div-->
<div class="col-lg-4 col-md-6 hidden-sm hidden-xs links">
	<table border="0" width="80%" height="80%" align="center">
		<tr valign="top">
			<td>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="rates.html">Rates</a></li>
					<li><a href="facililties.html">Facilities</a></li>
			</td>
			<td>
				<ul>

					<li><a href="gallery">Gallery</a></li>
					<li><a href="contact.html">Contact us</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
			</td>
		</tr>
	</table>
</div>
<!--end Links div-->

<!--start Links1 div-->
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 links1">
	<table border="0" width="80%" height="80%" align="center">
		<tr valign="top">
			<td>
				<ul>
					<li>Sign up for newsletter</li>
					<form action="../BackEnd/emaillist.php" method="POST">
						<li><input type="email" placeholder="Enter your email" name="emailid" required><input type="submit" value="Send"></li>
					</form>
					<li>Get in Touch</li>
				</ul>
				<ul class="social">
					<li><a href="http://www.facebook.com"><img src="img/fb.png" width="30" height="auto"></a></li>
					<li><a href="http://www.twitter.com"><img src="img/tw.png" width="30" height="auto"></a></li>
					<li><a href="http://www.tripadvisor.com"><img src="img/ta.png" width="30" height="auto"></a></li>
				</ul>
			</td>
		</tr>
		<tr>
			<td></td>
		</tr>
	</table>
</div>
<!--end Links1 div-->

<!--start Links1 div-->
<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 links1">
	<table border="0" width="80%" height="80%" align="center">
		<tr valign="top">
			<td>
				<ul>
					<li>Email: <a href="mailto:#">info@globaltraders.com</a></li>
					<li>Phone : +94 21 2245 665</li>
					<li>Fax : +94 21 2245 665</li>

			</td>
		</tr>
		<tr>
			<td>
				<ul>


					<li>No 54 Beach Road</li>
					<li>Colombo 10</li>
					<li>Sri Lanka</li>


			</td>
		</tr>
	</table>
</div>
<!--end Links1 div-->

<!--start Bottom div-->
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bottom">
	<p>&nbsp;&copy;&nbsp;Golden Island Hotel 2017 All Riights Reserved</p>
</div>
<!--end Bottom div-->
</div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>
