<?php 
	$con = mysqli_connect("MySQL-8.2", "root", "", "users");
	mysqli_query($con, "SELECT * FROM userdata WHERE email='{$_GET["email"]}' AND password='{$_GET["password"]}'");


	$result = $query -> fetch_assoc();

	if(mysqli_num_rows($query) == 0) {
		echo "Нет такого пользователя"
	} else {
		echo "Привет"  .  $result["name"];
	}
?>