<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../dist/css/bootstrap.css">
  <link rel="stylesheet" href="careers.component.scss">

  <!--Jquery & slideshow-->
  <script src="../jquery/jquery-3.2.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

  <link rel="icon" type="image/png" href="../img/logo.png" />
  <title>Global Traders</title>

  <script>



  </script>

</head>




<body>

<!--Collapsible navbar for xs, sm, & md sizes only-->
<div class="menubar hidden-lg" data-toggle="collapse" data-target=".dropdown">
  <h3>MENU</h3>
  <img src="../img/btn-white.png" width="40" height="40" class="btnn">
</div>

<div class="dropdown collapse out">
  <ul>
    <a href="../../../index.html"><li>Home</li></a>
    <a href="../about/about.component.html"><li>About us</li></a>
    <a href="../rates/rates.component.html"><li>Rates</li></a>
    <a href="../facilities/facilities.component.html"><li>Facilities</li></a>
    <a href="../gallery/gallery.component.html"><li>Gallery</li></a>
    <a href="../contact/contact.component.html"><li>Contact</li></a>
  </ul>
</div>
<!--end Collapsible navbar-->


<div class="container-fluid">

  <div class="row">

    <!--start Logo div-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 logo text-center">
      <p class="btn btn-primary right"><a href="../../../../../BackEnd/application/views/login.php">Login</a></p>
      <img src="../img/logo.png" width="100" height="auto" id="logo">
    </div>
    <!--end Logo div-->

    <!--start Header div-->
    <div class="col-lg-12 hidden-md hidden-sm hidden-xs header text-center">
      <ul>
        <li><a href="../../../index.html">Home</a></li>
        <li><a href="../about/about.component.html">About us</a></li>
        <li><a href="../rates/rates.component.html">Rates</a></li>
        <li><a href="../facilities/facilities.component.html">Facilities</a></li>
        <li><a href="../gallery/gallery.component.html">Gallery</a></li>
        <li><a href="../contact/contact.component.html">Contact</a></li>
      </ul>
    </div>
    <!--end Header div-->

    <!--start contact1 div-->

    <!--end contact1 div-->

    <!--start contact2 div-->
    <div class="col-lg-9 col-md-6 col-sm-6 col-xs-12 jobpage">



      <br/><br/>
      <h3 class="text-center">Available Positions</h3><br>
      <h5 class="text-center">Please send all your resumes with two non related refrees to email address
        <a href="mailto:hr@goldenisland.com">hr@goldenisland.com</a><h5>
          <div class="wrap col-lg-12">





            <?php
            include('/xampp/htdocs/SellerManagement/BackEnd/connection.php');

            $sql = "SELECT * FROM careers";
            $sqldata = mysqli_query($conn,$sql);


            while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){

              echo "<br>";

              echo '<div class="vacancy center-block">';
              echo '<div class="title text-center"><h4 class="text-center">';
              echo $row['title'];
              echo '</h4></div>';
              echo '<h4>Job Description</h4>';
              echo '<p>';
              echo $row['jobdesc'];
              echo '</p>';

              echo '<h4>Qualifications</h4>';
              echo '<p>';
              echo $row['qualifications1'];
              echo '<br>';
              echo $row['qualifications2'];
              echo '<br>';
              echo $row['qualifications3'];
              echo '<br>';
              echo $row['qualifications4'];
              echo '<br>';
              echo $row['qualifications5'];
              echo '<br>';
              echo '</p>';

              echo '<h4>Closing Date : '.$row['closing'].'</h4>';


              echo '</div>';

            }


            ?>










          </div>
    </div>
    <!--end contact2 div-->

    <!--start Book div-->
    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 book right">


      <table border="0" width="95%" height="95%" align="center">
        <!--                    <form action="roomresults.php" method="POST">-->
        <tr>
          <td>
            <h3>Track your order</h3>
          </td>
        </tr>

        <tr>
          <td>
            <p>Order ID</p>
          </td>
        </tr>
        <tr>
          <td>
            <input type="text" class="form-control" name="typename">

            </input>
          </td>
        </tr>
        <tr>
          <td>
            <p>Telephone(used when placing the order)</p>
            <input type="text" class="form-control" name="tel">

            </input>
          </td>

        </tr>
        <tr>
          <td>
            <p>Email</p>
            <input type="text" class="form-control" name="tel">

            </input>
          </td>

        </tr>
        <tr>
          <td><br>
            <input type="submit" class="btn btn-primary" value="Submit">
          </td>
        </tr>
        </form>
      </table>
    </div>
    <!--end Book div-->

    <!--start intro div-->


    <!--start news div-->
    <div class="col-lg-3 hidden-md hidden-sm hidden-xs news">
      <h3>News & Events</h3>
      <ul>
        <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
        <li><a href="#">Aenean gravida ligula sed dignissim commodo. consectetur adipiscing elit.</a></li>
        <li><a href="#">Integer lorem ipsum, scelerisque at rutrum eu,</a></li>
        <li><a href="#">Aenean gravida ligula sed dignissim commodo. Morbi mattis.</a></li>
        <li><a href="#">Morbi mattis non massa sed placerat.</a></li>
      </ul>

    </div>
    <!--end news div-->

    <!--start Links div-->
    <div class="col-lg-4 col-md-6 hidden-sm hidden-xs links">
      <table border="0" width="80%" height="80%" align="center">
        <tr valign="top">
          <td>
            <ul>
              <li><a href="../../../index.html">Home</a></li>
              <li><a href="../about/about.component.html">About us</a></li>
              <li><a href="../rates/rates.component.html">Rates</a></li>
              <li><a href="../facilities/facilities.component.html">Facilities</a></li>
          </td>
          <td>
            <ul>

              <li><a href="../gallery/gallery.component.html">Gallery</a></li>
              <li><a href="../contact/contact.component.html">Contact us</a></li>

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
              <form action="../../../../../BackEnd/application/controllers/emaillist.php" method="POST">
                <li><input type="email" placeholder="Enter your email" name="emailid"><input type="submit" value="Send"></li>
              </form>
              <li>Get in Touch</li>
            </ul>
            <ul class="social">
              <li><a href="http://www.facebook.com"><img src="../img/fb.png" width="30" height="auto"></a></li>
              <li><a href="http://www.twitter.com"><img src="../img/tw.png" width="30" height="auto"></a></li>
              <li><a href="http://www.tripadvisor.com"><img src="../img/ta.png" width="30" height="auto"></a></li>
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
      <p>&nbsp;&copy;&nbsp;Global Traders 2018 All Riights Reserved</p>
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
