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
	$pageName = "today_edit";
	require_once "layout_edit.php";
	require_once "schedule_edit.php";
?>
			
            <div class="pagetitle">
            	<span class="recenteredit">Today</span><button type="submit" name="action" value="today" class="cornerbutton">Save</button>
			</div>
			
				
            <div class="day">
				Day of Week: <input type="text" id = "daytext" name="todayday">
			</div>
			<div class="date">
				Date: <input type="text" id = "datetext" name="todaydate">
			</div>
			<div class="top3">
				Top 3 Tasks
				<ul class = "nobullets">
					<li><input type="checkbox"> <input type="text" class="task" name="toptask1"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="toptask2"></li>
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="toptask3"></li> 
					<hr>
				</ul>
			</div>
			<div class="tasklist">
				Task List
				<ul class = "nobullets">
					<li><input type="checkbox"> <input type="text" class="task" name="task1"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task2"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task3"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task4"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task5"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task6"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task7"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task8"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task9"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task10"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task11"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" class="task" name="task12"></li> 
					<hr>
				</ul>
			</div>
			<div class="notes">
				Notes
				<hr>
				<textarea id ="notetextbox" name="todaynotes"></textarea>
			</div>
			<div class="leftcolumn">
				Schedule
                <?php 
					$todaySchedule = New ScheduleEdit("todayschedule");
                ?>
			</div>
		</form>
	</body>
</html>