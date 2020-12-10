<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}

$_SESSION['errors'] = [];
?>

<head>
		<script src="scripts/jquery-3.5.1.min.js"></script>
		<script src="scripts/today.js"></script>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
		<link rel="stylesheet" type="text/css" href="styles/todaystyle.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <title>PlanMyDay.net Daily Planner</title>
    </head>

<?php
	$pageName = "today";
	require_once "layout_edit.php";
	require_once "dao.php";
	require_once "schedule.php";
	require_once "display_types.php";
	$dao = new Dao();
?>
            <div class="pagetitle">
            	<span class="recenter">Today</span> <button type="submit" name="action" value="todayclear"  class="cornerbuttons">Clear</button><a href ="today_edit.php"><button type="button" class="cornerbuttons">Edit</button></a>
            </div>
            
            <div class="day">
				<span class="sectiontitle"> Day of Week: &nbsp;&nbsp;&nbsp;&nbsp; </span>
				<?php  
				displayWeekday("todayday");
				?>
			</div>
			<div class="date">
				<span class="sectiontitle"> Date: &nbsp;&nbsp;&nbsp;&nbsp; </span>
				<?php  
				displayDate("todaydate");
				?>
			</div>
			<div class="top3">
				<span class="sectiontitle2"> Top 3 Tasks </span>
				<ul class = "nobullets">
					<li><input type="checkbox" class="checkbox" id="top1"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="top1">
					<?php  
					displayTask("toptask1");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="top2"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="top2">
					<?php  
					displayTask("toptask2");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="top3"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="top3">
					<?php  
					displayTask("toptask3");
					?>
					</label></span>
					<hr>
				</ul>
			</div>
			<div class="tasklist">
				<span class="sectiontitle3"> Task List </span>
				<ul class = "nobullets">
					<li><input type="checkbox" class="checkbox" id="tasklist1"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist1">
					<?php  
					displayTask("task1");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist2"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist2">
					<?php  
					displayTask("task2");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist3"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist3">
					<?php  
					displayTask("task3");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist4"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist4">
					<?php  
					displayTask("task4");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist5"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist5">
					<?php  
					displayTask("task5");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist6"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist6">
					<?php  
					displayTask("task6");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist7"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist7">
					<?php  
					displayTask("task7");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist8"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist8">
					<?php  
					displayTask("task8");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist9"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist9">
					<?php  
					displayTask("task9");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist10"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist10">
					<?php  
					displayTask("task10");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist11"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist11">
					<?php  
					displayTask("task11");
					?>
					</label></span>
					<hr>
					<li><input type="checkbox" class="checkbox" id="tasklist12"> &nbsp;&nbsp;&nbsp;&nbsp;
					<span class="taskitem"><label for="tasklist12">
					<?php  
					displayTask("task12");
					?>
					</label></span>
					<hr>
				</ul>
			</div>
			<div class="notes">
				<span class="sectiontitle2"> Notes </span>
				<hr>
				<div class = "notetext"><?php  
				displayNote("todaynotes");
				?></div>
			</div>
			<div class="leftcolumn">
				<span class="sectiontitle4"> Schedule </span>
                <?php 
                    $todaySchedule = New Schedule("todayschedule");
                ?>
			</div>
		</form>
	</body>
</html>