<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<h1>WELCOME ".$_SESSION['login']."</h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nm" placeholder="Nama"></td>
            </tr><br>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kls" placeholder="Kelas"></td>
            </tr><br>
            <tr>
                <td><input type="submit" name="simpan" value="Tampilkan"></td>
            </tr>
        </table>
    </form>

</body>
</html>
<?php 
    if (isset($_GET['simpan'])) {
        $nama = $_GET['nm'];
        $kelas = $_GET['kls'];

        echo "Nama : $nama<br>";
        echo "Kelas : $kelas<br>";
        echo "<br><br><br><br>";

        echo "<a href='soalsession3.php'>Halaman Selanjutnya</a> || 
        <a href='soalsession5.php'>Log Out</a>";
    }


} else {
        header ("location: soalsession1.php");}

     

?>