<?php
	// if(!empty($_SESSION['username']) ) {
	// 	echo 	'<script>
	// 				startsession();
	// 			</script>';
	// 	echo ($_SESSION['username']);

	// }
?>

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


		<div id="login-window">
			
				<div class="signbox">
				<form action="login.php" method="POST">
					<input type="text" name="username" id="username" class="login-window-input" maxlength="15" placeholder="account">
					<input type="password" id="password" name="password" class="login-window-input" maxlength="15" placeholder="password">
					<input type="submit" class="login-window-button" id="signin" value="sign in" style="font-size: 15px;">
					<a href="registration.php" style="text-decoration: none;"><div class="login-window-button" id="register">register</div></a>
				</form>
				</div>
			
		</div>



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

<!--                  Header                -->

	<div class="header">
		<div class="logocontainer menubar">
			<a id="logo" href="index.php"><img  src="images/logo.png" alt="logo" width="100px"></a>
		</div>
		<?php
			if (!empty($_SESSION['id'])) {
				echo'<div class="menubar">
					<a href="feed.php">feed</a>
					</div>';
			}
		?>
		<div class="menubar screen810">
			<a href="clubs.php">clubs</a>
		</div>
		<div class="menubar screen810">
			<a href="news.php">news</a>
		</div>
		<?php
			if (!empty($_SESSION['id'])) {
				echo'<div class="menubar screen810">
					<a href="profile.php">profile</a>
					</div>';
			}
		?>
		<!-- <div class="menubar screen810">
			<a href="profile.php">profile</a>
		</div> -->
		<div class="logbuttons-container" > 
		
		<?php
			if (!empty($_SESSION['id'])) {
				echo'<p id="logged-user">logged in as ';
				echo '<span style="border-bottom: 1px solid #777;"">'.($_SESSION['username'].'</span> ');
				echo'</p><a href="logout.php"><button id="logout" class="logbuttons" onclick="endsession()">Log out</button></a>
		</div> ';
			}else{
				echo '<button id="login" class="logbuttons" onclick="login()">Log in</button>
			<a href="registration.php"><button id="signup" class="logbuttons">Sign up</button></a>
		</div>';
			}

		?>
		<div class="search" onmouseover="login1()" onmouseout="login2()">
			<input class="searchtext" type="text" placeholder="Search on site..." onclick="login3()" onmouseout="searchtext()">
			<div id="searchiconcontainer"><img src="images/search.png" alt="search"></div>
		</div>
	</div>
	
<!--               Main Page                 -->

	<div id="container">
	<h1>Welcome to SDU Community!</h1>
		<div id="content">
			<div class="post responsive-font">
				<div class="sdu images"></div>
				<div class="post-info"><p>SDU Community is the place for everyone related to Suleyman Demirel University (or wants to be related) to share news, information or just have fun!</p></div>
				
			</div>
			<hr>
			<div class="post responsive-font">
				<div class="post-info">
					<p>Not a member yet? <a href="registration.php">Create</a> an account as a student, teacher or with custom category.</p>
					<p>While using SDU Community you can easily access navigation and search bars as shown on the picture below.</p>
				</div>
				<div class="tutorial images responsive-font">
					<img src="images\\tutorial.png" alt="tutorial">
				</div>
				<div class="post-info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae nam itaque sapiente quia facilis, assumenda. Neque eligendi eum cum natus sint quis aliquam placeat ad quo a ducimus, quas odit.</p></div>
				
			</div>
			<hr>
		</div>	
	</div>
	<div id="footer">
	<p><span class="textatfooter">SDU Community</span> by <span class="textatfooter">Tore Maratov</span>, 2016</p>
		
	</div>
</body>
</html>