<?php
	session_start();
?>
<html lang="en">
<link rel="stylesheet" href="main.css" type="text/css">
<head>
	<meta charset="UTF-8">
	<title>SDUcommunity</title>
</head>
<body>
<div id="wrapper">
<!--             Navigation Bar                -->

	<ul class="nav">
		<li id="nav-home">
			<a href="index.php"><img src="images/home.png" alt="H">home</a>
		</li>
		<li id="nav-menu">
			<a href=""><img src="images/menu.png" alt="M">main menu</a>
			<a href="clubs.php">clubs</a>
			<a href="news.php">news</a>
			<a href="http://sdu.edu.kz/en/" target="_blank">sdu official site</a>
		</li>
		<li id="nav-account">
			<a href=""><img src="images/user.png" alt="A">account</a>
			<a href="profile.php">profile</a>
			<a href="">notifications</a>
			<a href="">sign out</a>
		</li>
		<li id="nav-settings">
			<a href=""><img src="images/s.png" alt="S">settings</a>
		</li>
	</ul>

<!--                  Header                -->

	<div class="header">
		<div class="logocontainer menubar">
			<a id="logo" href="index.php"><img  src="images/logo.png" alt="logo" width="100px"></a>
		</div>
		<div class="menubar">
			<a href="feed.php">feed</a>
		</div>
		<div class="menubar screen810">
			<a href="clubs.php">clubs</a>
		</div>
		<div class="menubar screen810">
			<a href="news.php">news</a>
		</div>
		<div class="menubar screen810">
			<a href="profile.php">profile</a>
		</div>
		<div class="search">
			<input class="searchtext" type="text" placeholder="Search on site...">
			<div id="searchiconcontainer"><img src="images/search.png" alt="search"></div>
		</div>
	</div>
	
<!--               Main Page                 -->

	<div id="container">
		<form class="signbox" >
			<input type="text" id="login" name="username" class="login-window-input" maxlength="15" placeholder="account">
			<input type="password" id="password" name="password" class="login-window-input" maxlength="15" placeholder="password">
			<input class="login-window-button" type = "submit" id="signin">sign in
			<a href="registration.php"><div class="login-window-button" id="register">register</div></a>

		</form>
	</div>
	<div id="footer">
	<p><span class="textatfooter">SDU Community</span> by <span class="textatfooter">Tore Maratov</span>, 2016</p>
		
	</div>
</div>
</body>
</html>