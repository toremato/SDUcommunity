<?php
	include 'database.php';
	$id = $_REQUEST['id'];
	$query = "DELETE FROM news WHERE id=$id";
	mysqli_query($database, $query) or die($database->error);
	// header("Location: news.php");