1!

<?php

include_once "users.php";
include_once "teachers.php";


class Validate{
    
    public function inserting($non_validate_info)
    {
        $insert = new Users();
        $validate_info = $this->validation($non_validate_info);
        //$info = array($num,"felix","male","876566","pass","felixrajadurai.m.ug20.cs@francisxavier.ac.in",2,"CSE","9567438939","dheicuitjdckheiuhsdhfhjou","PCL");
        $insert->insert_user($validate_info);
    }
    
    public function validation($non_validate_info){
        $reg_num = self::is_num($non_validate_info[0]);
        $name = self::is_text($non_validate_info[1]);
        $gender = self::is_text($non_validate_info[2]);
        $user_id = self::is_num($non_validate_info[3]);
        $salt = "pimelikapilafhiiiiii";
        $hashed_pass = md5($salt + $non_validate_info[4] + "234");
        $mail = self::is_email($non_validate_info[5]);
        $year = self::is_num($non_validate_info[6]);
        $department = self::is_text($non_validate_info[7]);
        $phone_number = self::is_num($non_validate_info[8]);
        $auth_token = $non_validate_info[9];
        $lab_name = self::is_text($non_validate_info[10]);

        $total_info = array($reg_num,$name,$gender,$user_id,$salt,$hashed_pass,$mail,$year,$department,$phone_number,$auth_token,$lab_name);
        return $total_info;
    }

    public static function is_num($num){
        if(is_numeric($num) == 1){
            return $num;
        }else{
            echo "It is not a number";
        }
    }

    public static function is_text($text){
        if(is_string($text) == 1){
            return $text;
        }else{
            echo "The given value is not a text";
        }
    }

    public static function is_email($mail){
        if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
            echo "your email address is invalid";
        }else{ 
            return $mail;
        }
    }
}

Class Validate_staff{
    
    public static function check_staff_login($u,$p){
        $check = new Teachers();
        $all_info = $check->check_info($u);
        //print_r($all_info);
        if($all_info == "Your Query Provide the empty result"){
            echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Sorry your Username or Password wrong :(
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
        }else{
            //echo "user enterd : ".$u."<br>";
            //echo "password with md5 : ".$p."<br>";
            //echo "user password : ".md5($p)."<br>";

            //echo $all_info['password'];

            if($u == $all_info['username'] and md5($p) == $all_info['password']){
                header("Location: /dashboard/d.php");
            }else{
                echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                Sorry your Username or Password wrong :(
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
        }
        /** 
        if($all_info['username'] == $u){
            print_r($all_info);
            //session::init();
            //session::set_user_login("staff","PCL");
            echo "your username is correct";
        }else{
            echo "your username is wrong";
        }*/
    }

    public static function take_staff_code($u){
        $check = new Teachers();
        $all_info = $check->check_info($u);
        return $all_info['staff_code'];
    }
    
    // Checking if it is valid cookie or not 
    public static function hash_staff_code($hashed_cookie_value){
        $check = new Teachers();
        $all_staff_code = $check->check_staff_code();
        //print_r($all_staff_code);
        $i = "0";
        foreach($all_staff_code as $key=>$value){
            //print_r($value[0]."<br>");
            $normal_value = $value[0];
            $md5_value = md5($normal_value);
            if($hashed_cookie_value == $md5_value){
              //echo "Your cookie is valid : ".$md5_value;
              $i = "1";
              header("Location: /dashboard/d.php");
            }
          }
        return "asdf;lkj asdf;kj ".$i;
        /** 
        if($u == md5($all_info['staff_code'])){
            return 1;
        }else{
            return 2;
        }
        */
    }

}




?>
    