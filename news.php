<?php
session_start();
include ('database.php');
$query = "SELECT * FROM news ORDER BY id DESC";
$news = $database->query($query);
// $singlenews = $news->fetch_array();
$num = mysqli_num_rows($news);

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

	<div id="container" style="background: none;">
	<h1>Latest news of SDU</h1>
		<div id="content">
		<?php 
			for($i=0; $i<$num ; $i++){
				$singlenews = $news->fetch_array();
				?><a href="singlenews.php?id=<?=$singlenews['id']?>" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2><?php echo $singlenews['heading']; ?></h2><p class="date">Posted on <?php 
					$date = new DateTime($singlenews['date']);
					echo $date->format('d-M Y'); ?> at 
				<?php
					$time = new DateTime($singlenews['time']);
					echo $time->format('g:i a');
				?>

				</p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p><?php echo $singlenews['short_content']; ?></p></div>
				<?php
				if(isset($_SESSION['admin']))
					if ($_SESSION['admin']==1) {
				?>	
						<div class="admin-buttons-container">
							<a href="edit.php?id=<?=$singlenews['id']?>"><div class="admin-buttons">Edit</div></a>
							<a href="delete_confirm.php?id=<?=$singlenews['id']?>"><div class="admin-buttons">Delete</div></a>
							<a href="new.php"><div class="admin-buttons">New</div></a>
						</div>
				<?php	}
				?>
			</div></a>
			<hr>
			<?php

			}
		?>
			<!-- <a href="singlenews.php" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2><?php echo $singlenews['heading']; ?></h2><p class="date">Posted on <?php echo $singlenews['date']; ?></p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p><?php echo $singlenews['content']; ?></p></div>
			</div></a>
			<hr>
			<a href="singlenews.php" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2><?php echo $singlenews['heading']; ?></h2><p class="date">Posted on <?php echo $singlenews['date']; ?></p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p><?php echo $singlenews['content']; ?></p></div>
			</div></a>
			<hr>
			<a href="singlenews.php" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2>Heading of a news</h2><p class="date">Posted on 03.01.2016</p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima distinctio at minus rerum, dolorum qui quisquam, esse cum debitis magni, omnis quos ratione, alias libero nesciunt dolores consectetur a. Fugiat.</p></div>
			</div></a>
			<hr>
			<a href="singlenews.php" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2>Heading of a news</h2><p class="date">Posted on 02.01.2016</p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis eligendi non rem natus pariatur facilis vel possimus tempora quod aliquam fugit, iure labore sit assumenda optio, ex reprehenderit. Pariatur, tempora.</p></div>
			</div></a>
			<hr>
			<a href="singlenews.php" class="news-link"><div class="post news-post responsive-font">
				<div class="news-heading"><h2>Heading of a news</h2><p class="date">Posted on 01.01.2016</p></div>
				<div class="horizontal-line"></div>
				<div class="images"></div>
				<div class="post-info news-post-info"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quas incidunt libero eligendi iure accusantium est nobis assumenda! Velit veritatis, quia harum. Ipsum magni, quibusdam, itaque quaerat fugiat eligendi facilis!</p></div>
			</div></a> -->
		</div>	
	</div>
	<div id="footer">
	<p><span class="textatfooter">SDU Community</span> by <span class="textatfooter">Tore Maratov</span>, 2016</p>
		
	</div>
</body>
</html>