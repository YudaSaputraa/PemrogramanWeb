<?php
include 'connecting.php';

$nim = $_GET['nim'];

$sql = mysqli_query($connect, "DELETE FROM data_mhs where nim = $nim ");


if($sql){
    echo "Proses Hapus Berhasil. <a href ='readData.php'>lihat data</a>";
}else{
echo "proses hapus gagal";
}

?>