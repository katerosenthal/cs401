<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}
?>

<head>
        <link href="images/favicon.jpg" type ="image/gif" rel ="shortcut icon">
        <link rel="stylesheet" type="text/css" href="styles/monthstyle.css">
        <title>PlanMyDay.net Monthly Planner</title>
    </head>

<?php
    $pageName = "month_edit";
    require_once "layout_edit.php";
?>
            <div class="pagetitle">
            <span class="recenteredit">This Month</span> <button type="submit" name="action" value="month" class="cornerbutton">Save</button>
            </div>
            <div class = "month">
                <div><input type="text" class = "monthnameedit" name="monthname"></div>
            </div>
            <div class = "calendar">
                <div class = "table">
                    <table>
                        <tr>
                            <th><input type="text" class = "day" name="monthweekday1"></th>
                            <th><input type="text" class = "day" name="monthweekday2"></th>
                            <th><input type="text" class = "day" name="monthweekday3"></th>
                            <th><input type="text" class = "day" name="monthweekday4"></th>
                            <th><input type="text" class = "day" name="monthweekday5"></th>
                            <th><input type="text" class = "day" name="monthweekday6"></th>
                            <th><input type="text" class = "day" name="monthweekday7"></th>
                        </tr>
                        <tr>
                            <td><div><input type="text" class = "datebox" name="monthday1"><div><div><textarea class="notebox" name="monthnote1"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday2"><div><div><textarea class="notebox" name="monthnote2"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday3"><div><div><textarea class="notebox" name="monthnote3"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday4"><div><div><textarea class="notebox" name="monthnote4"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday5"><div><div><textarea class="notebox" name="monthnote5"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday6"><div><div><textarea class="notebox" name="monthnote6"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday7"><div><div><textarea class="notebox" name="monthnote7"></textarea></div></td>
                        </tr>
                        <tr>
                            <td><div><input type="text" class = "datebox" name="monthday8"><div><div><textarea class="notebox" name="monthnote8"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday9"><div><div><textarea class="notebox" name="monthnote9"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday10"><div><div><textarea class="notebox" name="monthnote10"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday11"><div><div><textarea class="notebox" name="monthnote11"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday12"><div><div><textarea class="notebox" name="monthnote12"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday13"><div><div><textarea class="notebox" name="monthnote13"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday14"><div><div><textarea class="notebox" name="monthnote14"></textarea></div></td>
                        </tr>
                        <tr>
                            <td><div><input type="text" class = "datebox" name="monthday15"><div><div><textarea class="notebox" name="monthnote15"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday16"><div><div><textarea class="notebox" name="monthnote16"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday17"><div><div><textarea class="notebox" name="monthnote17"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday18"><div><div><textarea class="notebox" name="monthnote18"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday19"><div><div><textarea class="notebox" name="monthnote19"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday20"><div><div><textarea class="notebox" name="monthnote20"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday21"><div><div><textarea class="notebox" name="monthnote21"></textarea></div></td>
                        </tr>
                        <tr>
                            <td><div><input type="text" class = "datebox" name="monthday22"><div><div><textarea class="notebox" name="monthnote22"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday23"><div><div><textarea class="notebox" name="monthnote23"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday24"><div><div><textarea class="notebox" name="monthnote24"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday25"><div><div><textarea class="notebox" name="monthnote25"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday26"><div><div><textarea class="notebox" name="monthnote26"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday27"><div><div><textarea class="notebox" name="monthnote27"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday28"><div><div><textarea class="notebox" name="monthnote28"></textarea></div></td>
                        </tr>
                        <tr>
                            <td><div><input type="text" class = "datebox" name="monthday29"><div><div><textarea class="notebox" name="monthnote29"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday30"><div><div><textarea class="notebox" name="monthnote30"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday31"><div><div><textarea class="notebox" name="monthnote31"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday32"><div><div><textarea class="notebox" name="monthnote32"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday33"><div><div><textarea class="notebox" name="monthnote33"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday34"><div><div><textarea class="notebox" name="monthnote34"></textarea></div></td>
                            <td><div><input type="text" class = "datebox" name="monthday35"><div><div><textarea class="notebox" name="monthnote35"></textarea></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </form>
    </body>
</html>