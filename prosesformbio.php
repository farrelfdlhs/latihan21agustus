<?php
    if (isset($_POST['simpan'])) {
        $nodaf = $_POST['nomor'];
        echo "NO PENDAFTARAN    : $nodaf<br>";
        $nonis = $_POST['nisn'];
        echo "NISN              : $nonis<br>";
        $wasta = $_POST['nama'];
        echo "NAMA              : $wasta<br>";
        $lamat = $_POST['alamat'];
        echo "ALAMAT            : $lamat<br>";
        $tempat = $_POST['tl'];
        echo "TEMPAT LAHIR      : $tempat<br>";
        $tanggal = $_POST['ttl'];
        echo "TANGGAL LAHIR     : $tanggal<br>";
        $sekul = $_POST['sekolah'];
        echo "ASAL SEKOLAH      : $sekul<br>";
        $jk = $_POST['jenkel'];
        echo "JENIS KELAMIN     : $jk<br>";
        $jurus = $_POST['jurusan'];
        echo "JURUSAN           : $jurus<br>";
        $ayah = $_POST['namay'];
        echo "NAMA AYAH         : $ayah<br>";
        $gaweay = $_POST['keray'];
        echo "PEKERJAAN AYAH    : $gaweay<br>";
        $ibu = $_POST['namib'];
        echo "NAMA IBU          : $ibu<br>";
        $gaweib = $_POST['kerib'];
        echo "PEKERJAAN IBU     : $gaweib<br>";
        $pray = $_POST['agama'];
        echo "AGAMA             : $pray<br>";
    }

    if (isset($_POST['ngegame'])) {
        echo "HOBBY             : ".$_POST['ngegame'];
    } if (isset($_POST['Ngusep'])) {
        echo "HOBBY             : ".$_POST['Ngusep'];
    } if (isset($_POST['Membaca'])) {
        echo "HOBBY             : ".$_POST['Membaca'];
    } if (isset($_POST['Menggambar'])) {
        echo "HOBBY             : ".$_POST['Menggambar'];
    } if (isset($_POST['Melukis'])) {
        echo "HOBBY             : ".$_POST['Melukis'];
    }




?>