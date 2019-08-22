<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Biodata</title>
</head>
<body>
    <fieldset>
        <legend align="center"><h1>Formulir Pendaftaran</h1></legend><br>
        <form action="prosesformbio.php" method="POST" name="input">
            NO PNENDAFTARAN : <input type="number" name="nomor"><br><br>
            NISN            : <input type="number" name="nisn"><br><br>
            NAMA            : <input type="text" name="nama"><br><br>
            ALAMAT          : <textarea name="alamat" cols="30" rows="5"></textarea><br><br>
            TEMPAT LAHIR    : <input type="text" name="tl"><br><br>
            TANGGAL LAHIR   : <input type="date" name="ttl"><br><br>
            ASAL SEKOLAH    : <input type="text" name="sekolah"><br><br>
            JENIS KELAMIN   : <input type="radio" name="jenkel" value="Laki Laki"> Laki Laki <br>
                              <input type="radio" name="jenkel" value="Perempuan"> Perempuan <br>
            JURUSAN         : <select name="jurusan">
                                <option value="Rekayasa Perangkat Lunak">RPL</option>
                                <option value="Teknik Sepeda Motor">TSM</option>
                                <option value="Teknik Kendaraan Ringan">TKR</option>
                              </select><br><br>
            NAMA AYAH       : <input type="text" name="namay" ><br><br>
            PEKERJAAN AYAH  : <input type="text" name="keray" ><br><br>
            NAMA IBU        : <input type="text" name="namib"><br><br>
            PEKERJAAN IBU   : <input type="text" name="kerib"><br><br>
            AGAMA           : <select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Ateis">Ateis</option>
                              </select><br><br>
            HOBBY           : <input type="checkbox" name="ngegame" value="Main Game">Main Game
                              <input type="checkbox" name="Ngusep" value="Ngusep">Mancing
                              <input type="checkbox" name="Membaca" value="Membaca">Membaca
                              <input type="checkbox" name="Menggambar" value="Menggambar">Menggambar
                              <input type="checkbox" name="Melukis" value="Melukis">Melukis <br><br>
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" name="reset" value="KEMBALI">
        </form>
    </fieldset>
</body>
</html>