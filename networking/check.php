<?php

include_once "database/users.php";

$check = new Users();

$result = $check->check_info("2012025");
if($result == "Your Query Provide the empty result"){
    return 1;
}else {
    return 2;
}
?>