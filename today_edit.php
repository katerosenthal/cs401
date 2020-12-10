<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}

require_once "today_presets.php";
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
            	<span class="recenteredit">Today</span><button type="submit" name="action" value="todayeditclear" class="cornerbuttons">Clear</button><button type="submit" name="action" value="today" class="cornerbuttons">Save</button>
			</div>
			
				
            <div class="day">
				<label for="daytext"> Day of Week: </label>
				<input type="text" value="<?php echo $todayday_preset;?>" id = "daytext" name="todayday">
			</div>
			<div class="date">
				<label for="datetext">Date: </label>
				<input type="text" value="<?php echo $todaydate_preset;?>" id = "datetext" name="todaydate">
			</div>
			<div class="top3">
				<label for="toptask1">Top 3 Tasks</label>
				<ul class = "nobullets">
					<li><input type="checkbox"> <input type="text" value="<?php echo $toptask1_preset;?>" class="task" name="toptask1" id="toptask1"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $toptask2_preset;?>" class="task" name="toptask2" id="toptask2"></li>
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $toptask3_preset;?>" class="task" name="toptask3" id="toptask3"></li> 
					<hr>
				</ul>
			</div>
			<div class="tasklist">
				<label for="task1">Task List</label>
				<ul class = "nobullets">
					<li><input type="checkbox"> <input type="text" value="<?php echo $task1_preset;?>" class="task" name="task1" id="task1"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task2_preset;?>" class="task" name="task2" id="task2"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task3_preset;?>" class="task" name="task3" id="task3"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task4_preset;?>" class="task" name="task4" id="task4"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task5_preset;?>" class="task" name="task5" id="task5"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task6_preset;?>" class="task" name="task6" id="task6"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task7_preset;?>" class="task" name="task7" id="task7"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task8_preset;?>" class="task" name="task8" id="task8"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task9_preset;?>" class="task" name="task9" id="task9"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task10_preset;?>" class="task" name="task10" id="task10"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task11_preset;?>" class="task" name="task11" id="task11"></li> 
					<hr>
					<li><input type="checkbox"> <input type="text" value="<?php echo $task12_preset;?>" class="task" name="task12" id="task12"></li> 
					<hr>
				</ul>
			</div>
			<div class="notes">
				<label for="notetextbox">Notes</label>
				<hr>
				<textarea id ="notetextbox" value="<?php echo $todaynotes_preset;?>" name="todaynotes"></textarea>
			</div>
			<div class="leftcolumn">
				<label for="1am">Schedule</label>
                <?php 
					$todaySchedule = New ScheduleEdit("todayschedule");
                ?>
			</div>
		</form>
	</body>
</html>