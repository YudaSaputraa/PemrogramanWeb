<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"/>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <title>Login</title>

</head>
<body>
    <div class="container row">
    <center>
        <?php
        if(isset($_GET['message'])){
            if ($_GET['message'] == 'failed'){
                echo "Login Gagal! Username atau Password salah.";
            }elseif($_GET['message'] == "logout"){
                echo "Berhasil Logout!.";
            }elseif($_GET['message'] == "belum_login"){
                echo "Anda Belum Login!";
            }
        }
        ?>
    </center>
<form  method="POST" action="login_proses.php">
    <div class ="login">
    <iconify-icon class="icons" icon="carbon:user-profile" height="40"></iconify-icon>
        <h2>LOGIN</h2>
        <div class ="inputan">
            <input type ="text" name="username" required="">
            <span>Username</span>
        </div>
        <div class ="inputan">
            <input type ="password" name="password" required="">
            <span>Password</span>
        </div>
        <div class="inputan-button">
            <a href="pages/home.php"><input type="submit" value="login" ></a>
        </div>
    </div>
</form>
    </div>
</body>
</html>