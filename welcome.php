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
      $serdate=$row['booking_date'];
    }
   ?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to the world of FIXit</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <style>
        body {
              background-color: #DBFCFE;
        }

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
          margin-top: 6%;  
        }

        #box6{
          width: 100%;
          padding-top: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
        }
      
        #mypic{
          width: 100%; 
          height: 50%;
          margin-top: 57px;
          margin-right: -50px;
        }

        #wel3{
          width:75%;
          margin-left:5%;
          margin-top:3%;
          position:absolute;
          z-index:1000;
        }

        #wel4{
          width:75%;
          margin-left:15%;
          margin-top:15%;
          position:absolute;
          opacity: 0.8;
          z-index:1000;
        }

        #wel5{
          width:75%;
          margin-left:7%;
          margin-top:20%;
          position:absolute;
          z-index:1000;
          opacity: 0.9;
        }

        #wel2{
          z-index:500;
          width:80%;
          opacity:0.9;
          position:relative;
          margin-left: 20%;
         }

        </style>
    </head>

    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #457B8B;width: 100%; " >
        <a class="navbar-brand" <?php echo "href='welcome.php?email=$email'";?>  style="padding-left: 35px;"><img src="images/finallogo.png" style="width: 100px; ;"/></a>
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
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='donate.php?email=$email'";?> style="text-decoration: none; color: white;">Donate</a></button>
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


        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="welimg/welcome1.png" class="d-block w-100" id="mypic" alt="...">
          </div>
      </div>
      </div>

      <div style="text-align: center;position: relative;margin-top: -38%;margin-bottom: 20%; margin-left:-2%">
        <a style="color: black;font-size: 3.1vw; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-shadow:2px 2px 2px #e6e6e6"><b>RELAX,<?php echo "$fn"?> <br/>WE ARE HERE TO HELP YOU </b></a><br/>
        </div>

    </br>

        <div>
          <h2 style= "margin-top: 8%; margin-left: 5%; font-family:sans-serif; font-size: 3.5vw; text-shadow: 2px 2px 2px #b3b3b3"><b>Our services</b></h2>
          <h4 style= "margin-left: 5%; color: #bfbfbf; font-family:sans-serif; font-size: 1.5vw;">Choose from our wide range of household services</h4><br/>
        </div>
            
        <div>
            <img src="welimg/welcome3.png" id="wel3"/>
        </div>
        
        <div style="margin-top:17%; margin-left:22%; position:relative; z-index:1001">
        <a style= "text-decoration:none;"<?php echo "href='./booking/AC.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:-17%;margin-left:53%;">
            AC / COOLER
        </h6>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/refrigerator.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:5.5%;margin-left:53%;">
            REFRIGERATOR
        </h6>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/WM.php?email=$email'";?>>
        <p style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:4.5%;margin-left:44%;">
           WASHING MACHINE
      </p>
        </a>
        <a style= "text-decoration:none;"<?php echo "href='./booking/waterpur.php?email=$email'";?>>
        <h1 style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:6.5%;margin-left:55%;">
           WATER PURIFIER
        </h1>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/geyser.php?email=$email'";?>>
        <h6 style= " color:black; font-size:1.4vw; font-weight:bold;margin-top:5%;margin-left:53%;">
           GEYSER
      </h6>
      </a>
      <a style= "text-decoration:none;" <?php echo "href='./booking/television.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:7%;margin-left:50%;">
           TELEVISION
      </h6>
      </a>
      <p style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:-26%; margin-left:-20%">
           ELECTRICAL APPLIANCES
        </p>
        </div>


       

        <div style=" margin-top:5% ;">
            <img src="welimg/welcome4.png" id="wel4"/>
            <img src="welimg/welcome6.png" id="wel2">
        </div>
        <div style="margin-top:-60%; margin-left:22%; position:relative; z-index:1001">
        <a style= "text-decoration:none;" <?php echo "href='./booking/electrical.php?email=$email'";?>>
        <p style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:-92%; margin-left:0%">
           ELECTRICAL
        </p>
        </a>
        <a style= "text-decoration:none;"<?php echo "href='./booking/plumbing.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:17%;margin-left:0%;">
            PLUMBING
        </h6>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/painting.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:13.5%;margin-left:7%;">
            PAINTING
        </h6>
        </a>
        <p style= "text-decoration:none; color:black; font-size:1.4vw; font-weight:bold;margin-top:-20.7%;margin-left:70%;">
           REPAIR
        </p>
       </div>
        
        <div>
            <img src="welimg/welcome5.png" id="wel5"/>
        </div>

         <div style="margin-top:17%; margin-left:22%; position:relative; z-index:1001">
        <p style= "color:black; font-size:1.4vw; font-weight:bold;margin-top:47.5%; margin-left:-10%">
           WASHING
        </p>
        <a style= "text-decoration:none;"<?php echo "href='./booking/fhousecleaning.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:-23%;margin-left:53%;">
        FULL HOUSE CLEANING
        </h6>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/bathroomcleaning.php?email=$email'";?>>
        <h6 style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:5%;margin-left:54%;">
        BATHROOM CLEANING
        </h6>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/kitchencleaning.php?email=$email'";?>>
        <p style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:8.5%;margin-left:55%;">
        KITCHEN CLEANING
       </p>
        </a>
        <a style= "text-decoration:none;"<?php echo "href='./booking/sofacleaning.php?email=$email'";?>>
        <h1 style= "text-decoration:none; color:white; font-size:1.4vw; font-weight:bold;margin-top:9.5%;margin-left:53%;">
        SOFA CLEANING
        </h1>
        </a>
        <a style= "text-decoration:none;" <?php echo "href='./booking/carpetcleaning.php?email=$email'";?>>
        <h6 style= " color:white; font-size:1.4vw; font-weight:bold;margin-top:8%;margin-left:51%;">
        CARPET CLEANING
        </h6>
        </a>
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
    </body>
</html>