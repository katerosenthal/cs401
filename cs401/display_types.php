<?php

function displayNote($inputName){
    $dao = new Dao();
    if($dao->noteExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getNote(implode($_SESSION['id']), $inputName))));
    }
}

function displayMonthday($inputName){
    $dao = new Dao();
    if($dao->monthdayExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getMonthday(implode($_SESSION['id']), $inputName))));
    }
}

function displayWeekday($inputName){
    $dao = new Dao();
    if($dao->weekdayExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getWeekday(implode($_SESSION['id']), $inputName))));
    }
}

function displayDate($inputName){
    $dao = new Dao();
    if($dao->dateExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getDate(implode($_SESSION['id']), $inputName))));
    }
}

function displayMonth($inputName){
    $dao = new Dao();
    if($dao->monthExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getMonth(implode($_SESSION['id']), $inputName))));
        }
}

function displayTask($inputName){
    $dao = new Dao();
    if($dao->taskExists(implode($_SESSION['id']), $inputName)){
        echo(htmlspecialchars(implode($dao->getTask(implode($_SESSION['id']), $inputName))));
        }
}

/*
function displaySchedule($scheduleName, $inputName){
    $dao = new Dao();
    if($dao->scheduleExists(implode($_SESSION['id']), $scheduleName, $inputName)){
        echo(htmlspecialchars(implode($dao->getSchedule(implode($_SESSION['id']), $scheduleName, $inputName))));
        }
}
*/
?>