<?php
session_start();
include 'connecting.php';


$username = $_POST['username'];
$password = $_POST['username'];

$sqlku = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$data = mysqli_query($connect, $sqlku);

$check = mysqli_num_rows($data);

if($check > 0 ){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:readData.php");
}else{
    header("location:index.php?message=failed");
}

?>