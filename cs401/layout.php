<html>
	<head>
		<link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/layoutstyle.css">
        <title>Welcome to PlanMyDay.net!</title>
	</head>

	<body>
		<div class="container">
            
            <div class="navigation">
				<img src="images/clip3.png" id ="logo" alt="Website Logo"/>
				<?php 
				if(isset($_SESSION['errors'])){
                	foreach($_SESSION['errors'] as $error){
                    echo "<div class = 'naverrors'>{$error}</div>";
                	}
            	}
					?>
					<ul id = "navlist">
					<li> <a <?php if ($pageName == "today" || $pageName == "today_edit") {echo "class = 'location';";}?> 
						href="today.php">Today</a></li>
					<li> <br> </li>
					<li> <a <?php if ($pageName == "week" || $pageName == "week_edit") {echo "class = 'location';";}?>
						href="week.php" >This Week</a></li>
					<li> <br> </li>
					<li> <a <?php if ($pageName == "month" || $pageName == "month_edit") {echo "class = 'location';";}?>
						href="month.php">This Month</a></li>
					<li> <br> </li>
					<li> <a <?php if ($pageName == "profile") {echo "class = 'location';";}?>
						href="login.php">My Profile</a></li>
                	<li id = "logout"><a href="logout.php">Log Out</a></li>
					</ul>
				<div id = "footer"> ©2020 Kate Rosenthal </div>
            </div>
