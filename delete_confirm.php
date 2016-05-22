<?php
	$id = $_REQUEST['id'];
?>
<style>
	#alert-box{
		width: 700px;
		height: 300px;
		background-color: #dedede;
		margin: 0 auto;
		margin-top: 130px;
	}
	#alert-message{
		font-size: 30px;
		text-align:center;
	}
	#alert-buttons-container{
		display: block;
		width: 250px;
		margin: 0 auto;
		margin-top: 50px;
	}
	.alert-button{
		width: 100px;
		height: 30px;
	}
</style>
<div id="alert-box">
	<div id="alert-message">Are you sure? You will not be able to recover this!</div>
	<div id="alert-buttons-container">
		<a href="delete.php?id=<?=$id?>"><button class="alert-button">Delete</button></a>
		<a href="singlenews.php?id=<?=$id?>"><button class="alert-button">Cancel</button></a>
	</div>
</div>
