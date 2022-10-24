        <?php
        include 'connecting.php';
        $nama = $_POST['name'];
        $nim = $_POST['nim'];
        $angkatan = $_POST['angkatan'];
        $sks = $_POST['sks'];

        $sqlku = "INSERT INTO data_mhs VALUES ('$nim','$nama', '$angkatan', '$sks')";

        $queryku = mysqli_query($connect, $sqlku) or die (mysqli_error($connect));

        if($queryku){
            echo "insert data berhasil <a href ='readData.php'>lihat data</a> ";
           


        }else{
            echo "insert data gagal, coba lagi dan terus coba lagi sampai bosan mencoba";
        }
        
        ?>