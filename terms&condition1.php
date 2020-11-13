<?php
   session_start();
   if(isset($_GET['email'])){
       $_SESSION['email']= $_GET['email'];
   }
   else{
       header('location: login.php');
   }

   $conn = new mysqli("localhost", "root","","project");
   $email = $_GET['email'];
   $account_query = "select * from details where email='$email'";
    $account_view = $conn ->query($account_query);
    while ($row = $account_view->fetch_assoc()){
      $fn=$row['fname'];
      $fn=$row['fname'];
      $ln=$row['lname'];
      $ph=$row['ph_no'];
      $em=$row['email'];
      $pwd=$row['password'];
      $add=$row['address'];
      $DOB=$row['DOB'];
    }
   ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Terms & Conditions</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />


    <style>
        #syl1{
          color: white;
          border: none;
          margin-left: 40px;
         }

         #box5{
          width: 100%;
          padding-top: 0.5%;
          padding-bottom: 0.5%;
          background-color: rgb(61, 59, 59);
          color: white;
          padding-left: 40px;
          
        }
        #box6{
          width: 100%;
          padding-top: 1%;
          padding-bottom: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
        }
        body{
            background-color: #eae2b7;
        }

    </style>

  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #457B8B;width: 100%; " >
        <a class="navbar-brand" <?php echo "href='welcome.php?email=$email'";?> style="padding-left: 35px;"><img src="images/finallogo.png" style="width: 100px; ;"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"> <a <?php echo "href='welcome.php?email=$email'";?> style="text-decoration: none; color: white;">Home</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='service1.php?email=$email'";?> style="text-decoration: none; color: white;">Services</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='blog1.php?email=$email'";?> style="text-decoration: none; color: white;">Blog</a></button>
              </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="" style="text-decoration: none; color: white;">Donate</a></button>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-outline-dark dropdown-toggle" id="syl1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                 Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(197, 191, 191); margin-left: 0px;padding-left:0px ">
                    <a class="dropdown-item" style="color: black; " <?php echo "href='dashboard.php?email=$email'";?>>Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " style="color: black; " <?php echo "href='update.php?email=$email&fn=$fn&ln=$ln&ph=$ph&em=$em&pwd=$pwd&add=$add&DOB=$DOB'";?>>Update</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: black; " <?php echo "href='./feedback/index1.php?email=$email'";?>>Feedback Form</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: black; " href="homepage.php">Sign out</a>
                </div>
            </li>
          </ul>

        </div>

      </nav>
        <br>
        <br>
    

<div class="container" style="margin-top: 5%; justify-content:center;">
<h2><strong>Terms and Conditions</strong></h2>

<p style="color: #5d987b; font-weight:bold;">Welcome to FIXit!</p>
<div style="background-color: #ffccff; padding: 2%; border-radius: 10px; box-shadow: 7px 7px #888888;">
<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use www.FIXit.com if you do not agree to take all of the terms and conditions stated on this page.</p>
<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website
and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. 
All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting
the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of India's. Any use of the above terminology or other words in the singular,
plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>
</div>

<h4 style="margin-top: 2%;"><strong>Cookies</strong></h4>
<div style="background-color: #ccccff; padding: 2%; border-radius: 10px;  box-shadow: 7px 7px #888888;">
<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove
links but we are not obligated to or so or to respond to you directly.</p>

<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable
the functionality of certain areas to make it easier for people visiting our website.
Some of our affiliate/advertising partners may also use cookies.</p>
</div>

<h4 style="margin-top: 2%;"><strong>Reservation of Rights</strong></h4>
<div style="background-color:#ffcccc ; padding: 2%; border-radius: 10px;  box-shadow: 7px 7px #888888;">
<p>We employ the use of cookies. By accessing www.FIXit.com, you agreed to use cookies in agreement with the FIXit 's Privacy Policy.</p>

<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure 
that the website remains available or that the material on the website is kept up to date.</p>
</div>
</div>

<br>
<br>
<div id="box5"> 
      <a <?php echo "href='aboutus1.php?email=$email'";?> style="color: white; font-size: 1.3vw;">About Us</a>
      <a <?php echo "href='terms&condition1.php?email=$email'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Terms & condition</a>
      <a <?php echo "href='privacypolicy1.php?email=$email'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Privacy Policy</a>
      <a <?php echo "href='help1.php?email=$email'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Help</a>
    </div>

    <div id="box6">
      <div style="color: white;">
        <p style=" font-size: 1vw;">Contact Us</p>
       <p style=" font-size: 1vw;"> Contact No- &nbsp 022-4335678 (Toll free)<br> Email Us- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp info@fixit.com</p>
       </div>
      <div style="color: white; margin-top: -7%;position: relative;">
        <p style=" font-size: 1vw; margin-left: 30%; margin-top: -47px;padding-top:-10px ;"> Address</p>
        <p style=" font-size: 1vw; margin-left: 30%; "> Infocity<br>Bhubaneswar, 751024<br>Odisha, India</p>
      </div>
      <div style="color: white; position: relative;margin-top: -7%;">
        <p style="font-size: 1vw;margin-left: 80%;margin-top: -47px;color: white;">Join with us</p>
        <a href="https://www.facebook.com"><img src="images/fb.png" style="width: 2%;margin-left: 75%;position: relative; margin-top: 0px;"></a>
        <a href="https://www.instagram.com/creative_sambit"><img src="images/insta.png" style="width: 2%;margin-left: 80%;position: relative; margin-top: -50px;"></a>
        <a href="https://www.mi.co.in/"><img src="images/twitter.png" style="width: 2%;margin-left: 85%;position: relative; margin-top: -98px;"></a>
        <a href="https://www.google.com"><img src="images/whatsapp.png" style="width: 2%;margin-left: 90%;position: relative; margin-top: -146px;"></a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>