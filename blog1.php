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

    <title>Blog</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />
    <style>
        #syl1{
          color: white;
          border: none;
          margin-left: 40px;
         }

         #box1{
             width: 75%;
             padding-top: 5%;
             padding-left: 7%;
             padding-right: 3%;
             padding-bottom: 5%;
             text-align: left;
             background-color: rgb(184, 255, 226);
             color: black;
             position: relative;
             border-top-right-radius: 25px;
             border-bottom-right-radius: 25px;
             z-index: 1000;
         }

         #box2{
             width: 64%;
             padding-top: 11%;
             padding-bottom: 2%;
             padding-left: 7%;
             text-align: left;
             background-color: rgb(170, 235, 255);
             color: black;
             position: relative;
             z-index: 500;
             opacity: 0.9;
             border-bottom-left-radius: 25px;
             border-top-left-radius: 25px;
             margin-left: 36%;
             margin-top: -7%;
         }

         #box4{
             width: 80%;
             height: 70%;
             padding-top: 4%;
             padding-bottom: 4%;
             padding-left: 7%;
             text-align: center;
             background-color:#c5f5fd;
             color: black;
             position: relative;
             border-bottom-right-radius: 25px;
             border-top-right-radius: 25px;
             z-index: 100;
             opacity: 0.8;
             margin-top: -6%;
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
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='donate.php?email=$email'";?>style="text-decoration: none; color: white;">Donate</a></button>
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
        
      <div style="width: 50%;background-color: rgb(158, 191, 253); margin: auto;padding-left: 3px;padding-right: 3px; border-radius: 20px;">
          <p style="font-size: 3.5vw; color: rgb(252, 117, 117);margin-top: 68px;-webkit-text-stroke: 1px black;text-align: center;"> <b>Welcome to Our Blog Page</b></p>
      </div>  
      
      <div id="box1">
        <h3 style=" font-size: 3vw; color: rgb(97, 94, 94);" >Making the life go on a ease</h3><br/>
        <p style="font-size: 1.2vw;">
            We are living in a world where everyone is busy with their smart devices and try to find the simplest and easiest way to solve their day to day requirements.
             We are in the era of technology and every business seeks something new to engage with their consumers and when the path between you and your consumer becomes easy and simple your business growth graph will rise like never before.
            <br><br>
            As per the Harvard Business Review, the On-Demand economy is every year bringing more than 22.4 million customers, and the spending is about $57.6 billion. Again, if we take a glimpse at the marketplace, online markets are consuming the most with 16.3 million customers who on average spend $36 billion every year.
       </p>
      </div>

      <div id="box2">
         <h3 style=" font-size: 3vw; margin-left: 14%;margin-top: -5%;color: rgb(97, 94, 94);" >We mainly focuses on</h3><br/>
            <ul style="margin-left: 12%;">
            <li>
                <p style=" font-size: 1.2vw; "> Customer satisfaction and efficiency</p>
            </li>
            <li>
                <p style=" font-size: 1.2vw; ">Long term is affordable</p>
            </li>
            <li>
                <p style=" font-size: 1.2vw; ;">Customers Feedback</p>
            </li>
            <li>
                <p style=" font-size: 1.2vw; ;">Activity List</p>
            </li>
            <li>
                <p style=" font-size: 1.2vw; ;">Cashless payment facility</p>
            </li>
            </ul>
      </div>

      <div id="box4">
        <h3 style=" font-size: 3vw; color: rgb(97, 94, 94);margin-top: 4%;margin-left: 10%;" >Home & Cleaning Service </h3><br/>
        <p style="font-size: 1.2vw;">
            We have built powerful & interactive websites for businesses such as home & cleaning services. Offer your expert service
             or services to your customers and manage your staff, bookings and more from a powerful dashboard. Customers can conveniently book local servicemen from our website trusted professionals on-demand.
       </p>
       <h3 style=" font-size: 3vw; color: rgb(97, 94, 94);margin-top: 4%;margin-left: 10%;" >Repair & Maintenance Service  </h3><br/>
       <p style="font-size: 1.2vw;">
        Earlier, it was hard for people to find a plumber, an electrician, an AC service man, other repair servicemen and support workers. With the introduction of on-demand apps and websites, this has become so easy. You just need to tap on your phone to find trusted, professional and vetted workers. If you are the owner of such business, you can go ahead to develop an app with us. 
        We have successfully delivered a website for finding Repair persons on demand for a client in India.
       </p>
       <h3 style=" font-size: 3vw; color: rgb(97, 94, 94);margin-top: 4%;margin-left: 10%;" >Healthcare & Fitness </h3><br/>
       <p style="font-size: 1.2vw;">
        Get  healthcare services on-demand business apps. Healthcare mobile enterprise solution connects patients with doctors and a dashboard to manage requests. 
        Hospital and clinic's appointment management solution can manage shifts, automate appointments and manage your staff. It also provides complete aggregation services, provides discovery, book appointments & rate and review online.
       </p>
      </div>

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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>