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
        <link rel="stylesheet" type="text/css" href="styles/monthstyle.css">
        <title>PlanMyDay.net Monthly Planner</title>
    </head>

<?php
    $pageName = "month";
    require_once "layout_edit.php";
    require_once "dao.php";
    require_once "display_types.php";
    $dao = new Dao();
?>
            <div class="pagetitle2">
                <span class="recenter">This Month</span> <button type="submit" name="action" value="monthclear"  class="cornerbuttons">Clear</button><a href ="month_edit.php"><button type="button" class="cornerbuttons">Edit</button></a>
            </div>
            <div class = "month">
                <div class = "monthname">
                        <?php  
				        displayMonth("monthname");
				        ?>
                </div>
            </div>
            <div class = "calendar">
                <div class = "table">
                    <table>
                        <tr>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday1");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday2");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday3");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday4");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday5");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday6");
				            ?>
                            </div></th>
                            <th  class= "fr1"><div class = "day">
                            <?php  
				            displayWeekday("monthweekday7");
				            ?>
                            </div></th>
                        </tr>
                        <tr>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday1");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote1");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday2");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote2");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday3");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote3");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday4");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote4");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday5");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote5");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday6");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote6");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday7");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote7");
				            ?>
                            </div></td>
                        </tr>
                        <tr>
                        <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday8");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote8");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday9");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote9");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday10");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote10");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday11");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote11");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday12");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote12");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday13");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote13");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday14");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote14");
				            ?>
                            </div></td>
                        </tr>
                        <tr>
                        <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday15");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote15");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday16");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote16");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday17");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote17");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday18");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote18");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday19");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote19");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday20");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote20");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday21");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote21");
				            ?>
                            </div></td>
                        </tr>
                        <tr>
                        <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday22");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote22");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday23");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote23");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday24");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote24");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday25");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote25");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday26");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote26");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday27");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote27");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday28");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote28");
				            ?>
                            </div></td>
                        </tr>
                        <tr>
                        <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday29");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote29");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday30");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote30");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday31");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote31");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday32");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote32");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday33");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote33");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday34");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote34");
				            ?>
                            </div></td>
                            <td><div class = "datebox">
                            <?php  
				            displayMonthday("monthday35");
				            ?>
                            </div>
                            <div class="notebox">
                            <?php  
				            displayNote("monthnote35");
				            ?>
                            </div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </form>
    </body>
</html>