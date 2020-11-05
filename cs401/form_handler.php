<?php 
session_start();
require_once 'dao.php';
$_SESSION['errors'] = [];
$dao = new Dao();


//Today
if ($_POST['action'] == 'today'){
    $scheduleName = $_POST['scheduleName'];
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
    saveSchedule($scheduleName, '1am');
    saveSchedule($scheduleName, '2am');
    saveSchedule($scheduleName, '3am');
    saveSchedule($scheduleName, '4am');
    saveSchedule($scheduleName, '5am');
    saveSchedule($scheduleName, '6am');
    saveSchedule($scheduleName, '7am');
    saveSchedule($scheduleName, '8am');
    saveSchedule($scheduleName, '9am');
    saveSchedule($scheduleName, '10am');
    saveSchedule($scheduleName, '11am');
    saveSchedule($scheduleName, '12pm');
    saveSchedule($scheduleName, '1pm');
    saveSchedule($scheduleName, '2pm');
    saveSchedule($scheduleName, '3pm');
    saveSchedule($scheduleName, '4pm');
    saveSchedule($scheduleName, '5pm');
    saveSchedule($scheduleName, '6pm');
    saveSchedule($scheduleName, '7pm');
    saveSchedule($scheduleName, '8pm');
    saveSchedule($scheduleName, '9pm');
    saveSchedule($scheduleName, '10pm');
    saveSchedule($scheduleName, '11pm');
    saveSchedule($scheduleName, '12am');

    header("Location: today.php"); 
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
    $scheduleName = $_POST['scheduleName'];

        saveSchedule($scheduleName,'1am');
        saveSchedule($scheduleName,'2am');
        saveSchedule($scheduleName,'3am');
        saveSchedule($scheduleName,'4am');
        saveSchedule($scheduleName,'5am');
        saveSchedule($scheduleName,'6am');
        saveSchedule($scheduleName,'7am');
        saveSchedule($scheduleName,'8am');
        saveSchedule($scheduleName,'9am');
        saveSchedule($scheduleName,'10am');
        saveSchedule($scheduleName,'11am');
        saveSchedule($scheduleName,'12pm');
        saveSchedule($scheduleName,'1pm');
        saveSchedule($scheduleName,'2pm');
        saveSchedule($scheduleName,'3pm');
        saveSchedule($scheduleName,'4pm');
        saveSchedule($scheduleName,'5pm');
        saveSchedule($scheduleName,'6pm');
        saveSchedule($scheduleName,'7pm');
        saveSchedule($scheduleName,'8pm');
        saveSchedule($scheduleName,'9pm');
        saveSchedule($scheduleName,'10pm');
        saveSchedule($scheduleName,'11pm');
        saveSchedule($scheduleName,'12am');
    

    //Notes
    saveNote('weeknote1');
    saveNote('weeknote2');
    saveNote('weeknote3');
    saveNote('weeknote4');
    saveNote('weeknote5');
    saveNote('weeknote6');
    saveNote('weeknote7');

    header("Location: week.php"); 
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

    header("Location: month.php"); 
    exit();
}

function saveTask($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 256) {
        if(!$dao->taskExists(implode($_SESSION['id']), $inputName)){
            $dao->storeTask(implode($_SESSION['id']), $inputName, $_POST[$inputName]);
        }else{
            $dao->updateTask(implode($_SESSION['id']), $inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 256){
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
    if(strlen($_POST[$inputName]) > 25){
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
    if(strlen($_POST[$inputName]) > 1000){
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
    if(strlen($_POST[$inputName]) > 25){
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
    if(strlen($_POST[$inputName]) > 25){
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
            $_SESSION['errors'][] = "Input for calendar dates must be a numeric value from 1-31."; 
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
    if(strlen($_POST[$inputName]) > 256){
        $_SESSION['errors'][] = "Input for schedule items must be under 256 characters."; 
    }
}

/*
function saveSchedule($inputName){
    $dao = new Dao();
    if(strlen($_POST[$inputName]) > 0 && strlen($_POST[$inputName]) < 256) {
        if(!$dao->scheduleExists(implode($_SESSION['id']), $_POST['scheduleName'],$inputName)){
            $dao->storeSchedule(implode($_SESSION['id']), $_POST['scheduleName'],$inputName, $_POST[$inputName]);
        }else{
            $dao->updateSchedule(implode($_SESSION['id']), $_POST['scheduleName'],$inputName, $_POST[$inputName]);  
        }
    }
    if(strlen($_POST[$inputName]) > 256){
        echo "Input for schedule items must be under 256 characters.";
        exit(); 
    }
}
 */


