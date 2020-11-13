<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Help</title>
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
          margin-top: 9%;
        }
        #box6{
          width: 100%;
          padding-top: 1%;
          padding-bottom: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
        }
        /* body{
            background-color: #ccffcc;
        } */

       

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
            background: #010615;
        }
        .box{
            position: relative;
            width: 205px;
            height: 205px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 40px;
            transition: 0.5s;
            background: #060c21;
            margin-bottom: 40%;
            margin-top: 20%;
        }
        .box .imgBx{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .box:hover{
            height: 300px;
        }
        .box .imgBx img{
            max-width: 100%;
            opacity: 0.1;
            transition: 0.5s;
        }

        .box:hover .imgBx img{
            opacity: 1;
        }
        .box:before{
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #fff;
            z-index: -1;
        }
        .box:after{
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: #fff;
            z-index: -1;
            filter: blur(40px);
        }
        .box:before,
        .box:after
        {
            background: linear-gradient(235deg,#772aff,#010615,#2196F3);
        }
        /* .box:nth-child(2):before,
        .box:nth-child(2):after
        {
            background: linear-gradient(235deg,#ff005e,#010615,#fbff00);
        }
        .box:nth-child(3):before,
        .box:nth-child(3):after
        {
            background: linear-gradient(235deg,#772aff,#010615,#2196F3);
        }
        .box:nth-child(4):before,
        .box:nth-child(4):after
        {
            background: linear-gradient(235deg,#772aff,#010615,#2196F3);
        }
         */
        .box .content{
            position: absolute;
            bottom: 0px;
            left: 10px;
            right: 10px;
            bottom: 10px;
            height: 90px;
            background: rgba(0,0,0,0.4);
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: 0.5s;
        }
        .box:hover .content{
            opacity: 1;
        }
        .box .content h2{
            font-size: 20px;
            color:#fff;
            font-weight: 500;
            line-height: 20px;
            letter-spacing: 1px;
        }
        .box .content h2 span{
            font-size: 14px;
            color:#fff;
            font-weight: 200;
            letter-spacing: 1px;
        }


    </style>

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
                    <a class="dropdown-item" style="color:black; " href="login.php">Login</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color:black; " href="registration.php">Sign Up</a>
                </div>
            </li>
          </ul>

        </div>

      </nav>
        <br>
        <br>
    
<div class="container" style="margin-top: 120px;">
<section style="font-size: larger; color:aquamarine;text-align:center;">Feel free to Contact Us<br>We are happy to help you!</section>
<div class="row" >
<div class="col-lg-3 col-md-6">
<div class="box" style="margin: auto;margin-top:20%;">
    <div class="imgBx">
        <img src="aboutimg/ila.jpg">
    </div>
    <div class="content">
        <h2>ILa Sahu<br><span>ilasahu2016@gmail.com</span></h2>
    </div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="box" class="col-md-3"style="margin: auto;margin-top:20%;">
    <div class="imgBx">
        <img src="aboutimg/sambit.jpg">
    </div>
    <div class="content">
        <h2>Sambit Saha<br><span>fix0896@gmail.com</h2>
    </div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="box" class="col-md-3" style="margin: auto;margin-top:20%;">
    <div class="imgBx">
        <img src="aboutimg/anjan.jpg">
    </div>
    <div class="content">
        <h2>Anjan Guha<br><span>guha.anjan1@gmail.com</span></h2>
    </div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="box" class="col-md-3" style="margin: auto;margin-top:20%;">
    <div class="imgBx">
        <img src="aboutimg/subhangi.jpg">
    </div>
    <div class="content">
        <h2>Subhangi Mishra<br><span>subhangimishra99@gmail.com</span></h2>
    </div>
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
        <a href="https://www.mi.co.in/"><img src="images/twitter.png" style="width: 2%;margin-left: 85%;position: relative; margin-top: -97px;"></a>
        <a href="https://www.google.com"><img src="images/whatsapp.png" style="width: 2%;margin-left: 90%;position: relative; margin-top: -145px;"></a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>