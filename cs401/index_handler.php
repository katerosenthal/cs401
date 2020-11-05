<?php 
session_start();
require_once 'dao.php';
$_SESSION['errors'] = [];

$dao = new Dao();

if ($_POST['action'] == 'Create New') {
    if($dao->usernameExists($_POST['user'])){
        $_SESSION['errors'][] = "User already exists.";
    }else{
        if(strlen($_POST['user']) >= 3 && strlen($_POST['user']) <= 30 && strlen($_POST['pw']) >= 5 && strlen($_POST['pw']) <= 100) {
            $dao->createUser($_POST['user'], $_POST['pw']);
            header("Location: login.php");
            echo "Got here";
        }
        if(strlen($_POST['user']) == 0){
            $_SESSION['errors'][] = "Please enter a username.";
        }
        if(strlen($_POST['pw']) == 0){
            $_SESSION['errors'][] = "Please enter a password.";
        }
        if(strlen($_POST['user']) < 3 || strlen($_POST['user']) > 30){
            $_SESSION['errors'][] = "Username must be between 3 and 30 characters.";
        }
        if(strlen($_POST['pw']) < 5 || strlen($_POST['pw']) > 100){
            $_SESSION['errors'][] = "Password must be between 5 and 100 characters";
        }
    }

    if(count($_SESSION['errors']) > 0){
        header("Location: index.php");
        exit();
    } 
} 

if($_POST['action'] == 'Log In') {
    if(strlen($_POST['user']) >= 3 && strlen($_POST['user']) <= 30 && strlen($_POST['pw']) >= 5 && strlen($_POST['pw']) <= 100) {
        if($dao->userExists($_POST['user'], $_POST['pw'])){
            $_SESSION['authenticated'] = true;
            $_SESSION['id'] = $dao->getUserID($_POST['user'], $_POST['pw']);
            $_SESSION['user'] = $_POST['user'];
            header("Location: login.php");
        }else{
            $_SESSION['authenticated'] = false;
            $_SESSION['errors'][] = "Invalid Username and Password combination.";
        }
    }
    if(strlen($_POST['user']) == 0){
        $_SESSION['errors'][] = "Please enter a username.";
    }
    if(strlen($_POST['pw']) == 0){
        $_SESSION['errors'][] = "Please enter a password.";
    }
    if(strlen($_POST['user']) < 3 || strlen($_POST['user']) > 30){
        $_SESSION['errors'][] = "Username must be between 3 and 30 characters."; 
    }
    if(strlen($_POST['pw']) < 5 || strlen($_POST['pw']) > 100){
        $_SESSION['errors'][] = "Password must be between 5 and 100 characters";

    }

    if(count($_SESSION['errors']) > 0){
        header("Location: index.php");
        exit();
    }
}

//header("Location: index.php");
//exit();

?>