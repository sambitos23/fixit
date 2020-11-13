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


<html>
   <head>
     <style>
        input{
            border-radius:20px;
            border:1.5px solid #708090;
            width:40%;
            padding-left:0.8%;
            padding-top:0.2%;
            padding-bottom:0.2%;
            padding-right:0.8%;
            outline:none;    
        }
     </style>    
   </head>

   <body>
       <form method="POST" action="">
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500;">FIRST NAME</label> </br>
        <input type="text" name="fname" required value="<?php echo $_GET['fn']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">LAST NAME</label> </br>
        <input type="text" name="lname" required value="<?php echo $_GET['ln']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">CONTACT NO.</label> </br>
        <input type="number" name="ph_number" required value="<?php echo $_GET['ph']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">EMAIL ID</label> </br>
        <input type="email" name="email" required value="<?php echo $_GET['em']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">PASSWORD</label> </br>
        <input type="password" name="password" required value="<?php echo $_GET['pwd']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">ADDRESS</label> </br>
        <input type="text" name="address" required value="<?php echo $_GET['add']?>"/></br>
        <label style="color:#2F4F4F; font-size:3.4mm; font-weight:500">DATE OF BIRTH</label> </br>
        <input type="date" name="DOB" required value="<?php echo $_GET['DOB']?>"/></br>
        <input type="submit" value="update"/>
       </form>
       
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
                echo "user updated successfully";
             }else{
                 echo "user is not updated";
             }
             $mainemail=$_POST['email'];
         }
       ?>
       <a <?php echo "href='dashboard.php?email=$mainemail'";?>>back</a>
   </body>
</html>