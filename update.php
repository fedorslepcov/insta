<?php 
	$con = mysqli_connect('MySQL-8.2', 'root','','insta');
		
	mysqli_query($con, "UPDATE posts SET texts = '{$_GET["text"]}' , img = '{$_GET["img"]}' WHERE id='{$_GET["id"]}'");
	header("Location: index.php");



	
?>