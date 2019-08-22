<?php
    if (isset($_POST['Login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user == "sexon" && $pass == "hmbr") {
            echo "<h1>Login Berhasil !</h1>";
        } else {
            echo "<h1>Login Gagal !</h1>";
        }
    }

?>