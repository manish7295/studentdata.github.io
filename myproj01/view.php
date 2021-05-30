<?php
    require('db.php');
    include("auth.php");
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <title>View Records</title>
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
                <div class="form" style = "background-image: linear-gradient(to right,steelblue,aqua); text-align: center; width: 1200px"><br/>
                    <p>
                        <a href="index.php">Home</a> 
                        | <a href="insert.php">Insert New Record</a> 
                        | <a href="logout.php">Logout</a>
                    </p>
                    <br/><h2>View Records</h2><br/>
                    <center><table width="95%" border="1" style="border-collapse:collapse;">
                        <thead style = "color: white">
                            <tr>
                                <th><strong><center>S.No</center></strong></th>
                                <th><strong><center>Student's Name</center></strong></th>
                                <th><strong><center>Roll</center></strong></th>
                                <th><strong><center>Maths</center></strong></th>
                                <th><strong><center>Science</center></strong></th>
                                <th><strong><center>English</center></strong></th>
                                <th><strong><center>Hindi</center></strong></th>
                                <th><strong><center>Social Science</center></strong></th>
                                <th colspan = '2'><strong><center>Operations</center></strong></th>
                                <th><strong><center>Total</center></strong></th>                                
                            </tr>
                        </thead>
                        <tbody>
                    <?php
                        $count=1;
                        $sel_query="Select * from new_record ORDER BY id asc;";
                        $result = mysqli_query($con,$sel_query);
                        while($row = mysqli_fetch_assoc($result)) 
                        { 
                    ?>
                            <tr>
                                <td align="center"><?php echo $count; ?></td>
                                <td align="center"><?php echo $row["name"]; ?></td>
                                <td align="center"><?php echo $row["roll"]; ?></td>
                                <td align="center"><?php echo $row["mat"]; ?></td>
                                <td align="center"><?php echo $row["sci"]; ?></td>
                                <td align="center"><?php echo $row["eng"]; ?></td>
                                <td align="center"><?php echo $row["hin"]; ?></td>
                                <td align="center"><?php echo $row["sst"]; ?></td>
                                <td align="center">
                                    <a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
                                </td>
                                <td align="center">
                                    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
                                </td>
                                <td align="center"><?php echo ($row["mat"]+$row["sci"]+$row["eng"]+$row["hin"]+$row["sst"])*0.2 ." %"; ?></td>
                            </tr>
                    <?php 
                            $count++; 
                        } 
                    ?>
                        </tbody>
                    </table></center><br/><br/>
                </div>
            </header>
        </div>
    </body>
</html>