
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Index</title>
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
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
         <li><a href="#"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		 <li><a href="aboutus.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a></li>
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
    
  
<div style="padding:80px">
<div class="row">

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Micromax Bolt</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e1.gif" style="padding-left:65px">
<p>4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Nokia 215</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e2.jpg" style="padding-left:65px">
<p style="margin-bottom:0">Numeric keypad, 2MP Camera, Internet browsing,</p> 
<p>Rs 4000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Iphone 4</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e3.png" style="padding-left:65px">
<p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Iphone 3gs</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e4.jpg" style="padding-left:65px">
<p>3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Nokia 216</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e5.jpg" style="padding-left:65px">
<p style="margin-bottom:0">Numeric keypad, 4MP Camera, Internet browsing, </p>
<p>SMS/MMS, Rs 4000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Lenovo A390</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e6.jpg" style="padding-left:65px">
<p>3.2' AMOLED Screen, 1GB RAM, Qualcom processor, 2GB Internal Memory, 5MP camera, Rs 4000</p>
<div><button type="button" class="btn btn-primary" style="width:350px">Order Now!</button></div>
</div>
</div>
</div>

</div>
</div>

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