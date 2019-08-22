<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
</head>
<body>
    <fieldset>
        <legend align="center"><h1>Form Registrasi</h1></legend>
        <form action="prosesregis.php" method="POST" name="input">
        Nama<br>
        <input type="text" name="nama"><br>
        Alamat<br>
        <textarea name="alamat" cols="40" rows="5"></textarea><br>
        Jenis Kelamin <br>
        <input type="radio" name="jenkel" value="Laki Laki">Laki Laki
        <input type="radio" name="jenkel" value="Perempuan">Perempuan<br>
        Agama <br>
        <select name="agama">
            <option value="islam">Islam</option>
            <option value="kristen">Kristen</option>
            <option value="hindu">Hindu</option>
            <option value="budha">Budha</option>
        </select><br><br>
        Email <br>
        <input type="text" name="email"><br>
        Password <br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="simpan" value="Save">
        <input type="reset" name="reset" value="Hapus">
        </form>
    </fieldset>
</body>
</html>