<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['errormessage']))
{
$errormsg1=$_SESSION['errormessage'];
}
else if(isset($_SESSION['errormessage1']))
{
$errormsg1=$_SESSION['errormessage1'];
}
?>
<html>
    <head>
    <!-- linking of CSS and JS files -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous">
            </script>
           <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
           <link rel="stylesheet" href="dashboardstyle.css">
           <link rel="stylesheet" href="/resources/demos/style.css">
           <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
           <script src="dashboardscript.js"></script>
           <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
           <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
<body style=" background-image: url('img/cover_dashboard.jpg'); background-size: cover;"> 
<?php

if(!empty ($errormsg1))
{
  echo "<label>".$errormsg1."</label>";
  session_unset();
}
?>

<header id="head">
  <!-- <h1>header start here</h1> -->   
  <img src="StockMarket.png" width="100px;" height="50px;">
  <h1 style="margin-left: 6px;margin-top :0px; margin-right :0px; margin-bottom :0px; ">StockMarket</h1>
</header>
<!-- middle contents start here  -->
<div id="form_container" style="border:0px solid rgb(22, 14, 14);width: 40%;" class="form-group">
<!-- form starting from here -->
<form action="submitdetails.php" method="POST">
  <div class="container">  
    <label for="name" ><b>Name</b></label>
    <br>
    <input type="text" placeholder="Enter name" id="name" name="Sname" size="3" required class="form-control">
    <label id="errorname" class="errormsg"></label>
    <label id="noerrorname" class="noerror"></label>
    <br>
    <label for="email"><b>Email</b></label>
    <br>
    <input type="text" placeholder="Enter Email" id="emailID" name="Semail" class="form-control" required>
    <label id="erroremail" class="errormsg"></label>
    <label id="noerroremail" class="noerror"></label>
    <br>
    <label for="phone"><b>Phone</b></label>
    <br>
    <input type="number" placeholder="Enter contact details" id="phone" name="Sphone" class="form-control" required>
    <label id="errorphone" class="errormsg"></label>
    <label id="noerrorphone" class="noerror"></label>
    <br>
     <label for="dob"><b>Gender</b></label>
    <br>
    <div id="radio_container">
    <input type="radio" value="M" name="gender" ><label id="cnt">Male</label>
    <input type="radio" value="F" name="gender"><label id="cnt">Female</label>
    <br>
  </div>
  <br>
  <input type="submit" id="main_button" class="btn btn-primary">
</form>
</div>
<button class="Adminbtn" id="admin_button" >Admin</button>
</div>
<!-- footer start from here -->
<footer id="foot">
   <label> <h1 style="color:black; font-size:30px;">Contact Us :+91-998989888</h1></label><br>
   <label> <h1 style="color:black;font-size:30px;" >Email Us :fdfufhdf@gmail.com</h1></label>
  </footer>
  <!-- dialog box elements -->
  <div id="dialog_admin" title="Admin Login" style="visibility:hidden; background-image:url('img/cover_dashboard.jpg') ;">
      <label for="Username" ><b>User Name</b></label>
      <br>
      <input type="text" placeholder="Enter name" id="Adminname" size="3" required>
      <br>
      <label for="password_admin" ><b>password</b></label>
      <br>
      <input type="password" placeholder="Enter Password" id="Password" size="3" required>
      <br>
      <button id="admin_submit_button">submit</button>
    </div>
<!-- dialog box for email validation -->
<div id="dialog" title="Basic dialog" style="visibility:hidden;">
    <label>
      are you sure your with your email
    </label>
    <button id="dial_sub">submit</button> <button id="dial_res">reset</button>
  </div>
  </div>
</div>
</body>
</html>