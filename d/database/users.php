<?php
include_once "backend.php";
include_once "session.php";

class Users{
    private $conn;
    public function __construct(){
        $this->conn = new Database();    
    }

    // parameter $info is the array
    public function insert_user($info){
        $query = "INSERT INTO `users_info`( `register_number`, `name`, `gender`, `user_id`, `password`, `mail_id`, `year`, `department`, `phone_number`, `auth_token`, `lab_name`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]','$info[9]','$info[10]')";
        $result = $this->conn->action($query);
        if($result != false){
            echo "your given values are inserted";
        }else {
            echo "There is some problem in inserting";
        }
    }

    public function check_info($reg_num){
        $query = "SELECT * FROM `users_info` WHERE `register_number` = '$reg_num';";
        //echo $query;
        $result = $this->conn->select($query);
        return $result;
    }

}

//$check = new Users();
//$check->check_info("2012025");