<?php
session_start();
?>

<html>
<body>
<?php
if(sizeof($_GET)!=0)
{
$con = mysqli_connect("localhost","root","","db_name") or die(mysqli_error($con));
$a=$_GET['email'];
$b=$_GET['psd'];
$sql = "SELECT email,Password FROM `persons` WHERE `email` = '$a'";
$result= mysqli_query($con, $sql) or die("Error in Selection:".mysqli_error($con));
$row = mysqli_fetch_array($result);

if($row[0]==$a&&$row[1]==$b)
{
echo "done";
$_SESSION["user"]=$a;
header('location: home.php');
}
else
{
	header('location: error.php');
}
echo "<br/>";
$row = mysqli_fetch_array($result);
}
?>
</body>
</html>