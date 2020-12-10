<?php 

if((count($_SESSION['errors']) > 0) && isset($_SESSION['todayform'])){
	$todayday_preset = $_SESSION['todayform']['todayday'];
	$todaydate_preset = $_SESSION['todayform']['todaydate'];

	$toptask1_preset = $_SESSION['todayform']['toptask1'];
	$toptask2_preset = $_SESSION['todayform']['toptask2'];
	$toptask3_preset = $_SESSION['todayform']['toptask3'];

	$task1_preset = $_SESSION['todayform']['task1'];
	$task2_preset = $_SESSION['todayform']['task2'];
	$task3_preset = $_SESSION['todayform']['task3'];
	$task4_preset = $_SESSION['todayform']['task4'];
	$task5_preset = $_SESSION['todayform']['task5'];
	$task6_preset = $_SESSION['todayform']['task6'];
	$task7_preset = $_SESSION['todayform']['task7'];
	$task8_preset = $_SESSION['todayform']['task8'];
	$task9_preset = $_SESSION['todayform']['task9'];
	$task10_preset = $_SESSION['todayform']['task10'];
	$task11_preset = $_SESSION['todayform']['task11'];
	$task12_preset = $_SESSION['todayform']['task12'];

	$todaynotes_preset = $_SESSION['todayform']['todaynotes'];
}else{
	$todayday_preset = '';
	$todaydate_preset = '';

	$toptask1_preset = '';
	$toptask2_preset = '';
	$toptask3_preset = '';

	$task1_preset = '';
	$task2_preset = '';
	$task3_preset = '';
	$task4_preset = '';
	$task5_preset = '';
	$task6_preset = '';
	$task7_preset = '';
	$task8_preset = '';
	$task9_preset = '';
	$task10_preset = '';
	$task11_preset = '';
	$task12_preset = '';

	$todaynotes_preset = '';
}

?>