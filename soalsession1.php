<?php
    session_start();
    if (isset($_POST['login'])) {
        $nick = $_POST['user'];
        $pass = $_POST['pass'];

        if ($nick == "sexon" && $pass == "hehe") {
            $_SESSION['login'] = $nick;
            echo "<h1>SUCCESSFULLY LOGIN !</h1>";
            echo "<h2>Ingin lanjut? Klik <a href='soalsession2.php'>disini</a></h2>";
        } else {
            die ("<b>Username</b> ataupun <b>Password</b> anda <b>SALAH</b>.
            Silahkan <a href='soalsession1.php'>login</a>");
        }
    } else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <fieldset>
        <legend>Login Akun</legend>
        <form action="" method="POST">
            <table>
                <tr>
                    <td><label for="">Username</label></td>
                    <td><input type="text" name="user" placeholder="Username"></td>
                </tr><br>
                <tr>
                    <td><label for="">Password</label></td>
                    <td><input type="password" name="pass" placeholder="Password"></td>
                </tr><br>
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
    <?php } ?>