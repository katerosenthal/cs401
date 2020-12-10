<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}
$_SESSION['errors'] = [];
?>

<head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/weekstyle.css">
        <title>PlanMyDay.net Weekly Planner</title>
    </head>

<?php
    $pageName = "week";
    require_once "layout_edit.php";
    require_once "dao.php";
    require_once "schedule.php";
    require_once "display_types.php";
    $dao = new Dao();
?>
            <div class="pagetitle2">
                <span class="recenter">This Week</span><button type="submit" name="action" value="weekclear" class="cornerbuttons">Clear</button><a href ="week_edit.php"><button type="button" class="cornerbuttons">Edit</button></a>
            </div>
            <div class = "dates">
                <span id = "date1">
                <?php  
				displayDate("weekdate1");
				?>
                </span>
                &nbsp;&nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp;&nbsp;
                 <span id = "date2">
                 <?php  
				displayDate("weekdate2");
				?>
                 </span>
            </div>
            <div class = "week">
                <table>
                        <tr>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday1");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday2");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday3");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday4");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday5");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday6");
				            ?>
                            </div></th>
                            <th><div class = "day">
                            <?php  
				            displayWeekday("weekday7");
				            ?>
                            </div></th>
                        </tr>
                        <tr>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule1 = New Schedule("weekschedule1");
                                ?>
                            </td>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule2 = New Schedule("weekschedule2");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule3 = New Schedule("weekschedule3");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule4 = New Schedule("weekschedule4");
                                ?>
                            </td>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule5 = New Schedule("weekschedule5");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule6 = New Schedule("weekschedule6");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule7 = New Schedule("weekschedule7");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote1");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote2");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote3");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote4");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote5");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote6");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div class = "notetext">
                                <?php  
				                displayNote("weeknote7");
				                ?>
                            </div>
                            </td>
                        </tr>
                </table>
            </div>
        </form>
    </body>
</html>