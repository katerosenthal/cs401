<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}

require_once "week_presets.php";
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
            <div class="pagetitle2">
                <span class="recenteredit">This Week</span><button type="submit" name="action" value="weekeditclear" class="cornerbuttons">Clear</button><button type="submit" name="action" value="week" class="cornerbuttons">Save</button>
            </div>
            <div class = "dates">
                <span id = "date1"><input type="text" value="<?php echo $weekdate1_preset;?>" name="weekdate1"></span> - <span id = "date2"><input type="text" value="<?php echo $weekdate2_preset;?>" name="weekdate2"></span>
            </div>
            <div class = "week">
                <table>
                        <tr>
                            <th><input type="text" value="<?php echo $weekday1_preset;?>" class = "day" name="weekday1"></th>
                            <th><input type="text" value="<?php echo $weekday2_preset;?>" class = "day" name="weekday2"></th>
                            <th><input type="text" value="<?php echo $weekday3_preset;?>" class = "day" name="weekday3"></th>
                            <th><input type="text" value="<?php echo $weekday4_preset;?>" class = "day" name="weekday4"></th>
                            <th><input type="text" value="<?php echo $weekday5_preset;?>" class = "day" name="weekday5"></th>
                            <th><input type="text" value="<?php echo $weekday6_preset;?>" class = "day" name="weekday6"></th>
                            <th><input type="text" value="<?php echo $weekday7_preset;?>" class = "day" name="weekday7"></th>
                        </tr>
                        <tr>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule1 = New ScheduleEdit("weekschedule1");
                                ?>
                            </td>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule2 = New ScheduleEdit("weekschedule2");
                                ?>
                            </td>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule3 = New ScheduleEdit("weekschedule3");
                                ?>
                            </td>
                            <td class = "schedule">
                                <?php 
                                    $weekSchedule4 = New ScheduleEdit("weekschedule4");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule5 = New ScheduleEdit("weekschedule5");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule6 = New ScheduleEdit("weekschedule6");
                                ?>
                            </td>
                            <td class = "schedule"> 
                                <?php 
                                    $weekSchedule7 = New ScheduleEdit("weekschedule7");
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote1_preset;?>" name="weeknote1"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote2_preset;?>" name="weeknote2"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote3_preset;?>" name="weeknote3"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote4_preset;?>" name="weeknote4"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote5_preset;?>" name="weeknote5"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote6_preset;?>" name="weeknote6"></textarea>
                            </td>
                            <td class = "note">Notes
                                <br>
                                <textarea class="notearea" value="<?php echo $weeknote7_preset;?>" name="weeknote7"></textarea>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
    </form>
    </body>
</html>