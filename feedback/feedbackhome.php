<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Feedback</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/logo2.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <style>
         body {
            background-color: #81b29a;
          }

        #box5{
          width: 100%;
          padding-top: 0.5%;
          padding-bottom: 0.5%;
          background-color: rgb(61, 59, 59);
          color: white;
          padding-left: 40px;
          margin-top: 5%;
          
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
       
    </style>
    
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #457B8B;width: 100%; " >
        <a class="navbar-brand" href="../homepage.php" style="padding-left: 35px;"><img src="images/finallogo.png" style="width: 100px; ;"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"> <a href="../homepage.php" style="text-decoration: none; color: white;">Home</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="../service.php" style="text-decoration: none; color: white;">Services</a></button>
            </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="../blog.php" style="text-decoration: none; color: white;">Blog</a></button>
              </li>
            <li class="nav-item active">
                <button class="btn btn-outline-dark" id="syl1" type="button"><a href="feedbackhome.php" style="text-decoration: none; color: white;">Feedback</a></button>
            </li>
            <li class="nav-item dropdown">
                <a class="btn btn-outline-dark dropdown-toggle" id="syl1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
                 Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: rgb(197, 191, 191); margin-left: 35px; ">
                    <a class="dropdown-item" style="color: black; " href="../login.php">Login</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" style="color:black; " href="../registration.php">Sign Up</a>
                </div>
            </li>
          </ul>

        </div>

      </nav>
       
<br><br><br><br>
<h1 style="text-align: center;"><b><u>Some valuable words from our customers</u></b></h1></br></br>
<div class="container" >
<div class="row" style="row-gap: 25px;">
<?php
$conn = new mysqli("localhost", "root","","project");

if($conn->connect_error){
    die("connection error");
}

$query = "select * from poll order by rand() limit 6;";
$result = $conn->query($query);

while( $record = mysqli_fetch_assoc($result) ) {
?>

<div class="col-lg-4 col-sm-6 portfolio-item">
<div class="card h-100"  style="border-color: black;background-color: #f2cc8f;border-radius: 2%;width:90%;margin:auto; ">
<img class="card-img-top img-fluid" src="images/feedback.jpg">
<div class="card-block" style="background-color: #f2cc8f;border-radius: 2% ;">
<h5 class="card-title" style="padding-left: 10px; padding-top:5px;text-align:center;">Feedback Information</h5><hr>
<p class="card-text"style="padding-left: 10px"><b style="color:#006666;"><?php echo $record['name']; ?></b></p>
<p class="card-text"style="padding-left: 10px"><b>Address:</b> &nbsp <?php echo $record['address']; ?></p>
<p class="card-text"style="padding-left: 10px"><b>Service Booked:</b> &nbsp <?php echo $record['service']; ?></p>
<p class="card-text"style="padding-left: 10px"><b>Feedback:</b> &nbsp <?php echo $record['feedback']; ?></p>
<p class="card-text"style="padding-left: 10px;padding-bottom:20px"><b>Suggestions:</b> &nbsp <?php echo $record['suggestions']; ?></p>

</div>
</div>
</div>

<?php } 
$conn->close();
?>
</div>
</div>

       
  <div id="box5"> 
      <a href="../aboutus.php" style="color: white; font-size: 1.3vw;">About Us</a>
      <a href="../terms&condition.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Terms & condition</a>
      <a href="../privacypolicy.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Privacy Policy</a>
      <a href="../help.php" style="color: white; margin-left: 60px; font-size: 1.3vw;">Help</a>
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
        <a href="https://www.facebook.com"><img src="../images/fb.png" style="width: 2%;margin-left: 75%;position: relative; margin-top: 0px;"></a>
        <a href="https://www.instagram.com/creative_sambit"><img src="../images/insta.png" style="width: 2%;margin-left: 80%;position: relative; margin-top: -50px;"></a>
        <a href="https://www.mi.co.in/"><img src="../images/twitter.png" style="width: 2%;margin-left: 85%;position: relative; margin-top: -98px;"></a>
        <a href="https://www.google.com"><img src="../images/whatsapp.png" style="width: 2%;margin-left: 90%;position: relative; margin-top: -146px;"></a>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
