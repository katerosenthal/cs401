
<?php

class ScheduleEdit{

    private $scheduleName = "";


    public function __construct($scheduleName){
        $this->$scheduleName = $scheduleName;

        ?>

<head>
        <link rel="stylesheet" type="text/css" href="styles/schedulestyle.css">
    </head> 
        <input type='hidden' name='scheduleName' value='<?php echo "$scheduleName";?>'/> 
        <ul class = "nobullets">
        <li class = "scoot8px"> 1:00 <input type="text" class="textbox90" name="1am"></li>
        <hr>
        <li class = "scoot8px"> 2:00 <input type="text" class="textbox90" name="2am"></li>
        <hr>
        <li class = "scoot8px"> 3:00 <input type="text" class="textbox90" name="3am"></li>
        <hr>
        <li class = "scoot8px"> 4:00 <input type="text" class="textbox90" name="4am"></li>
        <hr>
        <li class = "scoot8px"> 5:00 <input type="text" class="textbox90" name="5am"></li>
        <hr>
        <li class = "scoot8px"> 6:00 <input type="text" class="textbox90" name="6am"></li>
        <hr>
        <li class = "scoot8px"> 7:00 <input type="text" class="textbox90" name="7am"></li>
        <hr>
        <li class = "scoot8px"> 8:00 <input type="text" class="textbox90" name="8am"></li>
        <hr>
        <li class = "scoot8px"> 9:00 <input type="text" class="textbox90" name="9am"></li>
        <hr>
        <li>10:00 <input type="text" class="textbox90" name="10am"></li>
        <hr>
        <li>11:00 <input type="text" class="textbox90" name="11am"></li>
        <hr>
        <li>12:00 <input type="text" class="textbox90" name="12pm"></li>
        <hr>
        <li class = "scoot8px"> 1:00 <input type="text" class="textbox90" name="1pm"></li>
        <hr>
        <li class = "scoot8px"> 2:00 <input type="text" class="textbox90" name="2pm"></li>
        <hr>
        <li class = "scoot8px"> 3:00 <input type="text" class="textbox90" name="3pm"></li>
        <hr>
        <li class = "scoot8px"> 4:00 <input type="text" class="textbox90" name="4pm"></li>
        <hr>
        <li class = "scoot8px"> 5:00 <input type="text" class="textbox90" name="5pm"></li>
        <hr>
        <li class = "scoot8px"> 6:00 <input type="text" class="textbox90" name="6pm"></li>
        <hr>
        <li class = "scoot8px"> 7:00 <input type="text" class="textbox90" name="7pm"></li>
        <hr>
        <li class = "scoot8px"> 8:00 <input type="text" class="textbox90" name="8pm"></li>
        <hr>
        <li class = "scoot8px"> 9:00 <input type="text" class="textbox90" name="9pm"></li>
        <hr>
        <li>10:00 <input type="text" class="textbox90" name="10pm"></li>
        <hr>
        <li>11:00 <input type="text" class="textbox90" name="11pm"></li>
        <hr>
        <li>12:00 <input type="text" class="textbox90" name="12am"></li>
        <hr>
        </ul>
<?php
    }  
}

?>
