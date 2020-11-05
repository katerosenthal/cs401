<?php
function displaySchedule($scheduleName, $inputName){
    $dao = new Dao();
    if($dao->scheduleExists(implode($_SESSION['id']), $scheduleName, $inputName)){
        echo(htmlspecialchars(implode($dao->getSchedule(implode($_SESSION['id']), $scheduleName, $inputName))));
        }
}

/*
getScheduleID($userID, $name, $time)
getScheduleFromID($scheduleID)

form_handler $_POST['scheduleName']

saveSchedule()
 */
?>

