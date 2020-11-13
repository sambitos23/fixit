<?php 
$con = mysqli_connect("localhost", "root", "", "project"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$address = $_POST['address'];
$service = $_POST['service'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `address`, `service`, `feedback`, `suggestions`) VALUES ('','$name','$address','$service','$view','$comments')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';


?>