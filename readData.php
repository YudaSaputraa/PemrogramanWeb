<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
   <style>
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
   </style>
</head>
<body>
    <div class="container row">
        <h1>Data Mahasiswa</h1>
        <table border="1">
            <tr>
                <th> Nama </th>
                <th> NIM </th>
                <th> Angkatan </th>
                <th> SKS </th>
                <th colspan="2"> Action </th>

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
    </div>
</body>
</html>