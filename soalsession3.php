<?php
    session_start();
    if (isset($_SESSION['login'])) {

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
    <fieldset>
        <legend>Input Nilai untuk Rata Rata</legend>
        <form action="" method="get">
            <table>
                <tr>
                    <td><label for="">Nilai 1</label></td>
                    <td><input type="number" name="lai1" min="1" max="100" placeholder="Nilai 1"></td>
                </tr><br>
                <tr>
                    <td><label for="">Nilai 2</label></td>
                    <td><input type="number" name="lai2" min="1" max="100" placeholder="Nilai 2"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="Proses"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>
<?php 
    if (isset($_GET['simpan'])) {
         $nilai1 = $_GET['lai1'];
         $nilai2 = $_GET['lai2'];
         $rata = ($nilai1+$nilai2)/2;

         echo "Nilai 1 : $nilai1<br>";
         echo "Nilai 2 : $nilai2<br>";
         echo "Rata Rata : $rata";
        echo "<br><br><br><br>";

        echo "<a href='soalsession4.php'>Halaman Selanjutnya</a> || 
        <a href='soalsession2.php'>Kembali</a> || 
        <a href='soalsession5.php'>Log Out</a>";
     }    

} else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
     Silahkan login <a href='soalsession1.php'>Disini</a>");}

     
?>