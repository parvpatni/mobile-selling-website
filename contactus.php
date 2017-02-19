<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
input[type=text], select {
    width: 450px;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
textarea,select {
    padding: 6px;
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
        <a class="navbar-brand" href="index.html">E-Store</a>
    </div>
	<div>
	<div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
         <li><<a href="#"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
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
  
<div style="padding:90px">
<div class="container"style="padding-bottom:70px">
<div class="row">
<div class="col-md-9">
<div><h2 style="margin:0">LIVE SUPPORT</h2></div>
<div style="font-size:20px">24 hours | 7 days a week | 365 days a year live technical support</div>
<br><div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at a layout.
The point of using Lorem Ipsem is that it has a more-or-less normal distribution of letters .There are many variations of passages
of Lorem Ipsum available ,but the majority have suffered alteration in some form,by injected humour,or randomised words
which dont look slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything 
embarrassing hidden in the middle of text.</div></div>
<div class="col-md-2">
<img src="http://codebox.internshala.com/project_new/images/contact.png">
</div></div>
<br>

<div class="row">
<div class="col-md-8">
<div><h2 style="margin:0">CONTACT US</h2></div>
<form>
<div style="font-size:15px;font-weight:bold">Name</div>
<input style="width:700px"type="text"name="yourname">
</form>
<br>
<form>
<div style="font-size:15px;font-weight:bold">E-mail</div>
<input style="width:700px"type="text"name="yourmail">
</form>
<br>
<form>
<div style="font-size:15px;font-weight:bold">Message</div>
<textarea rows="5" cols="96" name="description"></textarea>
</form>
<br>
<div><button type="button" class="btn btn-primary">Submit</button></div>
</div>

<div class="col-md-4">
<div><h2 style="margin:0">Company Information :</h2></div><br>
<div>500 Lorem Ipsum Dolor Sit,<br>22-56-2-9 Sit Amet, Lorem,<br>USA<br>Phone:(00) 222 666 444<br>Fax: (000) 000 00 00 0<br>Email: info@mycompany.com<br>Follow on: Facebook, Twitter
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
<td><a href="#">Login</a></td>
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