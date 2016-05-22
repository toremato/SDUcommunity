<?php
	include 'database.php';
	$heading = mysqli_escape_string($database, $_POST['heading']);
	$short_content = mysqli_escape_string($database, $_POST['short_content']);
	$content = mysqli_escape_string($database, $_POST['content']);
	$query = "INSERT INTO `news`(`id`, `heading`, `short_content`, `content`, `date`, `time`) VALUES (null,'$heading' , '$short_content' , '$content' , CURRENT_DATE , CURRENT_TIME)";
	mysqli_query($database, $query) or die ($database->error);

	header("Location: news.php");