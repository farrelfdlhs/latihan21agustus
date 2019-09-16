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
        <legend>Hitung Luas Segitiga</legend>
        <form action="" method="get">
            <table>
                <tr>
                    <td><label for="">Alas</label></td>
                    <td><input type="number" name="las" min="1" max="100" placeholder="Alas"></td>
                </tr><br>
                <tr>
                    <td><label for="">Tinggi</label></td>
                    <td><input type="number" name="gi" min="1" max="100" placeholder="Tinggi"></td>
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
         $nilai1 = $_GET['las'];
         $nilai2 = $_GET['gi'];
         $rata = 0.5*$nilai1*$nilai2;

         echo "Alas : $nilai1<br>";
         echo "Tinggi : $nilai2<br>";
         echo "Luas : $rata";
        echo "<br><br><br><br>";

        echo "<a href='soalsession3.php'>Kembali</a> || 
        <a href='soalsession5.php'>Log Out</a>";
     }

} else {
        die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
     Silahkan login <a href='soalsession1.php'>Disini</a>");}

     
?>