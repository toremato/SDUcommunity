<?php
	include 'database.php';
	$id=$_REQUEST['id'];
	$new_heading = $_POST['heading'];
	$new_short = $_POST['short_content'];
	$new_content = $_POST['content'];
	$new_heading = mysqli_escape_string($database, $new_heading);
	$new_short = mysqli_escape_string($database, $new_short);
	$new_content = mysqli_escape_string($database, $new_content);
	$query = "UPDATE `news` SET `heading`='$new_heading',`short_content`='$new_short',`content`='$new_content'  WHERE `id`=".$id;
	mysqli_query($database, $query) or die($database->error);
	// $result = $database->query($query);

// 	if ($database->query($query) === TRUE) {
//     echo "Record updated successfully";
// } else {
//     echo "Error updating record: " . $database->error;
// }

	header("Location:singlenews.php?id=$id");
	?>