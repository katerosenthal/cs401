<?php 
session_start();
require_once 'dao.php';
$_SESSION['errors'] = [];

$dao = new Dao();
$salt = 'supercalifragilisticexpialidocious';

if ($_POST['action'] == 'Create New') {
    if($dao->usernameExists($_POST['user'])){
        $_SESSION['errors'][] = "User already exists.";
    }else{
        if(strlen($_POST['user']) > 0 && strlen($_POST['user']) <= 30 && strlen($_POST['pw']) >= 8) {
            $securepass= hash('sha256', $_POST['pw'] . $salt);
            $dao->createUser($_POST['user'], $securepass); 
            $_SESSION['authenticated'] = true;
            $_SESSION['id'] = $dao->getUserID($_POST['user'], $securepass); 
            $_SESSION['user'] = $_POST['user'];
            header("Location: login.php");
        }
        if(strlen($_POST['user']) == 0){
            $_SESSION['errors'][] = "Please enter a username.";
        }
        if(strlen($_POST['pw']) == 0){
            $_SESSION['errors'][] = "Please enter a password.";
        }
        if(strlen($_POST['user']) > 30){
            $_SESSION['errors'][] = "Username may not exceed 30 characters.";
        }
        if(strlen($_POST['pw']) < 8){
            $_SESSION['errors'][] = "Password must be 8 or more characters";
        }
    }

    if(count($_SESSION['errors']) > 0){
        header("Location: index.php");
        exit();
    } 
} 

if($_POST['action'] == 'Log In') {
    if(strlen($_POST['user']) > 0 && strlen($_POST['user']) <= 30 && strlen($_POST['pw']) >= 8) {
        $securepass= hash('sha256', $_POST['pw'] . $salt);
        if($dao->userExists($_POST['user'], $securepass)){
            $_SESSION['authenticated'] = true;
            $_SESSION['id'] = $dao->getUserID($_POST['user'], $securepass);
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
    if(strlen($_POST['user']) > 30){
        $_SESSION['errors'][] = "Username may not exceed 30 characters."; 
    }
    if(strlen($_POST['pw']) < 8){
        $_SESSION['errors'][] = "Password must be 8 or more characters";

    }

    if(count($_SESSION['errors']) > 0){
        header("Location: index.php");
        exit();
    }
}

?>