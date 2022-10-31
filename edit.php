<?php
session_start();
if(empty($_SESSION['username'])){
    header("location:login.php?message=belum_login");
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
        <?php
        include 'connecting.php';
        $nim = $_GET['nim'];
        $sql = mysqli_query($connect, "select * from data_mhs where nim = $nim");
         $data = mysqli_fetch_array($sql)
        ?>

        <form method="POST" action="update.php">
            <input type="text" name="nim" value="<?=$data['nim']?>"><br>
            Nama        :<br><input type="text" name="nama" value="<?=$data['nama']?>"><br>
            Angkatan    :<br><input type="text" name="angkatan" value="<?=$data['angkatan']?>"><br>
            SKS         :<br><input type="text" name="sks" value="<?=$data['sks']?>"><br>
            <input type="submit" name="submit">
        </form>

</body>

</html>