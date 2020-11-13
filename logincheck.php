<?php
$conn = new mysqli("localhost", "root","","project");

if($conn->connect_error){
    die("connection error");
}

$email = $_POST['email'];
$password = $_POST['password'];
$login_query = "select * from details where email='$email'and password ='$password'";
$login_result = $conn->query($login_query);

// if(mysqli_num_rows($login_result)>0){
//     $_SESSION['login']=$_POST['email'];
//     echo "<script> document.location = 'dashboard.php';</script>";
// }else{
//      echo '<script>alert("User email or password is invalid"); window.location.href = "login.php"</script>';
//  }

$loggedin = false;
while($row = $login_result->fetch_assoc()){
    $loggedin = true;
}

if($loggedin == true){
    echo "<script> document.location = 'welcome.php?email=$email';</script>";
}else{
    echo '<script>alert("User email or password is invalid"); window.location.href = "login.php"</script>';
}

?>