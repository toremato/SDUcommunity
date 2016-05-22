<?php
session_start();
?>
<html lang="en">
<link rel="stylesheet" href="main.css" type="text/css">


<head>
	<meta charset="UTF-8">
	<title>SDUcommunity</title>
	<script type="text/javascript" src="ajax.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<script type="text/javascript" src="jquery-1.12.3.js`"></script>
	<script type="text/javascript" src="jquery_new.js"></script>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
</head>
<body>
	<script src="main.js"></script>

<!--             Navigation Bar                -->

	<ul class="nav">
		<li id="nav-home">
			<a href="index.php"><img src="images/home.png" alt="">home</a>
		</li>
		<li id="nav-menu">
			<a href=""><img src="images/menu.png" alt="">main menu</a>
			<a href="clubs.php">clubs</a>
			<a href="news.php">news</a>
			<a href="http://sdu.edu.kz/en/" target="_blank">sdu official site</a>
		</li>
		<li id="nav-account">
			<a href=""><img src="images/user.png" alt="">account</a>
			<a style="cursor: pointer"
			<?php
				if(empty($_SESSION['id'])){
					echo 'onclick=login()';
				}else{
					echo'href="profile.php"';
				}
			?>
	

			>profile</a>
			<a href="">notifications</a>
			<a href="signin.php">sign in/out</a>
		</li>
		<li id="nav-settings">
			<a href=""><img src="images/s.png" alt="">settings</a>
		</li>
	</ul>
	
<!--               Main Page                 -->

	<div id="container">
		<div id="content" style="height: 100%">
			<form action="new_action.php" method="post" id="new_newsform">
				<p>Heading of the news</p>
				<input type="text" name="heading" maxlength="70" style="width: 100%;">
				<p>Short content of the news</p>
				<textarea type="text" name="short_content" maxlength="150" style="width: 100%; height: 50px; max-width: 100%; max-height: 50px;"></textarea>
				<p>Content of the news</p>
				<textarea rows="20" cols="100" name="content" form="new_newsform" style="width: 100%; height: 300px; max-width: 100%; max-height: 300px;"></textarea>
				<input class="editbutton" id="accept-button" type="submit" value="Post">
			</form>
				<a href="news.php"><button class="editbutton" id="cancel-button">Cancel</button></a>
				
			
		</div>	
	</div>

	<div id="footer">
	<p><span class="textatfooter">SDU Community</span> by <span class="textatfooter">Tore Maratov</span>, 2016</p>
		
	</div>
</body>
</html>