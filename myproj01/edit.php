<?php
    require('db.php');
    include("auth.php");
    $id=$_REQUEST['id'];
    $query = "SELECT * from new_record where id='".$id."'"; 
    $result = mysqli_query($con, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Update Record</title>
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
                <div class="form" style = "background-color: steelblue; text-align: center;"><br/>
                    <p>
                <a href="dashboard.php">Dashboard</a> 
                | <a href="insert.php">Insert New Record</a> 
                | <a href="logout.php">Logout</a>
            </p><br/>
            <h1>Update Record</h1><br/>
            <?php
                $status = "";
                if(isset($_POST['new']) && $_POST['new']==1)
                {
                    $id=$_REQUEST['id'];
                    $trn_date = date("Y-m-d H:i:s");
                    $name =$_REQUEST['name'];
                    $roll =$_REQUEST['roll'];
                    $mat = $_REQUEST['mat'];
                    $sci = $_REQUEST['sci'];
                    $eng = $_REQUEST['eng'];
                    $hin = $_REQUEST['hin'];
                    $sst = $_REQUEST['sst'];
                    $submittedby = $_SESSION["username"];
                    $update="update new_record set trn_date='".$trn_date."',name='".$name."', roll='".$roll."', mat='".$mat."', sci='".$sci."', eng='".$eng."', hin='".$hin."', sst='".$sst."', submittedby='".$submittedby."' where id='".$id."'";
                    mysqli_query($con, $update) or die(mysqli_error());
                    $status = "Record Updated Successfully. </br></br> <a href='view.php'>View Updated Record</a><br/><br/>";
                    echo '<p style="color:#FF0000;">'.$status.'</p>';
                }
                else 
                {
            ?>
                    <div>
                        <form name="form" method="post" action=""> 
                            <input type="hidden" name="new" value="1" />
                            <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                            <p>
                                <input type="text" name="name" placeholder="Student's Name" 
                                required value="<?php echo $row['name'];?>" />
                            </p>
                            <p>
                                <input type="text" name="roll" placeholder="Roll" 
                                required value="<?php echo $row['roll'];?>" />
                            </p><br/>
                            <p>
                            	Update Marks:
                            </p>
                            <p>
                                <input type="text" name="mat" placeholder="Maths" 
                                required value="<?php echo $row['mat'];?>" />
                            </p>
                            <p>
                                <input type="text" name="sci" placeholder="Science" 
                                required value="<?php echo $row['sci'];?>" />
                            </p>
                            <p>
                                <input type="text" name="eng" placeholder="English" 
                                required value="<?php echo $row['eng'];?>" />
                            </p>
                            <p>
                                <input type="text" name="hin" placeholder="Hindi" 
                                required value="<?php echo $row['hin'];?>" />
                            </p>
                            <p>
                                <input type="text" name="sst" placeholder="Social Science" 
                                required value="<?php echo $row['sst'];?>" />
                            </p>
                            <p>
                                <input name="submit" type="submit" value="Update" />
                            </p>
                        </form><br/><br/>
            <?php 
                } 
            ?>
                    </div>
        </div>
            </header>
            
    </body>
</html>