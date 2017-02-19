<?php 
session_start();
if($_SESSION["user"]!=null)
{}
else
{
	header('location:error.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
         <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
         <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
		 <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
       </ul>
    </div>
  </div></div>
</nav>

<div style="padding:80px">
<div class="row">

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Micromax Bolt</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e1.gif" style="padding-left:65px">
<p>4.2' Screen, snap-dragon processor, 1GB RAM, 4GB Internal memory, Rs 5000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=1&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(1);
?>
</a></button></div>
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
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=2&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(2);
?>
</a></button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Iphone 4</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e3.png" style="padding-left:65px">
<p>4' Screen, snap-dragon processor, Android 3.2, 1GB RAM, 4GB Internal memory, Rs 4000.</p>
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=3&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(3);
?>
</a></button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Iphone 3gs</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e4.jpg" style="padding-left:65px">
<p>3.7' Screen, snap-dragon processor, Android 4.0, 1GB RAM, 4GB Internal memory, Rs 4000</p>
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=4&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(4);
?>
</a></button></div>
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
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=5&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(5);
?>
</a></button></div>
</div>
</div>
</div>

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading" align="center"><b>Lenovo A390</b></div>
<div class="panel-body">
<img src="http://codebox.internshala.com/project_new/images/e6.jpg" style="padding-left:65px">
<p>3.2' AMOLED Screen, 1GB RAM, Qualcom processor, 2GB Internal Memory, 5MP camera, Rs 4000</p>
<div><button type="button" class="btn btn-primary" style="width:350px"><a href="home.php?id=6&add=add" style="color:white" name="add" value="add"><?php
require_once("added.php");
echo message(6);
?>
</a></button></div>
</div>
</div>
</div>

</div>
</div>

</body>
</html>