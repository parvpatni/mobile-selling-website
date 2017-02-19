<?php
session_start();
if($_SESSION["user"]!=null)
{}
else
{
	header('location:error.php');
}
require("connection.php");
$query="UPDATE items SET cart='0' WHERE id=".$_GET["id"];
$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
header('location:cart.php');
?>