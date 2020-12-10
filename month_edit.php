<?php
session_start();

if((isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == false) || !isset($_SESSION['authenticated'])){
    header("Location: index.php"); 
    exit();
}

require_once "month_presets.php";
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
            <div class="pagetitle2">
            <span class="recenteredit">This Month</span><button type="submit" name="action" value="montheditclear"  class="cornerbuttons">Clear</button><button type="submit" name="action" value="month" class="cornerbuttons">Save</button>
            </div>
            <div class = "month">
                <div><input type="text" value="<?php echo $monthname_preset;?>" class = "monthnameedit" name="monthname"></div>
            </div>
            <div class = "calendar">
                <div class = "table">
                    <table>
                        <tr>
                            <th><input type="text" value="<?php echo $monthweekday1_preset;?>" class = "dayedit" name="monthweekday1"></th>
                            <th><input type="text" value="<?php echo $monthweekday2_preset;?>" class = "dayedit" name="monthweekday2"></th>
                            <th><input type="text" value="<?php echo $monthweekday3_preset;?>" class = "dayedit" name="monthweekday3"></th>
                            <th><input type="text" value="<?php echo $monthweekday4_preset;?>" class = "dayedit" name="monthweekday4"></th>
                            <th><input type="text" value="<?php echo $monthweekday5_preset;?>" class = "dayedit" name="monthweekday5"></th>
                            <th><input type="text" value="<?php echo $monthweekday6_preset;?>" class = "dayedit" name="monthweekday6"></th>
                            <th><input type="text" value="<?php echo $monthweekday7_preset;?>" class = "dayedit" name="monthweekday7"></th>
                        </tr>
                        <tr>
                            <td><div><input type="text" value="<?php echo $monthday1_preset;?>" class = "datebox" name="monthday1"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote1_preset;?>" name="monthnote1"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday2_preset;?>" class = "datebox" name="monthday2"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote2_preset;?>" name="monthnote2"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday3_preset;?>" class = "datebox" name="monthday3"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote3_preset;?>" name="monthnote3"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday4_preset;?>" class = "datebox" name="monthday4"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote4_preset;?>" name="monthnote4"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday5_preset;?>" class = "datebox" name="monthday5"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote5_preset;?>" name="monthnote5"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday6_preset;?>" class = "datebox" name="monthday6"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote6_preset;?>" name="monthnote6"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday7_preset;?>" class = "datebox" name="monthday7"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote7_preset;?>" name="monthnote7"></textarea></div>
                            </td>
                        </tr>
                        <tr>
                            <td><div><input type="text" value="<?php echo $monthday8_preset;?>" class = "datebox" name="monthday8"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote8_preset;?>" name="monthnote8"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday9_preset;?>" class = "datebox" name="monthday9"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote9_preset;?>" name="monthnote9"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday10_preset;?>" class = "datebox" name="monthday10"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote10_preset;?>" name="monthnote10"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday11_preset;?>" class = "datebox" name="monthday11"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote11_preset;?>" name="monthnote11"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday12_preset;?>" class = "datebox" name="monthday12"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote12_preset;?>" name="monthnote12"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday13_preset;?>" class = "datebox" name="monthday13"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote13_preset;?>" name="monthnote13"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday14_preset;?>" class = "datebox" name="monthday14"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote14_preset;?>" name="monthnote14"></textarea></div>
                            </td>
                        </tr>
                        <tr>
                            <td><div><input type="text" value="<?php echo $monthday15_preset;?>" class = "datebox" name="monthday15"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote15_preset;?>" name="monthnote15"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday16_preset;?>" class = "datebox" name="monthday16"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote16_preset;?>" name="monthnote16"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday17_preset;?>" class = "datebox" name="monthday17"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote17_preset;?>" name="monthnote17"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday18_preset;?>" class = "datebox" name="monthday18"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote18_preset;?>" name="monthnote18"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday19_preset;?>" class = "datebox" name="monthday19"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote19_preset;?>" name="monthnote19"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday20_preset;?>" class = "datebox" name="monthday20"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote20_preset;?>" name="monthnote20"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday21_preset;?>" class = "datebox" name="monthday21"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote21_preset;?>" name="monthnote21"></textarea></div>
                            </td>
                        </tr>
                        <tr>
                            <td><div><input type="text" value="<?php echo $monthday22_preset;?>" class = "datebox" name="monthday22"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote22_preset;?>" name="monthnote22"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday23_preset;?>" class = "datebox" name="monthday23"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote23_preset;?>" name="monthnote23"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday24_preset;?>" class = "datebox" name="monthday24"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote24_preset;?>" name="monthnote24"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday25_preset;?>" class = "datebox" name="monthday25"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote25_preset;?>" name="monthnote25"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday26_preset;?>" class = "datebox" name="monthday26"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote26_preset;?>" name="monthnote26"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday27_preset;?>" class = "datebox" name="monthday27"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote27_preset;?>" name="monthnote27"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday28_preset;?>" class = "datebox" name="monthday28"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote28_preset;?>" name="monthnote28"></textarea></div>
                            </td>
                        </tr>
                        <tr>
                            <td><div><input type="text" value="<?php echo $monthday29_preset;?>" class = "datebox" name="monthday29"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote29_preset;?>" name="monthnote29"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday30_preset;?>" class = "datebox" name="monthday30"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote30_preset;?>" name="monthnote30"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday31_preset;?>" class = "datebox" name="monthday31"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote31_preset;?>" name="monthnote31"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday32_preset;?>" class = "datebox" name="monthday32"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote32_preset;?>" name="monthnote32"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday33_preset;?>" class = "datebox" name="monthday33"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote33_preset;?>" name="monthnote33"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday34_preset;?>" class = "datebox" name="monthday34"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote34_preset;?>" name="monthnote34"></textarea></div>
                            </td>
                            <td><div><input type="text" value="<?php echo $monthday35_preset;?>" class = "datebox" name="monthday35"><div>
                                <div><textarea class="noteboxedit" value="<?php echo $monthnote35_preset;?>" name="monthnote35"></textarea></div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </form>
    </body>
</html>