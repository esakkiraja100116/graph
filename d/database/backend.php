<?php

/**
 *              F O R    S T U D E N T S 
 * 
 * For sign-up 
 * 1.email_id (francisxavier.ac.in)
 * 2.password  (Must be hashed and also generate secret key for all)
 * 3.generate access token also for cookie direct login
 * 4.year with department (CSE-1st year)
 * 5.Name with register number (Ramesh-2012048)
 * 6.Gender
 * 7.lab-name
 * 8.In which time he/she entered (for our reference)
 * 
 * 
 * For Login
 * 1.check username from the database 
 * 2.user can enter with password or secret key (Database)
 * 
 * 
 * Competetion details
 * 9.competetion name
 * 10.competetion (Applied - date)
 * 11.competetion (ongoing)
 * 12.competetion (competiton win) 
 * 13.competetion (completion loss) 
 * 
 * 
 * Product details
 * 14.product name
 * 15.product (ongoing)
 * 16.product completed
 * 
 * 
 * Journal details
 * 17.ongoing 
 * 18.completed
 * 
 * 
 * Comerence
 * 19.ongoing
 * 20.completed
 * 
 * 
 * Patent
 * 21.Published
 * 22.Awarded
 */

include_once 'config.php';

class Database{
  public $host = DB_HOST;
  public $uname = DB_UNAME;
  public $pass = DB_PASS;
  public $db_name = DB_NAME;

  public $conn;
  public $error;

  public function __construct(){
		$this->connect_db();
	}

  // This is for the connections
  private function connect_db(){
    $this->conn = new mysqli($this->host,$this->uname,$this->pass,$this->db_name);
    if(!$this->conn){
      $this->error = "Connection failed ".$this->conn->connect_error;
      return false;
    }
  }
  // This is for select what you mentioned on the query
  public function select($query){
    $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
    //print_r(mysqli_fetch_all($result));
    if($result->num_rows > 0){
      return mysqli_fetch_assoc($result);
    }else {
      return "Your Query Provide the empty result";
    }
  }

  // This is for insert what you want
  // insert update delete
  public function action($query){
    //echo  $query;
    $result = $this->conn->query($query);
    if($result){
      return $result;
    }else {
      return false;
    }
  }


  // fetch all the result with associative array

  public function get_all($query){
    $result = $this->conn->query($query) or die($this->conn->error.__LINE__);
    //print_r(mysqli_fetch_all($result));
    if($result->num_rows > 0){
      return mysqli_fetch_all($result);
    }else {
      return "Your Query Provide the empty result";
    }
  }

  
}