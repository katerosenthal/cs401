<html>
	<head>
		<link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
		<link rel="stylesheet" type="text/css" href="styles/layoutstyle.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <title>Welcome to PlanMyDay.net!</title>
	</head>

	<body>
		<form class="formcontainer" method = "POST" action = "form_handler.php">
            
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
					<li> <?php if ($pageName == "today" || $pageName == "today_edit") 
									{echo "<a class = 'location' href='today.php'> <span class = 'pink'>&#x25BA</span> Today</a>";}
							   else {echo "<a href='today.php'>Today</a>";}?> 
					</li>
					<li> <?php if ($pageName == "week" || $pageName == "week_edit") 
									{echo "<a class = 'location' href='week.php'> <span class = 'pink'>&#x25BA</span> This Week</a>";}
							   else {echo "<a href='week.php'>This Week</a>";}?> 
					</li>
					<li> <?php if ($pageName == "month" || $pageName == "month_edit") 
									{echo "<a class = 'location' href='month.php'> <span class = 'pink'>&#x25BA</span> This Month</a>";}
							   else {echo "<a href='month.php'>This Month</a>";}?> 
					</li>
					<li> <?php if ($pageName == "profile") 
									{echo "<a class = 'location' href='login.php'> <span class = 'pink'>&#x25BA</span> My Profile</a>";}
							   else {echo "<a href='login.php'>My Profile</a>";}?> 
					</li>
                	<li id = "logout"><a href="logout.php"><span class="pink2">&#x21e6</span> Log Out</a></li>
				</ul>
				<div id = "footer"> ©2020 Kate Rosenthal </div>
            </div>
