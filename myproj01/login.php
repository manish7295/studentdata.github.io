<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
		<title>Login</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body id="page" style= "background-image: linear-gradient(to right, aqua, steelblue);">
		<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Login to access your database</h3></div></li>
            <li><span>Image 02</span><div><h3>Don't have an account?</h3></div></li>
            <li><span>Image 03</span><div><h3>Create one in minutes</h3></div></li>
            <li><span>Image 04</span><div><h3>Your data is secured with us</h3></div></li>
            <li><span>Image 05</span><div><h3>Available 24/7 at just one click</h3></div></li>
            <li><span>Image 06</span><div><h3>Follow us on Social Media</h3></div></li>
        </ul>
		<?php
			require('db.php');
			session_start();
			// If form submitted, insert values into the database.
			if (isset($_POST['username']))
			{	
				$username = stripslashes($_REQUEST['username']); // removes backslashes
				$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con,$password);
				//Checking is user existing in the database or not
				$query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
				$result = mysqli_query($con,$query) or die(mysqli_error());
				$rows = mysqli_num_rows($result);
				if($rows==1)
				{
					$_SESSION['username'] = $username;
					header("Location: index.php"); // Redirect user to index.php
				}
				else
				{
					echo "<div class='codrops-top'><h3>Username/password is incorrect.</h3><br/>Again<a href='login.php'>Login</a></div>";
				}
			}
			else
			{
		?>
				

				<div class="container">
	            <div class="codrops-top">
                <a href="index3.html">
                    <strong>&laquo; Previous: </strong>Home page
                </a>
                <span class="right">
                    <a href="#" target="_blank">Designed and Developed by Suraj Prakash</a>
                    <a href="http://www.google.com/">
                        <strong>Back to the Google Home Page</strong>
                    </a>
                </span>
                <div class="clr"></div>
				</div>
				<header>
					<div class="form" style = "background-color: steelblue; text-align: center;"><br/><br/>
					<h1>Log In</h1>
					<form action="" method="post" name="login">
					<input type="text" name="username" placeholder="Student's Name" required />
					<input type="password" name="password" placeholder="Login Password" required />
					<input name="submit" type="submit" value="Login" />
					</form><br/>
					<p>Click here for <a href='registration.php'>New Registration</a></p><br/><br/>
				</div>
				</header>
        </div>
		<?php 
			} 
		?>
	</body>
</html>