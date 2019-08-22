<?php
    if (isset($_POST['simpan'])) {
        $namaa = $_POST['nama'];
        $alamatt = $_POST['alamat'];
        $jk = $_POST['jenkel'];
        $agam = $_POST['agama'];
        $imel = $_POST['email'];
        $pass = $_POST['password'];
        if ($pass == "hmbr" && $imel == "farrelfadilah12@gmail.com") {
            echo "<h2><b>Akun berhasil di daftarkan !</b></h2><br>";
            echo "Nama              : $namaa<br>";
            echo "Alamat            : $alamatt<br>";
            echo "Jenis Kelamin     : $jk<br>";
            echo "Agama             : $agam<br>";
            echo "Email             : $imel<br>";
            echo "password          : Aktif";
        } else {
            echo "<h2><b>Akun gagal di daftarkan !</b></h2><br>";
            echo "Nama          : $namaa<br>";
            echo "Alamat        : $alamatt<br>";
            echo "Jenis Kelamin : $jk<br>";
            echo "Agama         : $agam<br>";
            echo "Email         : $imel<br>";
            echo "password      : Tidak Aktif";
        }
    }


?>