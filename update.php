<?php
   session_start();
   if(isset($_GET['email'])){
       $_SESSION['email']= $_GET['email'];
   }
   else{
       header('location: dashboard.php');
   }

   $mainemail = $_GET['email'];
?>

<?php
         if(isset($_POST['email'])){

            $conn = new mysqli("localhost", "root","","project");

            if($conn->connect_error){
                die("connection error");
            }
             $fname=$_POST['fname'];
             $lname=$_POST['lname'];
             $ph=$_POST['ph_number'];
             $email=$_POST['email'];
             $pwd=$_POST['password'];
             $add=$_POST['address'];
             $DOB=$_POST['DOB'];
             $update = "update details set fname='$fname',lname='$lname',ph_no='$ph',email='$email',password='$pwd',address='$add',DOB='$DOB' where email='$mainemail'";
             if($conn->query($update)){
              echo "<script> alert('Your information updated successfully!');window.location.href = 'dashboard.php?email=$email';</script>";
             }else{
                 echo "user is not updated";
             }
             $mainemail=$_POST['email'];
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

    <title>Update</title>
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
          margin-top: -2px;
          
        }
        #box6{
          width: 100%;
          padding-top: 1%;
          padding-bottom: 1%;
          background-color: black;
          color: white;
          padding-left: 40px; 
        }

        #particles-js{
          height: 100%;
          /* background: #000066; */
          background-image: url(dashimg/dash2.png);
          background-size: cover;
        }
        body{
          margin: 0;
          padding: 0;
          height: 100vh;
        }
        input{
            border-radius:20px;
            border:1.5px solid #708090;
            width:100%;
            padding-left:0.8%;
            padding-top:0.2%;
            padding-bottom:0.2%;
            padding-right:0.8%;
            outline:none;    
        }
        .panel {
          font-family: 'Source Sans Pro';
          font-size: 15px;
          position: absolute;
          z-index: 10;
          top: 30%;
          left: 50%;
          margin: -110px 0 0 -100px;

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
            margin-left: 25%;

        }
    
    </style>

  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #457B8B;width: 100%; " >
        <a class="navbar-brand" <?php echo "href='welcome.php?email=$mainemail'";?>  style="padding-left: 35px;"><img src="images/finallogo.png" style="width: 100px; ;"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"> <a <?php echo "href='welcome.php?email=$mainemail'";?> style="text-decoration: none; color: white;">Home</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='service1.php?email=$mainemail'";?> style="text-decoration: none; color: white;">Services</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='blog1.php?email=$mainemail'";?> style="text-decoration: none; color: white;">Blog</a></button>
              </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a <?php echo "href='donate.php?email=$mainemail'";?> style="text-decoration: none; color: white;">Donate</a></button>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-outline-dark dropdown-toggle" id="syl1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                 Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(197, 191, 191); margin-left: 0px;padding-left:0px ">
                    <a class="dropdown-item" style="color: black; " <?php echo "href='dashboard.php?email=$mainemail'";?>>Dashboard</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item " style="color: black;" href="" >Update</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: black; " <?php echo "href='./feedback/index1.php?email=$mainemail'";?>>Feedback Form</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color: black; " href="homepage.php">Sign out</a>
                </div>
            </li>
          </ul>

        </div>

      </nav>

      <div id="particles-js">
      <div class="panel" style="color:white;">
        <h1 style="text-align: center;"><b>Update</b></h1>
        <form method="POST" action="">
        <label style="color:white; font-size:3.4mm; font-weight:500;">FIRST NAME</label> </br>
        <input type="text" name="fname" required value="<?php echo $_GET['fn']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">LAST NAME</label> </br>
        <input type="text" name="lname" required value="<?php echo $_GET['ln']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">CONTACT NO.</label> </br>
        <input type="number" name="ph_number" maxlength="10" required value="<?php echo $_GET['ph']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">EMAIL ID</label> </br>
        <input type="email" name="email" required value="<?php echo $_GET['em']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">PASSWORD</label> </br>
        <input type="password" name="password" required value="<?php echo $_GET['pwd']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">ADDRESS</label> </br>
        <input type="text" name="address" required value="<?php echo $_GET['add']?>"/></br>
        <label style="color:white; font-size:3.4mm; font-weight:500">DATE OF BIRTH</label> </br>
        <input type="date" name="DOB" required value="<?php echo $_GET['DOB']?>"/></br>
        <input type="submit" class="btndesign" value="update"/>
       </form>

     </div>  
      </div>
        
      <script type="text/javascript" src="particles.js"></script>
      <script type="text/javascript" src="app.js"></script>

        
     

      <div id="box5"> 
      <a <?php echo "href='aboutus1.php?email=$mainemail'";?> style="color: white; font-size: 1.3vw;">About Us</a>
      <a <?php echo "href='terms&condition1.php?email=$mainemail'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Terms & condition</a>
      <a <?php echo "href='privacypolicy1.php?email=$mainemail'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Privacy Policy</a>
      <a <?php echo "href='help1.php?email=$mainemail'";?> style="color: white; margin-left: 60px; font-size: 1.3vw;">Help</a>
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