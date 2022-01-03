<?php


class Session{
    public static function init(){
        session_start();
    }

    public static function set_user_login($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function check_user_login($key){
        if(isset($_SESSION[$key])){
            print_r($_SESSION[$key]);
            //return $_SESSION[$key];
        }else{
            echo "No session available";
            //header("Location: dashboard/index.php");
        }
    }
    
    public static function delete_session(){
        session_destroy();
        session_unset();
    }

}

