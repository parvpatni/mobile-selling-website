<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
input[type=text],input[type=number],input[type=password], select {
    width: 350px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="container">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">E-Store</a>
    </div>
	<div>
	<div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
         <li><a href="#"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		 <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
		 <li><a href="contactus.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a></li>
       </ul>
    </div>
  </div></div>
</nav>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">LOGIN</h4>
        </div>
        <div class="modal-body">
          <p>Don't have an account? <a href="signup.php">Register</a></p>

<form action="login.php" method="get">
<input type="text"name="email"placeholder="Email">
<br><br>
<input type="password"name="psd"placeholder="Password"><br><br>
<div><input type="submit" value="submit"/> 
</div>
</form>		
        </div>	
      </div>
      
    </div>
  </div>

<div class="container-fluid">
<div style="padding:80px">
<div class="row">

<div class="col-md-7">
<div class="body">
<img src="http://codebox.internshala.com/project_new/images/yess.jpg" style="padding-left:40px">
</div>
</div>

<div class="col-md-5">
<div class="body" style="padding-left:70px">
<div><h1>SIGN UP</h1>

<form action="" method="get">
<input type="text"name="name"placeholder="Name"/>
<br><br>
<input type="text"name="email"placeholder="E-mail"/>
<br><br>
<input type="password"name="psd"placeholder="Password"/>
<br><br>
<input type="number"name="contact" placeholder="Contact"/>
<br><br>
<input type="text"name="city"placeholder="City"/>
<br><br>
<input type="text"name="address"placeholder="Address"/>
<br><br>
<div  style="padding-left:290px"><input type="submit" value="submit"/></div>
</form>
<br>

</div>
</div>
</div>
</div>
</div>
</div>

<?php
if(sizeof($_GET)!=0)
{
$con = mysqli_connect("localhost","root","","db_name") or die(mysqli_error($con));
$a=$_GET['name'];
$b=$_GET['email'];
$c=$_GET['psd'];
$d=$_GET['contact'];
$e=$_GET['city'];
$f=$_GET['address'];
$sql = "INSERT INTO persons VALUES(DEFAULT,'$b','$a','$c','$d','$e','$f')"; 
mysqli_query($con, $sql) or die("Error in Insertion: ".mysqli_error($con));
}

?>

<nav class="navbar navbar-default navbar-bottom" style="margin:0px"> 
  <div style="padding-left:100px;height:100px;background-color:#E5E4E2">
  <div class="container-fluid" style="margin:0px;padding:0px">
 <table width="100%"border="0">
 <tr>
<td style="font-size:25px">Information</td>
<td style="font-size:25px">My Account</td>
<td style="font-size:25px">Contact Us</td>
</tr>
<tr>
<td><a href="aboutus.php">About Us</a></td>
<td><a href="#"  data-toggle="modal" data-target="#myModal">Login</a></td>
<td style="color:blue">+91-123-000000</td>
</tr>
<tr>
<td><a href="contactus.php">Contact Us</a></td>
<td><a href="signup.php">Sign Up</a></td>
</tr>
</table>
  </div>
</nav>
</body>
</html>