<?php
	include 'database.php';
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$category = $_POST['category'];
	$admin = 0;
	$query = "INSERT INTO users VALUES(null, '$username', '$password', '$firstname', '$lastname', '$email', '$category', '$admin')";
	if($database->query($query)){
		header("Location: index.php");
	}else{
		header("Location: registration.php");
	}