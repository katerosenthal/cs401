<?php
session_start();
?>
<html>
    <head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/indexstyle.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
        <title>Welcome to PlanMyDay.net!</title>
    </head>
    <body>
        <div id = "outsideborder">
            <img src="images/clip3.png" id ="mainlogo" alt="Website Logo"/>
            <div id = "insideborder">
                <h1 class="header">Welcome to PlanMyDay.net!</h1>
                <form method = "POST" action = "index_handler.php">
                <div>
                    <div>Sign in or create a new account to get started!</div>
                    </br>
                    <div><label for="username">Username: </label><input type="text" name ="user" id = "username"></div>
                    <div><label for="password">Password: </label><input type="password" class="margin4px" name="pw" id = "password"></div>
                </div>
                </br>
                <div><input type="submit" value="Log In" name="action"> or <a href ="login.php"></a>
                     <input type="submit" value="Create New" name="action"> <a href ="login.php"></a>
                </div>
                </form>
            </div>
        </div>
            <?php
            if(isset($_SESSION['errors'])){
                foreach($_SESSION['errors'] as $error){
                    echo "<div class = 'errors'>{$error}</div>";
                }
            }
            ?>
    </body>
</html>