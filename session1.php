<?php
/****************************************************
Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/

session_start();
if (isset ($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //Periksa Login
    if ($user == "sexon" && $pass == "sexon1") {
        //menciptakan session
        $_SESSION['Login'] = $user;
        //menuju halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href ='session2.php'> Disini(session2.php)
        </a> untuk menuju ke halaman pemeriksaan";
        
    }
    else {
        die ("Username atau Password <b>SALAH</b>. Silahkan kembali 
        <a href='session1.php'>Login</a>");
    }
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login here ...</title>
</head>
<body>
    <form action="" method="post">
        <h2>Login here ...</h2>
        Username : <input type="text" name="user"><br>
        Password : <input type="password" name="pass"><br>
        <input type="submit" name="Login" value="Log In">
    </form>
</body>
</html>
<?php } ?>