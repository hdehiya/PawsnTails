<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
 <style>
 @import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: rgb(201,201,201);
  background: radial-gradient(circle, rgba(201,201,201,1) 0%, rgba(107,169,242,1) 100%);
  font-family: sans-serif;
}
.center {
  position: relative;
  padding: 50px;
  background: #fff;
  opacity: 0.6;
  border-radius: 10px;
  text-align: center;
}
.center h1 {
  font-size: 2em;
  padding: 10px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
}
.center .inputbox {
  align-content: center;
  align-self: center;
  align-items: center;
  width: 95%;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  width: 95%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {

  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="button"] {
  width: 95%;
  background: dodgerblue;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="button"] {
  background: linear-gradient(45deg, greenyellow, dodgerblue);
}
.submitbtn{
  width: 95%;
    color:gray;
}
.submitbtn:hover{
    transform:scale3d(1.2,1.2,1.2);
    transition-duration:1s;
    border-radius: 10px;
}

 </style>

    
</head>
<body>
<?php
include_once("config.php");

session_start();
if(isset($_POST['submit'])){
$username = ($_POST['username']);
$email = ($_POST['email']);
$mobile = ($_POST['mobile']);
$password = ($_POST['password']);
$cpassword = ($_POST['cpassword']);
$pass= password_hash($password, PASSWORD_BCRYPT);
$cpass= password_hash($password, PASSWORD_BCRYPT);

$emailquery = "SELECT email FROM registration WHERE email='$email'";
$query = mysqli_query($mysqli,$emailquery);
$emailcount = mysqli_num_rows($query);
if($emailcount!=0){
  ?>
    <script>
    alert("User already exists. We will contact you soon");
    </script>
    <?php
   }
else{
    if($password === $cpassword){
        $insertquery = "insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";
$iquery = mysqli_query($mysqli,$insertquery);
if($iquery){
?>
    <script>
    alert("Registration Successful");
    </script>
    <?php

  header("Location:volunteer.html"); 
}
else{
    ?>
    <script>
    alert("could not enter data, try again later!");
    </script>
    <?php
}
    }
    else{
        ?>
    <script>
    alert("passwords are not matching");
    </script>
    <?php
    }

}}
?>
<div class="center">
  <h1>Kindly fill in details</h1>
<form action="" method="POST">

  <div class="inputs">
  <div class="inputbox">
  <label for="fname">Name:</label><br>
  <input type="text"  id="fname" name="username" placeholder="Rahul" required ><br></div>

  <div class="inputbox">
  <label for="lname">Email:</label><br>
  <input type="text" id="lname" name="email" placeholder="example@gmail.com" required><br><br></div>

  <div class="inputbox">
  <label for="lname" >Phone number:</label><br>
  <input type="number" id="lname" name="mobile" placeholder="10 digit number" required><br><br></div>

  <div class="inputbox">
  <label for="lname">Password:</label><br>
  <input type="password" id="lname" name="password" required><br><br></div>

  <div class="inputbox">
  <label for="lname" >Re-enter password:</label><br>
  <input type="password" id="lname" name="cpassword" required><br><br></div>

<div class="inputbox submitbtn">
  <input type="submit" name="submit" value="Submit" ></div></div>
</form> 
</div>
</body>
</html>