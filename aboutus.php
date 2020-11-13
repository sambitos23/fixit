<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>About Us</title>
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

        *{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Raleway',sans-serif;
    font-size: 14px;
    font-weight: 400;
    color: #777;
    background-color: #a8dadc;

}
h1{
    font-size: 36px;
    color: #555;
    font-weight: bold;
}
h3{
    font-size: 24px;
    color: #333;
    font-weight: bold;

}
#team img{
    margin-top: -50px;
}
#team i{
    font-size: 26px;
    color: #457B8B;
}
#team p{
    font-weight: 500;
}
#team .card{
    border-radius: 0;
    box-shadow: 5px 5px 15px #003300;
    transition: all 0.3s ease-in;
    -webkit-transition: all 0.3s ease-in;
    -moz-transition: all 0.3s ease-in;
}
#team .card:hover{
    background: #457B8B;
    color: #fff;
    border-radius: 5px;
    border: none;
    box-shadow: 5px 5px 10px #339966;
}
#team .card:hover h3, #team .card:hover i{
    color: #fff;
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
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="feedback/feedbackhome.php" style="text-decoration: none; color: white;">Feedback</a></button>
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
        <br>
        <br>
    
<section id="team">
    <div class="container my-3 py-5 text-center">
        <div class="row mb-5">
            <div class="col">
                <h1>Our Team </h1>
                <p class="mt-3">Welcome to FIXit, your number one source for all services [ i.e: installation, maintenance, cleaning, repairs, etc.]. We're dedicated to giving you the very best of service, with a focus on [three characteristics, ie: dependability, customer service and uniqueness.]
Founded in 2020 by four members, FIXit has come a long way from its beginnings in a [starting location, ie: home's, office's, hotel's.]. We had a passion and dream to deliver and make life easy by helping people and futher generations, providing the best On-Demand Service. With your support and love it motivates us to work hard and customers expectations are the only inspiration and reason why we landed up into to a booming online service. We now serve customers all over [place, ie: the metrocities, possible covering every area], and are thrilled to be a part of this industry.

We hope you enjoy our services as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
<br>
Sincerely,<br>
<b>FIXit, Relax We are there.</b></p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="aboutimg/sambit.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
                        <h3>Sambit Saha</h3>
                        <h5>Web Developer</h5>
                        <p>Passionate, active learner having a keen interest in developing web applications.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="https://www.facebook.com/sambit.saha.969">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://www.instagram.com/creative_sambit/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="aboutimg/ila.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
                        <h3>ILa Sahu</h3>
                        <h5>Web Developer</h5>
                        <p>Passionate, active learner having a keen interest in developing web applications.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://www.instagram.com/ilasahu2016/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="aboutimg/anjan.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
                        <h3>Anjan Guha</h3>
                        <h5>Web Developer</h5>
                        <p>Passionate, active learner having a keen interest in developing web applications.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="https://www.facebook.com/anjan.guha.31/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://twitter.com/AnjanGuha1">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://www.instagram.com/njan_/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <img src="aboutimg/subhangi.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="">
                        <h3>Subhangi Mishra</h3>
                        <h5>Web Developer</h5>
                        <p>Passionate, active learner having a keen interest in developing web applications.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <div class="p-4">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href="https://www.instagram.com/__the_silent_jazz__/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>
<script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>



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
        <a href="https://www.instagram.com/creative_sambit"><img src="images/insta.png" style="width: 2%;margin-left: 80%;position: relative; margin-top: -44px;"></a>
        <a href="https://www.mi.co.in/"><img src="images/twitter.png" style="width: 2%;margin-left: 85%;position: relative; margin-top: -84px;"></a>
        <a href="https://www.google.com"><img src="images/whatsapp.png" style="width: 2%;margin-left: 90%;position: relative; margin-top: -126px;"></a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>