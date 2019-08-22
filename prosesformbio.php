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
    }




?>