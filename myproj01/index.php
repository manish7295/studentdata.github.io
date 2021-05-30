<?php
    include("auth.php"); //include auth.php file on all secure pages 
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome Home</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style1.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3>Explore</h3></div></li>
            <li><span>Image 03</span><div><h3>...</h3></div></li>
            <li><span>Image 04</span><div><h3>to know more</h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>

        

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
                <div class="form" style = "background-color: burlywood; text-align: center;"><br/><br/>
                    <p>Hello <?php echo $_SESSION['username']; ?>!</p>
                    <p>Navigate Through Account</p>
                    <p><a href="dashboard.php">Manage Data</a></p>
                    <a href="logout.php">Signout</a><br/><br/><br/>
                </div>
            </header>
        </div>
    </body>
</html>