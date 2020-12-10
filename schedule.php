<?php

class Schedule{

    private $scheduleName = "";


    public function __construct($scheduleName){
        $this->$scheduleName = $scheduleName;

        require_once "display_types.php"; 

?>


<head>
        <link rel="stylesheet" type="text/css" href="styles/schedulestyle.css">
    </head>                
                <ul class = "nobullets">
                    <li class = "scoot8px"> 1:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "1am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 2:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "2am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 3:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "3am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 4:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "4am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 5:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "5am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 6:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "6am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 7:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "7am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 8:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "8am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 9:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "9am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>10:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "10am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>11:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "11am_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>12:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "12pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 1:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "1pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 2:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "2pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 3:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "3pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 4:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "4pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 5:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "5pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 6:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "6pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 7:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "7pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 8:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "8pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 9:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "9pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>10:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "10pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>11:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "11pm_$scheduleName");
					?>
                    </li>
                    <hr>
                    <li>12:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "12am_$scheduleName");
					?>
                    </li>
                    <hr>
                </ul>

<?php
    }  
}

?>
                