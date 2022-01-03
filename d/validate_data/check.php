<?php

include_once "validation.php";

$arr_val = array("2012026","felix","male","34554","pass","felixrajadurai.m.ug20.cs@francisxavier.ac.in",2,"CSE","9567438939","dheicuitjdckheiuhsdhfhjou","PCL");
$new = new Validate($arr_val);
$fun = $new->is_num("");

?>





  