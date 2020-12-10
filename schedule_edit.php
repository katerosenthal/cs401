
<?php

class ScheduleEdit{

    private $scheduleName = "";


    public function __construct($scheduleName){
        $this->$scheduleName = $scheduleName;

        ?>

<head>
        <link rel="stylesheet" type="text/css" href="styles/schedulestyle.css">
    </head> 
        <input type='hidden' name='scheduleName' value='<?php echo $scheduleName;?>'/> 
        <ul class = "nobullets">
        <li class = "scoot8px"> <label for="1am">1:00</label> <input type="text" class="textbox90" name="1am_<?php echo $scheduleName;?>" id="1am"></li>
        <hr>
        <li class = "scoot8px"> <label for="2am">2:00</label> <input type="text" class="textbox90" name="2am_<?php echo $scheduleName;?>" id="2am"></li>
        <hr>
        <li class = "scoot8px"> <label for="3am">3:00</label> <input type="text" class="textbox90" name="3am_<?php echo $scheduleName;?>" id="3am"></li>
        <hr>
        <li class = "scoot8px"> <label for="4am">4:00</label> <input type="text" class="textbox90" name="4am_<?php echo $scheduleName;?>" id="4am"></li>
        <hr>
        <li class = "scoot8px"> <label for="5am">5:00</label> <input type="text" class="textbox90" name="5am_<?php echo $scheduleName;?>" id="5am"></li>
        <hr>
        <li class = "scoot8px"> <label for="6am">6:00</label> <input type="text" class="textbox90" name="6am_<?php echo $scheduleName;?>" id="6am"></li>
        <hr>
        <li class = "scoot8px"> <label for="7am">7:00</label> <input type="text" class="textbox90" name="7am_<?php echo $scheduleName;?>" id="7am"></li>
        <hr>
        <li class = "scoot8px"> <label for="8am">8:00</label> <input type="text" class="textbox90" name="8am_<?php echo $scheduleName;?>" id="8am"></li>
        <hr>
        <li class = "scoot8px"> <label for="9am">9:00</label> <input type="text" class="textbox90" name="9am_<?php echo $scheduleName;?>" id="9am"></li>
        <hr>
        <li><label for="10am">10:00</label> <input type="text" class="textbox90" name="10am_<?php echo $scheduleName;?>" id="10am"></li>
        <hr>
        <li><label for="11am">11:00</label> <input type="text" class="textbox90" name="11am_<?php echo $scheduleName;?>"  id="11am"></li>
        <hr>
        <li><label for="12pm">12:00</label> <input type="text" class="textbox90" name="12pm_<?php echo $scheduleName;?>"  id="12pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="1pm">1:00</label> <input type="text" class="textbox90" name="1pm_<?php echo $scheduleName;?>" id="1pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="2pm">2:00</label> <input type="text" class="textbox90" name="2pm_<?php echo $scheduleName;?>" id="2pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="3pm">3:00</label> <input type="text" class="textbox90" name="3pm_<?php echo $scheduleName;?>" id="3pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="4pm">4:00</label> <input type="text" class="textbox90" name="4pm_<?php echo $scheduleName;?>" id="4pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="5pm">5:00</label> <input type="text" class="textbox90" name="5pm_<?php echo $scheduleName;?>" id="5pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="6pm">6:00</label> <input type="text" class="textbox90" name="6pm_<?php echo $scheduleName;?>" id="6pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="7pm">7:00</label> <input type="text" class="textbox90" name="7pm_<?php echo $scheduleName;?>" id="7pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="8pm">8:00</label> <input type="text" class="textbox90" name="8pm_<?php echo $scheduleName;?>" id="8pm"></li>
        <hr>
        <li class = "scoot8px"> <label for="9pm">9:00</label> <input type="text" class="textbox90" name="9pm_<?php echo $scheduleName;?>" id="9pm"></li>
        <hr>
        <li><label for="10pm">10:00</label> <input type="text" class="textbox90" name="10pm_<?php echo $scheduleName;?>" id="10pm"></li>
        <hr>
        <li><label for="11pm">11:00</label> <input type="text" class="textbox90" name="11pm_<?php echo $scheduleName;?>" id="11pm"></li>
        <hr>
        <li><label for="12am">12:00</label> <input type="text" class="textbox90" name="12am_<?php echo $scheduleName;?>" id="12am"></li>
        <hr>
        </ul>
<?php
    }  
}

?>
