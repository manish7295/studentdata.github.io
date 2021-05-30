<?php
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Fullscreen Background Image Slideshow with CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
    <ul class="cb-slideshow">
            <li><span>Image 03</span><div><h3>Create account in minutes</h3></div></li>
            <li><span>Image 04</span><div><h3>Your data is secured with us</h3></div></li>
            <li><span>Image 05</span><div><h3>Available 24/7 at just one click</h3></div></li>
            <li><span>Image 06</span><div><h3>Follow us on Social Media</h3></div></li>
        </ul>
        <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if(isset($_REQUEST['username']))
            {
                $username = stripslashes($_REQUEST['username']); // removes backslashes
                $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con,$email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con,$password);
                $trn_date = date("Y-m-d H:i:s");
                $query = "INSERT into `users` (username, password, email, trn_date) VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
                $result = mysqli_query($con,$query);
                if($result)
                {
                    echo "<div class='codrops-top'><h3>You are registered successfully.</h3><br/>to enter<a href='login.php'>Login</a></div>";
                }
            }
            else
            {
        ?>
            

            <div class="container">
            <div class="codrops-top">
                <a href="index3.html">
                    <strong>&laquo; Previous: </strong>Home Page
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
                <h1>Registration</h1>
                <form name="registration" action="" method="post">
                    <input type="text" name="username" placeholder="Student's Name" required />
                    <input type="email" name="email" placeholder="Student's Email" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <input type="submit" name="submit" value="Enroll" /><br/><br/>
                </form>
                <br />
            </div>
            </header>
        </div>
        <?php 
            } 
        ?>
    </body>
</html>