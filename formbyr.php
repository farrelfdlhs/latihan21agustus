<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pembayaran</title>
</head>
<body>
    <fieldset>
        <legend>FORM PEMBAYARAN</legend>
        <form action="prosesforbyr.php" method="POST" name="input">
            Nama <br>
            <input type="text" name="nama" placeholder="Nama" required><br>
            Alamat <br>
            <input type="text" name="jalan" placeholder="Jalan/kp" required>
            <input type="text" name="kecam" placeholder="Kecamatan" required>
            <input type="text" name="kota" placeholder="Kota/Kabupaten" required><br><br>
            <input type="text" name="provinsi" placeholder="Provinsi" required>
            <input type="number" name="kode" placeholder="Kode Pos" required><br>
            Nama Barang <br>
            <input type="text" name="barang" placeholder="Nama Barang" required><br>
            Harga Barang <br>
            <input type="number" name="harba" placeholder="Harga Barang" required><br>
            Jumlah Barang <br>
            <input type="number" name="jumbar" placeholder="Jumlah Barang" required><br>
            Deskripsi <br>
            <textarea name="deskripsi" cols="30" rows="10" placeholder="Deskripsi barang" required></textarea><br>
            Tanggal Pembelian <br>
            <input type="date" name="tgl" placeholder="Tanggal Pembelian" required><br><br><br>
            <input type="submit" name="submit" value="Send">
        </form>
    </fieldset>
</body>
</html>