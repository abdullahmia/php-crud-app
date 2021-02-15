<?php

$db = "user";
$username = "crud";
$password = "crud";
$server = "localhost";

 $con = mysqli_connect($server, $username, $password, $db);

if(!$con){
    die("not connected".mysqli_error($con));
}

?>