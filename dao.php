<?php

class Dao {

    //local
    /*
    private $host = "127.0.0.1";
    private $db = "cs401";
    private $user = "root";
    private $pw = "";
    */
    //heroku 
    
    private $host = "us-cdbr-east-02.cleardb.com";
    private $db = "heroku_5b0f731e304feb1";
    private $user = "b8c167f3e5b359";
    private $pw = "4d931243";
    
    public function getConnection () {
        try{
            $conn = new PDO("mysql:dbname={$this->db};host={$this->host}", $this->user, $this->pw);
            return $conn;
        } catch (Exception $e){
            echo print_r($e, 1);
            exit;
        }
    }


    //Users
    public function createUser($userName, $password){
        $conn = $this->getConnection();
        $query = "insert into users(username, password) values(:username, :password)";
        $q = $conn->prepare($query);
        $q->bindParam(":username", $userName);
        $q->bindParam(":password", $password);
        $q->execute();
        
    }

    public function getUsers(){
        $conn = $this->getConnection();
        return $conn->query("select * from users", PDO::FETCH_ASSOC);
    }

    public function getUserID($userName, $password){
        $conn = $this->getConnection();
        $query = "select userID from users where username = :username and password = :password";
        $q = $conn->prepare($query);
        $q->bindParam(":username", $userName);
        $q->bindParam(":password", $password);
        $q->execute();
        $id = $q->fetch(PDO::FETCH_ASSOC);
        return $id;
    }

    public function userExists($userName, $password){
        $conn = $this->getConnection();
        $query = "select userID from users where username = :username and password = :password";
        $q = $conn->prepare($query);
        $q->bindParam(":username", $userName);
        $q->bindParam(":password", $password);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function usernameExists($userName){
        $conn = $this->getConnection();
        $query = "select userID from users where username = :username";
        $q = $conn->prepare($query);
        $q->bindParam(":username", $userName);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }


    //Tasks
    public function storeTask($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into tasks(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function getTask($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from tasks where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function updateTask($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update tasks set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function taskExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select taskID from tasks where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function clearTask($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from tasks where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    //Notes
    public function storeNote($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into notes(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateNote($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update notes set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function noteExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select noteID from notes where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getNote($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from notes where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearNote($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from notes where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    //Schedule
    public function storeSchedule($userID, $name, $time , $text){
        $conn = $this->getConnection();
        $query = "insert into schedules(userID, name, time, text) values(:userID, :name, :time, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":time", $time);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateSchedule($userID, $name, $time, $text){
        $conn = $this->getConnection();
        $query = "update schedules set text = :text where (userID = :userID and name = :name and time = :time)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->bindParam(":time", $time);
        $q->execute();

    }

    public function scheduleExists($userID, $name, $time){
        $conn = $this->getConnection();
        $query = "select scheduleID from schedules where (userID = :userID and name = :name and time = :time)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":time", $time);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getSchedule($userID, $name, $time){
        $conn = $this->getConnection();
        $query = "select text from schedules where (userID = :userID and name = :name and time = :time)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":time", $time);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function getScheduleID($userID, $name, $time){
        $conn = $this->getConnection();
        $query = "select scheduleID from schedules where (userID = :userID and name = :name and time = :time)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":time", $time);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function getScheduleFromID($scheduleID){
        $conn = $this->getConnection();
        $query = "select text from schedules where scheduleID = :scheduleID";
        $q = $conn->prepare($query);
        $q->bindParam(":scheduleID", $scheduleID);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearSchedule($userID, $name, $time){
        $conn = $this->getConnection();
        $query = "delete from schedules where (userID = :userID and name = :name and time = :time)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":time", $time);
        $q->execute();
    }

    //Date
    public function storeDate($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into dates(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateDate($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update dates set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function dateExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select dateID from dates where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getDate($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from dates where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearDate($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from dates where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    //Day Of Week
    public function storeWeekday($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into weekdays(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateWeekday($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update weekdays set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function weekdayExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select weekdayID from weekdays where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getWeekday($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from weekdays where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearWeekday($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from weekdays where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    //Month
    public function storeMonth($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into month(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateMonth($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update month set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function monthExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select monthID from month where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getMonth($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from month where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearMonth($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from month where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

    //Day of Month
    public function storeMonthday($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "insert into monthdays(userID, name, text) values(:userID, :name, :text)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->bindParam(":text", $text);
        $q->execute();

    }

    public function updateMonthday($userID, $name, $text){
        $conn = $this->getConnection();
        $query = "update monthdays set text = :text where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":text", $text);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();

    }

    public function monthdayExists($userID, $name){
        $conn = $this->getConnection();
        $query = "select monthdayID from monthdays where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $count = $q->rowCount();
        if($count == 1){
            return true;
        }else{
            return false;
        }
    }

    public function getMonthday($userID, $name){
        $conn = $this->getConnection();
        $query = "select text from monthdays where userID = :userID and name = :name";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
        $text = $q->fetch(PDO::FETCH_ASSOC);
        return $text;

    }

    public function clearMonthday($userID, $name){
        $conn = $this->getConnection();
        $query = "delete from monthdays where (userID = :userID and name = :name)";
        $q = $conn->prepare($query);
        $q->bindParam(":userID", $userID);
        $q->bindParam(":name", $name);
        $q->execute();
    }

}

?>