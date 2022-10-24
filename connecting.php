<?php
$hostname = '127.0.0.1';
$username = "root";
$password = "";
$database = "mhs";

$connect = new mysqli($hostname, $username, $password, $database);
if($connect->connect_error){
    die("Error : ".$connect->$connect->connect_error);
}
?>