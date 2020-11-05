<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}
?>

<head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/weekstyle.css">
        <title>PlanMyDay.net Weekly Planner</title>
    </head>

<?php
    $pageName = "week";
    require_once "layout.php";
    require_once "dao.php";
    require_once "schedule.php";
    require_once "display_types.php";
    $dao = new Dao();
?>
            <div class="pagetitle">
                <span class="recenter">This Week <span id="javanote">*may need javascript for schedules</span></span><button type="button" class="cornerbuttons">Clear</button><a href ="week_edit.php"><button type="button" class="cornerbuttons">Edit</button></a>
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
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule1 = New Schedule("weekschedule1");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule2 = New Schedule("weekschedule2");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule3 = New Schedule("weekschedule3");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule4 = New Schedule("weekschedule4");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule5 = New Schedule("weekschedule5");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule6 = New Schedule("weekschedule6");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule7 = New Schedule("weekschedule7");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote1");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote2");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote3");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote4");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote5");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote6");
				                ?>
                            </div>
                            </td>
                            <td class = "note">Notes
                            <div>
                                <?php  
				                displayNote("weeknote7");
				                ?>
                            </div>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </body>
</html>