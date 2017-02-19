<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
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
		 <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
       </ul>
    </div>
  </div></div>
</nav>

<div class="container" style="padding:90px;width:700px">
<table class="table"> 
<thead>
<tr>
<th>Item number</th>
<th>Price</th>
</tr>
</thead>

<?php
require("connection.php");
$sql = "SELECT id,price FROM items WHERE cart=1";
$result= mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
$sum=0;
while($row = mysqli_fetch_array($result))
{
$sum=$sum+$row["price"];
$id=$row["id"].",";
echo "<tr><td>"."#".$row["id"]."</td><td>".$row["price"]."</td><td><a href='remove.php?id={$row['id']}'style='color:#0000ff;'>Remove</a></td></tr>";
}
echo "<tr><td>Total</td><td>".$sum."</td><td><a href='success.php?itemsid=".$id."'class='btn btn-primary'>Confirm</a></td></tr>";
?>
</body>
</html>