<?php
include 'connecting.php';

$nim = $_GET['nim'];

$sql = mysqli_query($connect, "DELETE FROM data_mhs where nim = $nim ");


if($sql){
    sleep(3);
    header("location:readData.php");
    die();
}else{
echo "proses hapus gagal";
}

?>