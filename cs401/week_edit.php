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
    $pageName = "week_edit";
    require_once "layout_edit.php";
    require_once "schedule_edit.php";
?>
            <div class="pagetitle">
                <span class="recenteredit">This Week</span> <button type="submit" name="action" value="week" class="cornerbutton">Save</button>
            </div>
            <div class = "dates">
                <span id = "date1"><input type="text" name="weekdate1"></span> - <span id = "date2"><input type="text" name="weekdate2"></span>
            </div>
            <div class = "week">
                <table>
                        <tr>
                            <th><input type="text" class = "day" name="weekday1"></th>
                            <th><input type="text" class = "day" name="weekday2"></th>
                            <th><input type="text" class = "day" name="weekday3"></th>
                            <th><input type="text" class = "day" name="weekday4"></th>
                            <th><input type="text" class = "day" name="weekday5"></th>
                            <th><input type="text" class = "day" name="weekday6"></th>
                            <th><input type="text" class = "day" name="weekday7"></th>
                        </tr>
                        <tr>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule1 = New ScheduleEdit("weekschedule1");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule2 = New ScheduleEdit("weekschedule2");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule3 = New ScheduleEdit("weekschedule3");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule4 = New ScheduleEdit("weekschedule4");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule5 = New ScheduleEdit("weekschedule5");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule6 = New ScheduleEdit("weekschedule6");
                                ?>
                            </td>
                            <td class = "schedule">Schedule 
                                <?php 
                                    $weekSchedule7 = New ScheduleEdit("weekschedule7");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote1">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote2">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote3">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote4">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote5">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote6">
                                </textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" name="weeknote7">
                                </textarea>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </form>
    </body>
</html>