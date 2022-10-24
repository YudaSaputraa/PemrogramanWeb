<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1">
        <tr>
            <td> Nama </td>
            <td> NIM </td>
            <td> Angkatan </td>
            <td> SKS </td>
            <td colspan="2"> Action </td>

        </tr>

        <?php
        include 'connecting.php';
        
        $mysql = "SELECT * FROM   data_mhs";
        $myquery = mysqli_query($connect, $mysql);

        while($data = mysqli_fetch_array($myquery)){

        ?>
        <tr>
            <td> <?= $data['nama'];?> </td>
            <td> <?= $data['nim'];?></td>
            <td> <?= $data['angkatan'];?> </td>
            <td> <?= $data['sks'];?> </td>
            <td><a href="edit.php? nim= <?=$data['nim']?>">Edit</a></td>
            <td><a href="hapus.php? nim= <?=$data['nim']?>">Hapus</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>