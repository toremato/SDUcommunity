<?php

	include 'database.php';
	$username = $_POST['username'];
	$query = "SELECT username FROM users WHERE username = '$username' LIMIT 1";
	$result = $database->query($query);
	$taken = mysqli_num_rows($result);

	if ($taken == 1) {
		echo "sorry, username is not available";
	}else{
		echo "username is ok";
	}
	
	// if(mysqli_num_rows($))

	// if(isset($_POST['username'])){
	// 	$username = $_POST['username'];

	// 	$sql_check = mysqli_query("select id from members where username='".$username."'") or die(mysqli_error());

	// 	if(mysqli_num_rows($sql_check)){
	// 		echo 'FUUUUCK';
	// 	}else{
	// 		echo 'OK';
	// 	}

	// }