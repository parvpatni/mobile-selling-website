<!DOCTYPE html>
<html lang="en">
<head>
  <title>Settings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
input[type=password], select {
    width: 450px;
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
         <li><a href="cart.html"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
         <li><a href="settings.html"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
		 <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
       </ul>
    </div>
  </div></div>
</nav>

<div class="container">
<div class="row" style="padding:80px">
<div class="body" style="padding-left:150px">
<div><h3>Change Password</h3></div>
<form>
<input type="password"name="oldpwd"placeholder="Old password">
</form>
<br>
<form>
<input type="password"name="newpwd"placeholder="New Password">
</form>
<br>
<form>
<input type="password"name="renewpwd"placeholder="Re-Type New Password">
</form><br>
<div><button type="button" class="btn btn-primary">Change</button></div>
</div>
</div>
</div>
</body>
</html>