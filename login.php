<?php
	include('database.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password'";
	$result = $database->query($query);
	if(mysqli_num_rows($result)>0){
	 	session_start();
		$row = $result->fetch_array();

		// for ($i=0; $i < $row.count() ; $i++) { 
		// 	$_SESSION['$row[i]'] = $row['$row[i]'];
		// }
		
		// $_SESSION['id'] = $row['id'];
		// $_SESSION['username']=$row['username'];
		// $_SESSION['password']=$row['password'];
		// $_SESSION['firstname'] = $row['firstname'];
		// $_SESSION['lastname'] = $row['lastname'];
		// $_SESSION['email']=$row['email'];
		// $_SESSION['category']=$row['category'];		
		// $_SESSION['admin']=$row['admin'];

		foreach ($row as $key => $value) {
			$_SESSION[$key] = $value;
		}

		header("Location:index.php");
  }

