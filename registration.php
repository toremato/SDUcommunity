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
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
	<script type="text/javascript" src="jquery_new.js"></script>
	<script type="text/javascript" src="jquery-1.12.3.min.js"></script>
</head>
<body>

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
			<a href="profile.php">profile</a>
			<a href="">notifications</a>
			<a href="signin.php">sign in/out</a>
		</li>
		<li id="nav-settings">
			<a href=""><img src="images/s.png" alt="">settings</a>
		</li>
	</ul>

<!--                  Header                -->

<!-- 	<div class="header">
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
		<div class="logbuttons-container" >
			<button id="login" class="logbuttons">Log in</button>
		</div>
		<div class="search" onmouseover="login1()" onmouseout="login2()">
			<input class="searchtext" type="text" placeholder="Search on site..." onclick="login3()" onmouseout="searchtext()">
			<div id="searchiconcontainer"><img src="images/search.png" alt="search"></div>
		</div>

	</div> -->
	
<!--               Main Page                 -->

	<div id="container" style="background-color: grey; padding-top: 10px; margin-top: 0;">
	<!-- <h1>Welcome to SDU Community!</h1> -->
		<div class="content" style="margin: 0 auto; width: 100%; margin-top: 30px;">
		<fieldset id="registrationform">
			<legend>Registration form</legend>
			<form action="registration_query.php" id="regform" method="post">
				<div class="input">
					<label for="username">Username</label>
					<div id="checkusername" class="validation">*</div>
					<input type="text" id="usernameinput" name="username" placeholder="sduwnik" required="required" minlength="5" maxlength="12">
					<p class="input-hints">Username should consist of 5 or more letters and numbers</p>
				</div>

				<div class="input">
					<label for="firstname">First Name</label>
					<input type="text" name="firstname" placeholder="Vasya">
					<p class="input-hints"></p>

				</div>

				<div class="input">
					<label for="lastname">Last Name</label>
					<input type="text" name="lastname" placeholder="Pupkin">
					<p class="input-hints"></p>
				</div>

				<div class="input">					
					<label for="password">Password</label>
					<div id="checkpass" class="validation">*</div>
					<input type="password" id="password" name="password" class="passinput" required="required" minlength="6">
					<p class="input-hints">Password must be at least 6 characters</p>
				</div>

				<div class="input">					
					<label for="passconfirmation">Password Confirmation</label>
					<div id="checkconf" class="validation">*</div>
					<input type="password" id="passconfirmation" name="passconfirmation" class="passinput" required="required" minlength="6" disabled="disabled">
					<p class="input-hints">Type your password again here</p>
				</div>

				<div class="input">					
					<label for="email">E-mail</label>
					<input type="email" name="email" placeholder="v.pupkin@gmail.com">
					<p class="input-hints">Required to recover your account</p>
				</div>

				<div class="input">					
					<label for="category">Category</label>				
					<select name="category" id="category">
						<option value="1">Student</option>
						<option value="2">Teacher</option>
						<option value="3">Administration</option>
						<option value="4" selected="selected">Other</option>
					</select>
					<p class="input-hints">Choose your category (student/teacher etc.)</p>
				</div>
				<input type="submit" name="submit" value="Register" id="register-button">
			</form>
		</fieldset>
		</div>
	</div>
	<footer id="footer">
	<p><span class="textatfooter">SDU Community</span> by <span class="textatfooter">Tore Maratov</span>, 2016</p>
		
	</footer>
</body>
</html>