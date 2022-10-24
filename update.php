<?php
include 'connecting.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$angkatan = $_POST['angkatan'];
$sks = $_POST['sks'];

$sql = mysqli_query($connect, "UPDATE data_mhs SET nama = '$nama', nim = '$nim', angkatan = '$angkatan', sks='$sks' WHERE nim='$nim'") or die (mysqli_error($connect));


if($sql){
    echo "Proses Hapus Berhasil. <a href ='readData.php'>lihat data</a>";
}else{
echo "proses hapus gagal";
}

?>