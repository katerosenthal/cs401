<?php
if((count($_SESSION['errors']) > 0) && isset($_SESSION['weekform'])){
    $weekdate1_preset = $_SESSION['weekform']['weekdate1'];
    $weekdate2_preset = $_SESSION['weekform']['weekdate2'];

    $weekday1_preset = $_SESSION['weekform']['weekday1'];
    $weekday2_preset = $_SESSION['weekform']['weekday2'];
    $weekday3_preset = $_SESSION['weekform']['weekday3'];
    $weekday4_preset = $_SESSION['weekform']['weekday4'];
    $weekday5_preset = $_SESSION['weekform']['weekday5'];
    $weekday6_preset = $_SESSION['weekform']['weekday6'];
    $weekday7_preset = $_SESSION['weekform']['weekday7'];

    $weeknote1_preset = $_SESSION['weekform']['weeknote1'];
    $weeknote2_preset = $_SESSION['weekform']['weeknote2'];
    $weeknote3_preset = $_SESSION['weekform']['weeknote3'];
    $weeknote4_preset = $_SESSION['weekform']['weeknote4'];
    $weeknote5_preset = $_SESSION['weekform']['weeknote5'];
    $weeknote6_preset = $_SESSION['weekform']['weeknote6'];
    $weeknote7_preset = $_SESSION['weekform']['weeknote7'];
	
}else{
    $weekdate1_preset = '';
    $weekdate2_preset = '';

    $weekday1_preset = '';
    $weekday2_preset = '';
    $weekday3_preset = '';
    $weekday4_preset = '';
    $weekday5_preset = '';
    $weekday6_preset = '';
    $weekday7_preset = '';

    $weeknote1_preset = '';
    $weeknote2_preset = '';
    $weeknote3_preset = '';
    $weeknote4_preset = '';
    $weeknote5_preset = '';
    $weeknote6_preset = '';
    $weeknote7_preset = '';
}
?>