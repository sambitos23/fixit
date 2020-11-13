<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>FIXit</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <style>
         body {
              background-color:  rgb(255, 255, 255);
          }
         #box1{
             width: 75%;
             padding-top: 0.7%;
             padding-left: 7%;
             text-align: left;
             background-color: white;
             color: black;
             position: relative;
             opacity: 0.5;
             border-top-right-radius: 25px;
             z-index: 1000;

         }
         #box3{
             width: 75%;
             padding-top: 0.7%;
             padding-bottom: 2%;
             padding-left: 7%;
             text-align: left;
             background-color:white;
             color: black;
             position: relative;
             border-bottom-right-radius: 25px;
             z-index: 1000;
             opacity: 0.8;
         }
         #box2{
             width: 70%;
             padding-top: 20%;
             padding-bottom: 10%;
             padding-left: 7%;
             text-align: left;
             background-color: rgb(250, 195, 240);
             color: black;
             position: relative;
             z-index: 500;
             opacity: 0.9;
             border-bottom-left-radius: 25px;
             border-top-left-radius: 25px;
             margin-left: 30%;
             margin-top: -40%;
         }

         #box4{
             width: 75%;
             height: 70%;
             padding-top: 20%;
             padding-bottom: 30%;
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
          margin-top: 13%;
          
        }
        #box6{
          width: 100%;
          padding-top: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
        }
         #syl1{
          color: white;
          border: none;
          margin-left: 40px;
         }
        #mypic{
          width: 100%; 
          height:  30%;
          background-size: cover;
          margin-top: 57px;
          margin-right: -50px;
        }
        #btn{
          background-image: url('./images/search.png');
          background-position: center;
          background-color: rgb(255, 255, 255);
          width: 1.5%;
          padding-top: 1%;
          background-repeat: no-repeat;
          border-radius: 50%;
        }

    </style>

    <script>
      function mytext(){
        var city = document.getElementById("text").value;
        if(city=="kolkata"){
          alert("Relax! we provide services in Kolkata");
        }
        else if(city=="mumbai"){
          alert("Relax! we provide services in Mumbai");
        }
        else if(city=="bhubaneswar"){
          alert("Relax! we provide services in Bhubaneswar");
        }
        else if(city=="chennai"){
          alert("Relax! we provide services in Chennai");
        }
        else if(city=="delhi"){
          alert("Relax! we provide services in Delhi");
        }
        else if(city=="bangalore"){
          alert("Relax! we provide services in Bangalore");
        }
        else if(city=="ahmedabad"){
          alert("Relax! we provide services in Ahmedabad");
        }
        else if(city=="hyderabad"){
          alert("Relax! we provide services in Hyderabad");
        }
        else if(city=="pune"){
          alert("Relax! we provide services in Pune");
        }
        else{
        alert("We will come soon over here");
        }
      } 
    </script>
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #457B8B;width: 100%; " >
        <a class="navbar-brand" href="homepage.php" style="padding-left: 35px;"><img src="images/finallogo.png" style="width: 100px; ;"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"> <a href="homepage.php" style="text-decoration: none; color: white;">Home</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="service.php" style="text-decoration: none; color: white;">Services</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="blog.php" style="text-decoration: none; color: white;">Blog</a></button>
              </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="./feedback/feedbackhome.php" style="text-decoration: none; color: white;">Feedback</a></button>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-outline-dark dropdown-toggle" id="syl1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                 Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(197, 191, 191); margin-left: 35px; ">
                    <a class="dropdown-item" style="color: black; " href="login.php">Login</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: black; " href="registration.php">Sign Up</a>
                </div>
            </li>
          </ul>

        </div>

      </nav>
       

      <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-interval="3000">
            <img src="./images/as.jpg" class="d-block w-100" id="mypic" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="./images/ac.jpg" class="d-block w-100" id="mypic" alt="...">
          </div>
          <div class="carousel-item" data-interval="3000">
            <img src="./images/maxresdefault2.jpg" class="d-block w-100" id="mypic" alt="...">
          </div>
        </div>


        <div style="text-align: center;position: relative;margin-top: -35%;margin-bottom: 20%; ">
          <a style="color: #ffffff;font-size: 5vw; -webkit-text-stroke: 1px black;"><b> Relax, we are there </b></a><br/><br/>
          <input id="text" type="text" placeholder=" Search your city" style="border-radius: 25px; width: 50%;padding-left: 10px;font-size: 1vw;outline:none;" />
          <button id="btn" onclick="mytext()"></button>
        </div>

      </div>

    </div>
    
    <div id="box1">
        <h4 style="color: teal; font-size: 2vw;">Features</h4>
        <h3 style=" font-size: 3vw;" >All Services In Your Hand</h3><br/>
      </div>

    <div id="box3">
      <img src="images/water.png" style="margin-left: -2%; width: 14%; ">
        <img src="images/2.jpg" style="margin-left: 8%;  width: 18%;">
        <img src="images/3.jpg" style="margin-left: 8%;  width: 18%; ">
        <img src="images/4.jpg" style="margin-left: 8%;  width: 18%; "><br/><br/>
        <img src="images/5.png" style="margin-left: 10%;  width: 14%; ">
        <img src="images/6.png" style="margin-left: 12%;  width: 14%; ">
        <img src="images/7.png" style="margin-left: 12%;  width: 14%; "><br/><br/><br/>
        <h4 style="color: teal; font-size: 2vw;margin-left: 60%;">Discover</h4>
    </div>

    
    <div style="position: relative;z-index: 1000;margin-top: -30%">
      <img src="images/wash.png" style="width:20%; margin-left: 70%; ;">
   </div>



   <div style="position: relative; z-index: 1000;">
    <img src="images/delivery.png" style="width:25%;  margin-left: 7%; margin-top: 2%;">
   </div>
   
   <div id="box2">
    
      <h3 style=" font-size: 3vw; margin-left: 17%;margin-top: -5%;" >Find the Technicians near You</h3><br/>
      <ul style="margin-left: 15%;">
        <li>
            <p style=" font-size: 1.5vw; "> Find a service man and book your appointement</p>
        </li>
        <li>
            <p style=" font-size: 1.5vw; ">24x7 at your service</p>
        </li>
        <li>
            <p style=" font-size: 1.5vw; ;">Top rated and trained professionals</p>
        </li>
      </ul>
    </div>

    <div id="box4" style="margin-bottom: 1.7%;">
      <h2 style="margin-top: -20%;margin-left: 30%;font-size: 3vw;"><b>What they says about Us</b></h2>  
    </div>

    <div style="margin-top: -30%;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" style="width: 28%; margin-left: 37%; position: relative;z-index: 1000;">
        <div class="carousel-item active">
        <a href="./feedback/feedbackhome.php"><img src="images/fed2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed3.png" class="d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" style="width: 28%; margin-left: -5%;margin-top: -14.7%;position: relative;z-index: 1000;">
        <div class="carousel-item active">
        <a href="./feedback/feedbackhome.php"><img src="images/fed4.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed5.png" class="d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner" style="width: 20%;height: 218px; margin-left: 80%;margin-top: -14.7%;position: relative;z-index: 1000;">
        <div class="carousel-item active">
          <a href="./feedback/feedbackhome.php"><img src="images/fed12.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed13.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="images/fed14.png" class="d-block w-100" alt="..."></a>
        </div>
      </div>
    </div>
  </div>
            
    <div id="box5"> 
      <a href="aboutus.php" style="color: white; font-size: 1.3vw;">About Us</a>
      <a href="terms&condition.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Terms & condition</a>
      <a href="privacypolicy.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Privacy Policy</a>
      <a href="help.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Help</a>
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
