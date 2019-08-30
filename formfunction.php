<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luas Bangun Datar</title>
</head>
<body>
    <p>Luas Bangun Datar</p>
    <fieldset>
        <legend>
            Luas Persegi
        </legend>
        <form action="" method="get">
            <label for="">Sisi</label>
            <input type="number" name="s" min="1" required><br>
            <br>
            <input type="submit" name="simpan" value="Simpan">
        </form>
    </fieldset>
    <?php
        if (isset($_GET['simpan'])) {
            $sisi = $_GET['s'];

            function luas_persegi($s){
                $luas = $s * $s;
                return $luas;
            }

            $luas = luas_persegi($sisi);
            echo "Luas Persegi : $luas";
        }
    ?>
</body>
</html>