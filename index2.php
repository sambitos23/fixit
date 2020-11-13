<?php
   session_start();
   if(isset($_GET['email'])){
       $_SESSION['email']= $_GET['email'];
   }
   else{
       header('location: login.php');
   }
?>





<html>
  <head></head>
  <body>
    <input type="email" name="email" value="<?php echo $_GET['email']?>"/>
  </body>
</html>



<?php
$conn = new mysqli("localhost", "root","","project");

if($conn->connect_error){
    die("connection error");
}

$email = $_GET['email'];
$account_query = "select * from details where email='$email'";
$account_view = $conn ->query($account_query);
echo "<table>";
while ($row = $account_view->fetch_assoc()){
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."First Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['fname']."</td>";
   echo"</tr>";
   echo"<tr>"; 
    echo "<td style='border: 1px solid black;'>"."Last Name&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['lname']."</td>";
   echo"</tr>";
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."Phone No. &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['ph_no']."</td>";
   echo"</tr>";
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['email']."</td>";
   echo"</tr>";
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['password']."</td>";
   echo"</tr>"; 
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."Address &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['address']."</td>";
   echo"</tr>"; 
   echo"<tr>";
    echo "<td style='border: 1px solid black;'>"."Date of Birth&nbsp&nbsp&nbsp&nbsp".$row['DOB']."</td>";
   echo"</tr>";
}
echo "</table>";

?>