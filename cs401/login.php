<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}
?>

<head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/loginstyle.css">
        <title>Welcome to PlanMyDay.net!</title>
</head>

<?php
    $pageName = "profile";
    require_once "layout.php";
?>
            <div class = "profile">
                <img src="images/user.png" id ="profilepic" alt="Profile Picture"/>
                <h1><?php echo(ucfirst($_SESSION['user']) . "'s Schedules");?></h1>
            </div>
        </div>
    </body>
</html>