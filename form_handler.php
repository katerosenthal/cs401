<?php 
session_start();
require_once 'dao.php';
$_SESSION['errors'] = [];
$_SESSION['todayform'] = [];
$_SESSION['weekform'] = [];
$_SESSION['monthform'] = [];
$dao = new Dao();


//Today
if ($_POST['action'] == 'today'){
    //Day of Week:
    saveWeekday('todayday');

    //Date:
    saveDate('todaydate');

    //Top 3 Tasks
    saveTask('toptask1');
    saveTask('toptask2');
    saveTask('toptask3');

    //Task List
    saveTask('task1');
    saveTask('task2');
    saveTask('task3');
    saveTask('task4');
    saveTask('task5');
    saveTask('task6');
    saveTask('task7');
    saveTask('task8');
    saveTask('task9');
    saveTask('task10');
    saveTask('task11');
    saveTask('task12');

    //Notes
    saveNote('todaynotes');

    //Schedule
    saveFullSchedule('todayschedule');

    if(count($_SESSION['errors']) > 0){
        $_SESSION['todayform'] = $_POST;
        header("Location: today_edit.php"); 
        exit();
    }else{
        header("Location: today.php"); 
        exit();
    }
}

if ($_POST['action'] == 'todayclear'){
    clearToday(implode($_SESSION['id']));
    header("Location: today.php");
    exit();
}

if ($_POST['action'] == 'todayeditclear'){
    $_SESSION['errors'] = [];
    header("Location: today_edit.php");
    exit();
}

//Week
if ($_POST['action'] == 'week'){

    //Week Dates
    saveDate('weekdate1');
    saveDate('weekdate2');
    
    //Week Days
    saveWeekday('weekday1');
    saveWeekday('weekday2');
    saveWeekday('weekday3');
    saveWeekday('weekday4');
    saveWeekday('weekday5');
    saveWeekday('weekday6');
    saveWeekday('weekday7');

    //Schedules
    saveFullSchedule("weekschedule1");
    saveFullSchedule("weekschedule2");
    saveFullSchedule("weekschedule3");
    saveFullSchedule("weekschedule4");
    saveFullSchedule("weekschedule5");
    saveFullSchedule("weekschedule6");
    saveFullSchedule("weekschedule7");

    //Notes
    saveNote('weeknote1');
    saveNote('weeknote2');
    saveNote('weeknote3');
    saveNote('weeknote4');
    saveNote('weeknote5');
    saveNote('weeknote6');
    saveNote('weeknote7');

    if(count($_SESSION['errors']) > 0){
        $_SESSION['weekform'] = $_POST;
        header("Location: week_edit.php"); 
        exit();
    }else{
        header("Location: week.php"); 
        exit();
    }
}

if ($_POST['action'] == 'weekclear'){
    clearWeek(implode($_SESSION['id']));
    header("Location: week.php");
    exit();
}

if ($_POST['action'] == 'weekeditclear'){
    $_SESSION['errors'] = [];
    header("Location: week_edit.php");
    exit();
}

//Month
if ($_POST['action'] == 'month'){
    //Month
    saveMonth('monthname');

    //Month Week Days
    saveWeekday('monthweekday1');
    saveWeekday('monthweekday2');
    saveWeekday('monthweekday3');
    saveWeekday('monthweekday4');
    saveWeekday('monthweekday5');
    saveWeekday('monthweekday6');
    saveWeekday('monthweekday7');

    //Month Days
    saveMonthday('monthday1');
    saveMonthday('monthday2');
    saveMonthday('monthday3');
    saveMonthday('monthday4');
    saveMonthday('monthday5');
    saveMonthday('monthday6');
    saveMonthday('monthday7');
    saveMonthday('monthday8');
    saveMonthday('monthday9');
    saveMonthday('monthday10');
    saveMonthday('monthday11');
    saveMonthday('monthday12');
    saveMonthday('monthday13');
    saveMonthday('monthday14');
    saveMonthday('monthday15');
    saveMonthday('monthday16');
    saveMonthday('monthday17');
    saveMonthday('monthday18');
    saveMonthday('monthday19');
    saveMonthday('monthday20');
    saveMonthday('monthday21');
    saveMonthday('monthday22');
    saveMonthday('monthday23');
    saveMonthday('monthday24');
    saveMonthday('monthday25');
    saveMonthday('monthday26');
    saveMonthday('monthday27');
    saveMonthday('monthday28');
    saveMonthday('monthday29');
    saveMonthday('monthday30');
    saveMonthday('monthday31');
    saveMonthday('monthday32');
    saveMonthday('monthday33');
    saveMonthday('monthday34');
    saveMonthday('monthday35');

    //Month Notes
    saveNote('monthnote1');
    saveNote('monthnote2');
    saveNote('monthnote3');
    saveNote('monthnote4');
    saveNote('monthnote5');
    saveNote('monthnote6');
    saveNote('monthnote7');
    saveNote('monthnote8');
    saveNote('monthnote9');
    saveNote('monthnote10');
    saveNote('monthnote11');
    saveNote('monthnote12');
    saveNote('monthnote13');
    saveNote('monthnote14');
    saveNote('monthnote15');
    saveNote('monthnote16');
    saveNote('monthnote17');
    saveNote('monthnote18');
    saveNote('monthnote19');
    saveNote('monthnote20');
    saveNote('monthnote21');
    saveNote('monthnote22');
    saveNote('monthnote23');
    saveNote('monthnote24');
    saveNote('monthnote25');
    saveNote('monthnote26');
    saveNote('monthnote27');
    saveNote('monthnote28');
    saveNote('monthnote29');
    saveNote('monthnote30');
    saveNote('monthnote31');
    saveNote('monthnote32');
    saveNote('monthnote33');
    saveNote('monthnote34');
    saveNote('monthnote35');

    if(count($_SESSION['errors']) > 0){
        $_SESSION['monthform'] = $_POST;
        header("Location: month_edit.php");
        exit();
    }else{
        header("Location: month.php"); 
        exit();
    }

}

if ($_POST['action'] == 'monthclear'){
    clearMonth(implode($_SESSION['id']));
    header("Location: month.php");
    exit();
}

if ($_POST['action'] == 'montheditclear'){
    $_SESSION['errors'] = [];
    header("Location: month_edit.php");
    exit();
}

//Save Functions
function saveTask($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 256) {
        if(!$dao->taskExists(implode($_SESSION['id']), $inputName)){
            $dao->storeTask(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateTask(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 256 && !in_array("Input for tasks must be under 256 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for tasks must be under 256 characters.";
    }
}

function saveDate($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 25) {
        if(!$dao->dateExists(implode($_SESSION['id']), $inputName)){
            $dao->storeDate(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateDate(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 25 && !in_array("Input for dates must be under 25 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for dates must be under 25 characters.";
    }
}

function saveNote($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 1000) {
        if(!$dao->noteExists(implode($_SESSION['id']), $inputName)){
            $dao->storeNote(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateNote(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 1000 && !in_array("Input for notes must be under 1000 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for notes must be under 1000 characters.";
    }
}

function saveMonth($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 25) {
        if(!$dao->monthExists(implode($_SESSION['id']), $inputName)){
            $dao->storeMonth(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateMonth(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 25 && !in_array("Input for month titles must be under 25 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for month titles must be under 25 characters."; 
    }
}

function saveWeekday($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 25) {
        if(!$dao->weekdayExists(implode($_SESSION['id']), $inputName)){
            $dao->storeWeekday(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateWeekday(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 25 && !in_array("Input for weekdays must be under 25 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for weekdays must be under 25 characters."; 
    }
}


function saveMonthday($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0){
        if(preg_match('#^(0?[1-9]|[12][0-9]|3[01])$#', $_POST[$inputName])) {
            if(!$dao->monthdayExists(implode($_SESSION['id']), $inputName)){
                $dao->storeMonthday(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
            }else{
                $dao->updateMonthday(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
            }
        }else{
            if(!in_array("Input for calendar dates must be a numeric value from 1-31.", $_SESSION['errors'])){
                $_SESSION['errors'][] = "Input for calendar dates must be a numeric value from 1-31.";
            } 
        }
    }
}

function saveSchedule($scheduleName, $inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 256) {
        if(!$dao->scheduleExists(implode($_SESSION['id']), $scheduleName, $inputName)){
            $dao->storeSchedule(implode($_SESSION['id']), $scheduleName, $inputName, $_POST[$inputName]);
        }else{
            $dao->updateSchedule(implode($_SESSION['id']), $scheduleName, $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 256 && !in_array("Input for schedule items must be under 256 characters.", $_SESSION['errors'])){
        $_SESSION['errors'][] = "Input for schedule items must be under 256 characters."; 
    }
}

function saveFullSchedule($scheduleName){
    saveSchedule($scheduleName, "1am_$scheduleName");
    saveSchedule($scheduleName, "2am_$scheduleName");
    saveSchedule($scheduleName, "3am_$scheduleName");
    saveSchedule($scheduleName, "4am_$scheduleName");
    saveSchedule($scheduleName, "5am_$scheduleName");
    saveSchedule($scheduleName, "6am_$scheduleName");
    saveSchedule($scheduleName, "7am_$scheduleName");
    saveSchedule($scheduleName, "8am_$scheduleName");
    saveSchedule($scheduleName, "9am_$scheduleName");
    saveSchedule($scheduleName, "10am_$scheduleName");
    saveSchedule($scheduleName, "11am_$scheduleName");
    saveSchedule($scheduleName, "12pm_$scheduleName");
    saveSchedule($scheduleName, "1pm_$scheduleName");
    saveSchedule($scheduleName, "2pm_$scheduleName");
    saveSchedule($scheduleName, "3pm_$scheduleName");
    saveSchedule($scheduleName, "4pm_$scheduleName");
    saveSchedule($scheduleName, "5pm_$scheduleName");
    saveSchedule($scheduleName, "6pm_$scheduleName");
    saveSchedule($scheduleName, "7pm_$scheduleName");
    saveSchedule($scheduleName, "8pm_$scheduleName");
    saveSchedule($scheduleName, "9pm_$scheduleName");
    saveSchedule($scheduleName, "10pm_$scheduleName");
    saveSchedule($scheduleName, "11pm_$scheduleName");
    saveSchedule($scheduleName, "12am_$scheduleName");
}

 //Clear Functions
 function clearToday($userID){
    $dao = new Dao();

    //Day of Week:
    $dao->clearWeekday($userID,'todayday');

    //Date:
    $dao->clearDate($userID,'todaydate');

    //Top 3 Tasks
    $dao->clearTask($userID,'toptask1');
    $dao->clearTask($userID,'toptask2');
    $dao->clearTask($userID,'toptask3');

    //Task List
    $dao->clearTask($userID,'task1');
    $dao->clearTask($userID,'task2');
    $dao->clearTask($userID,'task3');
    $dao->clearTask($userID,'task4');
    $dao->clearTask($userID,'task5');
    $dao->clearTask($userID,'task6');
    $dao->clearTask($userID,'task7');
    $dao->clearTask($userID,'task8');
    $dao->clearTask($userID,'task9');
    $dao->clearTask($userID,'task10');
    $dao->clearTask($userID,'task11');
    $dao->clearTask($userID,'task12');

    //Notes
    $dao->clearNote($userID,'todaynotes');

    //Schedule
    clearFullSchedule($userID, "todayschedule");

}

function clearWeek($userID){
    $dao = new Dao();

    //Week Dates
    $dao->clearDate($userID,'weekdate1');
    $dao->clearDate($userID,'weekdate2');
    
    //Week Days
    $dao->clearWeekday($userID,'weekday1');
    $dao->clearWeekday($userID,'weekday2');
    $dao->clearWeekday($userID,'weekday3');
    $dao->clearWeekday($userID,'weekday4');
    $dao->clearWeekday($userID,'weekday5');
    $dao->clearWeekday($userID,'weekday6');
    $dao->clearWeekday($userID,'weekday7');

    //Schedules
    clearFullSchedule($userID, "weekschedule1");
    clearFullSchedule($userID, "weekschedule2");
    clearFullSchedule($userID, "weekschedule3");
    clearFullSchedule($userID, "weekschedule4");
    clearFullSchedule($userID, "weekschedule5");
    clearFullSchedule($userID, "weekschedule6");
    clearFullSchedule($userID, "weekschedule7");

    //Notes
    $dao->clearNote($userID,'weeknote1');
    $dao->clearNote($userID,'weeknote2');
    $dao->clearNote($userID,'weeknote3');
    $dao->clearNote($userID,'weeknote4');
    $dao->clearNote($userID,'weeknote5');
    $dao->clearNote($userID,'weeknote6');
    $dao->clearNote($userID,'weeknote7');

}

function clearMonth($userID){
    $dao = new Dao();

    //Month
    $dao->clearMonth($userID,'monthname');

    //Month Week Days
    $dao->clearWeekday($userID,'monthweekday1');
    $dao->clearWeekday($userID,'monthweekday2');
    $dao->clearWeekday($userID,'monthweekday3');
    $dao->clearWeekday($userID,'monthweekday4');
    $dao->clearWeekday($userID,'monthweekday5');
    $dao->clearWeekday($userID,'monthweekday6');
    $dao->clearWeekday($userID,'monthweekday7');

    //Month Days
    $dao->clearMonthday($userID,'monthday1');
    $dao->clearMonthday($userID,'monthday2');
    $dao->clearMonthday($userID,'monthday3');
    $dao->clearMonthday($userID,'monthday4');
    $dao->clearMonthday($userID,'monthday5');
    $dao->clearMonthday($userID,'monthday6');
    $dao->clearMonthday($userID,'monthday7');
    $dao->clearMonthday($userID,'monthday8');
    $dao->clearMonthday($userID,'monthday9');
    $dao->clearMonthday($userID,'monthday10');
    $dao->clearMonthday($userID,'monthday11');
    $dao->clearMonthday($userID,'monthday12');
    $dao->clearMonthday($userID,'monthday13');
    $dao->clearMonthday($userID,'monthday14');
    $dao->clearMonthday($userID,'monthday15');
    $dao->clearMonthday($userID,'monthday16');
    $dao->clearMonthday($userID,'monthday17');
    $dao->clearMonthday($userID,'monthday18');
    $dao->clearMonthday($userID,'monthday19');
    $dao->clearMonthday($userID,'monthday20');
    $dao->clearMonthday($userID,'monthday21');
    $dao->clearMonthday($userID,'monthday22');
    $dao->clearMonthday($userID,'monthday23');
    $dao->clearMonthday($userID,'monthday24');
    $dao->clearMonthday($userID,'monthday25');
    $dao->clearMonthday($userID,'monthday26');
    $dao->clearMonthday($userID,'monthday27');
    $dao->clearMonthday($userID,'monthday28');
    $dao->clearMonthday($userID,'monthday29');
    $dao->clearMonthday($userID,'monthday30');
    $dao->clearMonthday($userID,'monthday31');
    $dao->clearMonthday($userID,'monthday32');
    $dao->clearMonthday($userID,'monthday33');
    $dao->clearMonthday($userID,'monthday34');
    $dao->clearMonthday($userID,'monthday35');

    //Month Notes
    $dao->clearNote($userID,'monthnote1');
    $dao->clearNote($userID,'monthnote2');
    $dao->clearNote($userID,'monthnote3');
    $dao->clearNote($userID,'monthnote4');
    $dao->clearNote($userID,'monthnote5');
    $dao->clearNote($userID,'monthnote6');
    $dao->clearNote($userID,'monthnote7');
    $dao->clearNote($userID,'monthnote8');
    $dao->clearNote($userID,'monthnote9');
    $dao->clearNote($userID,'monthnote10');
    $dao->clearNote($userID,'monthnote11');
    $dao->clearNote($userID,'monthnote12');
    $dao->clearNote($userID,'monthnote13');
    $dao->clearNote($userID,'monthnote14');
    $dao->clearNote($userID,'monthnote15');
    $dao->clearNote($userID,'monthnote16');
    $dao->clearNote($userID,'monthnote17');
    $dao->clearNote($userID,'monthnote18');
    $dao->clearNote($userID,'monthnote19');
    $dao->clearNote($userID,'monthnote20');
    $dao->clearNote($userID,'monthnote21');
    $dao->clearNote($userID,'monthnote22');
    $dao->clearNote($userID,'monthnote23');
    $dao->clearNote($userID,'monthnote24');
    $dao->clearNote($userID,'monthnote25');
    $dao->clearNote($userID,'monthnote26');
    $dao->clearNote($userID,'monthnote27');
    $dao->clearNote($userID,'monthnote28');
    $dao->clearNote($userID,'monthnote29');
    $dao->clearNote($userID,'monthnote30');
    $dao->clearNote($userID,'monthnote31');
    $dao->clearNote($userID,'monthnote32');
    $dao->clearNote($userID,'monthnote33');
    $dao->clearNote($userID,'monthnote34');
    $dao->clearNote($userID,'monthnote35');

}

function clearFullSchedule($userID, $scheduleName){
    $dao = new Dao();

    $dao->clearSchedule($userID,$scheduleName,"1am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"2am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"3am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"4am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"5am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"6am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"7am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"8am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"9am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"10am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"11am_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"12pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"1pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"2pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"3pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"4pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"5pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"6pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"7pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"8pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"9pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"10pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"11pm_$scheduleName");
    $dao->clearSchedule($userID,$scheduleName,"12am_$scheduleName");

}


