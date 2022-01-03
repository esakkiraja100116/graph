<?php
include_once "backend.php";
include_once "session.php";

class Teachers
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Database();
    }

    // parameter $info is the array
    public function insert_staff($info)
    {
        $value = new Teachers();
        $result = $value->check_lab($info[5]);
        //echo "checking for uniquness";
        //echo $result;
        if ($result == "Yeah it is unique") {
            $query = "INSERT INTO `staff_info`(`staff_name`, `gender`, `username`, `password`, `staff_code`, `lab_name`, `total_students`, `auth_token`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]');";
            //echo $query;
            //print_r($info);
            $result = $this->conn->action($query);
            if ($result != false) {
                //return "your given values are inserted";
                echo '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            your given values are inserted.
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            } else {
                //return "Check different username.There is some problem in inserting";
                echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            Check with different username.There is some problem in inserting.
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }
        } else {
            $first =  $value->check_gender($result);
            $lab_name = $info[5];
            echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            Sorry ' .$result . " ". $first .' is for '.$lab_name. ' .Please, Select different lab.
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }

    public function check_info($u)
    {
        $query = "SELECT * FROM `staff_info` WHERE `username` = '$u';";
        //echo $query;
        $result = $this->conn->select($query);
        return $result;
    }


    public function check_staff_code()
    {
        $query = "SELECT `staff_code` FROM `staff_info`;";
        $result = $this->conn->get_all($query);
        return $result;
    }

    public function staff_username($username)
    {
        $query = "SELECT `username` FROM  `staff_info` WHERE `username` = '$username' ;";
        $result = $this->conn->select($query);
        return $result;
    }

    public function check_lab($lab_name)
    {
        $query = "SELECT `staff_name` FROM  `staff_info` WHERE `lab_name` = '$lab_name' ;";
        $result = $this->conn->select($query);
        if ($result == "Your Query Provide the empty result") {
            return "Yeah it is unique";
            //return 1;
        } else {
            return $result['staff_name'];
        }
    }

    public function check_gender($name)
    {
        $query = "SELECT `gender` FROM  `staff_info` WHERE `username` = '$name' ;";
        //echo $query;
        $result = $this->conn->select($query);
        //print_r($result);
        if ($result['gender'] == "male") {
            return "sir";
        } else if ($result['gender'] == "female") {
            return "madam";
        }
    }
}

echo "helo";
$check = new Teachers();
$result = $check->check_staff_code();
