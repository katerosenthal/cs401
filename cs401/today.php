<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}
?>

<head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/todaystyle.css">
        <title>PlanMyDay.net Daily Planner</title>
    </head>

<?php
	$pageName = "today";
	require_once "layout.php";
	require_once "dao.php";
	require_once "schedule.php";
	require_once "display_types.php";
	$dao = new Dao();
?>
            <div class="pagetitle">
            	<span class="recenter">Today</span> <button type="button" class="cornerbuttons">Clear</button><a href ="today_edit.php"><button type="button" class="cornerbuttons">Edit</button></a>
            </div>
            
            <div class="day">
				Day of Week: &nbsp;&nbsp;&nbsp;&nbsp;
				<?php  
				displayWeekday("todayday");
				?>
			</div>
			<div class="date">
				Date: &nbsp;&nbsp;&nbsp;&nbsp;
				<?php  
				displayDate("todaydate");
				?>
			</div>
			<div class="top3">
				Top 3 Tasks
				<ul class = "nobullets">
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("toptask1");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("toptask2");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("toptask3");
					?>
					<hr>
				</ul>
			</div>
			<div class="tasklist">
				Task List
				<ul class = "nobullets">
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task1");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task2");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task3");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task4");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task5");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task6");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task7");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task8");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task9");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task10");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task11");
					?>
					<hr>
					<li><input type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;
					<?php  
					displayTask("task12");
					?>
					<hr>
				</ul>
			</div>
			<div class="notes">
				Notes
				<hr>
				<?php  
				displayNote("todaynotes");
				?>
			</div>
			<div class="leftcolumn">
				Schedule
                <?php 
                    $todaySchedule = New Schedule("todayschedule");
                ?>
			</div>
		</div>
	</body>
</html>