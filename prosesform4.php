<?php
    if (isset($_POST['input'])) {
        $nama1 = $_POST['teman1'];
        $nama2 = $_POST['teman2'];
        $nama3 = $_POST['teman3'];
        $nama4 = $_POST['teman4'];
        echo "<b>Nama Sahabat sahabat dekatku</b><br>";
        echo $nama1."<br>";
        echo $nama2."<br>";
        echo $nama3."<br>";
        echo $nama4."<br>";
    }
?>