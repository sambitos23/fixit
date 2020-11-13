<?php
session_start();

?>


<!doctype html>
<html lang="en">
    <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
        <title>User Registration</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />
        <style>
        body{
            background-image: url("regimage/style4.png");
            background-size: contain;
           
            
            
        }
        #syl1{
          color: white;
          border: none;
          margin-left: 40px;
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
        .register{
            width:100%;
            padding-left: 2%;
            /* padding-top: 10%; */
        }
        input{
            border-radius:20px;
            border:1.5px solid #708090;
            width:80%;
            padding-left:0.8%;
            padding-top:0.2%;
            padding-bottom:0.2%;
            padding-right:0.8%;
            outline:none;
        }
        .btndesign
        {
            border-radius:20px;
            border:1.5px solid #708090;
            background-color: #8092B2;
            color: white;
            width:40%;
            padding-left:0.8%;
            padding-top:0.2%;
            padding-bottom:0.2%;
            padding-right:0.8%;
            outline:none;
            margin-top: 5%;
            margin-left: 18%;

        }
        #box5{
          width: 100%;
          padding-top: 0.5%;
          padding-bottom: 0.5%;
          background-color: rgb(61, 59, 59);
          color: white;
          padding-left: 40px;
          position: relative;
          top: 63px;
        }
        #box6{
          width: 100%;
          padding-top: 1%;
          padding-bottom: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
          position: relative;
          top: 63px;
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
        
        <div class="container">
          <div class="row">
                <div class="col-lg-6">
                    <div class="register">
                        <form action = "registration.php" method = "post">
                        <br/><br/><br/>
                            <h1 style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; color: white; font-size:45; font-weight:600; text-shadow:2px 2px 5px #4d4d4d">CREATE ACCOUNT</h1>
                            <br/>
                            <input type="text" name="FirstName" placeholder="First name" required/> </br></br></br>
                            <input type="text" name="LastName" placeholder="Last name" required/> </br></br></br>
                            <input type="address" name="Address" placeholder="Address" required/> </br></br></br>
                            <input type="number" name="Contact" placeholder="Contact No." maxlength="10" required/> </br></br></br>
                            <input type="email" name="Email" placeholder="Email Address" required/> </br></br></br>
                            <input type="password" name="Password" placeholder="Password" required/> </br></br></br>
                            <input type="text" name="DOB"placeholder="Date of Birth" onfocus="(this.type='date')"  required/> </br></br></br>
                            <input  class="btndesign" type="submit"name="submit" value="Sign Up" />


<?php
$conn = new mysqli("localhost", "root","","project");

if($conn->connect_error){
    die("connection error");
}

if(isset($_POST['submit'])){
  $fname = $_POST["FirstName"];
  $lname = $_POST["LastName"];
  $ph_no = $_POST["Contact"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];
  $address = $_POST["Address"];
  $dob = $_POST["DOB"];


  $query = "insert into details(fname, lname, ph_no, email, password, address, DOB) values('$fname', '$lname', '$ph_no', '$email', '$password', '$address', '$dob');";
  if(mysqli_query($conn,$query)){
    echo '<script>alert("You have successfully registered!"); window.location.href = "login.php"</script>';
    
  }else{
    echo '<script>alert("This email id is already used!");</script>';
  }
  mysqli_close($conn);
}
?>

                        </form>
                    </div>
                </div>
                <div class="col-lg-6"> <img src="regimage/style1.png" 
                    style="width:100%;position:relative; margin-top: 20%; opacity: 0.9;">
                    
                </div>
        
        </div>
        </div>
        

        </br>
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
    </body>
</html>