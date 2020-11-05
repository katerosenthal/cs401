<?php

class Schedule{

    private $scheduleName = "";


    public function __construct($scheduleName){
        $this->$scheduleName = $scheduleName;

        require_once "schedule_helpers.php"; 

?>


<head>
        <link rel="stylesheet" type="text/css" href="styles/schedulestyle.css">
    </head>                
                <ul class = "nobullets">
                    <li class = "scoot8px"> 1:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "1am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 2:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "2am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 3:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "3am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 4:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "4am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 5:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "5am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 6:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "6am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 7:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "7am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 8:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "8am");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 9:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "9am");
					?>
                    </li>
                    <hr>
                    <li>10:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "10am");
					?>
                    </li>
                    <hr>
                    <li>11:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "11am");
					?>
                    </li>
                    <hr>
                    <li>12:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "12pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 1:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "1pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 2:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "2pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 3:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "3pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 4:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "4pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 5:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "5pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 6:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "6pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 7:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "7pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 8:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "8pm");
					?>
                    </li>
                    <hr>
                    <li class = "scoot8px"> 9:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "9pm");
					?>
                    </li>
                    <hr>
                    <li>10:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "10pm");
					?>
                    </li>
                    <hr>
                    <li>11:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "11pm");
					?>
                    </li>
                    <hr>
                    <li>12:00 &nbsp;&nbsp;&nbsp;&nbsp;
                    <?php  
					displaySchedule($scheduleName, "12am");
					?>
                    </li>
                    <hr>
                </ul>

<?php
    }  
}

?>
                