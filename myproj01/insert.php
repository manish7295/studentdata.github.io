<?php
    require('db.php');
    include("auth.php");
    $status = "";
    if(isset($_POST['new']) && $_POST['new']==1)
    {
        $trn_date = date("Y-m-d H:i:s");
        $name =$_REQUEST['name'];
        $roll = $_REQUEST['roll'];
        $mat = $_REQUEST['mat'];
        $sci = $_REQUEST['sci'];
        $eng = $_REQUEST['eng'];
        $hin = $_REQUEST['hin'];
        $sst = $_REQUEST['sst'];
        $submittedby = $_SESSION["username"];
        $ins_query="insert into new_record(`trn_date`,`name`,`roll`,`mat`,`sci`,`eng`,`hin`,`sst`,`submittedby`)values('$trn_date','$name','$roll','$mat','$sci','$eng','$hin','$sst','$submittedby')";
        mysqli_query($con,$ins_query) or die(mysql_error());
        $status = "New Record Inserted Successfully.
        </br></br><a href='view.php'>View Inserted Record</a>";
    }
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Insert New Record</title>
        <link rel="stylesheet" href="css/style.css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fullscreen Background Image Slideshow with CSS3 - A Css-only fullscreen background image slideshow" />
        <meta name="keywords" content="css3, css-only, fullscreen, background, slideshow, images, content" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
        <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
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
                <div class="form" style = "background-color: steelblue; text-align: center;"><br/><br/>
                    <p>
                        <a href="dashboard.php">Dashboard</a> 
                        | <a href="view.php">View Records</a> 
                        | <a href="logout.php">Logout</a>
                    </p><br/>
                    <div>
                        <h1>Insert New Record</h1>
                        <form name="form" method="post" action=""> 
                            <input type="hidden" name="new" value="1" />
                            <p><input type="text" name="name" placeholder="Enter Name" required /></p>
                            <p><input type="text" name="roll" placeholder="Enter Roll" required /></p><br/>
                            <p>Enter your marks:</p>
                            <p><input type="text" name="mat" placeholder="Maths" required /></p>
                            <p><input type="text" name="sci" placeholder="Science" required /></p>
                            <p><input type="text" name="eng" placeholder="English" required /></p>
                            <p><input type="text" name="hin" placeholder="Hindi" required /></p>
                            <p><input type="text" name="sst" placeholder="Social Science" required /></p>
                            <p><input name="submit" type="submit" value="Submit" /></p>
                        </form>
                        <p style="color:#FF0000;">
                            <?php 
                                echo $status; 
                            ?>
                        </p><br/><br/>
                </div>
            </div>
        </header>
        </div>
    </body>
</html>