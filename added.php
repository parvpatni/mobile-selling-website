<?php
function message($id)
{
	require("connection.php");
	$query="SELECT cart FROM items WHERE id	=".$id;
	$result= mysqli_query($con, $query) or die("Error".mysqli_error($con));
	while($row=mysqli_fetch_array($result))
	{
		if($row['cart']==0)
		{
			if($_GET!=null)
			if($_GET["id"]==$id)
			{
			$quer="UPDATE `items` SET `cart` = '1' WHERE `items`.`id` =".$_GET["id"];
			mysqli_query($con, $quer) or die("Error in Insertion: ".mysqli_error($con));
			return "Added!";
			}
			return "Add to cart";
		}
		else
		{return "Added!";
		}
	}
}
?>