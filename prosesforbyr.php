<?php

    if (isset($_POST['submit'])) {
        $namaa = $_POST['nama'];
        $jalann = $_POST['jalan'];
        $camat = $_POST['kecam'];
        $wali = $_POST['kota'];
        $bernur = $_POST['provinsi'];
        $pos = $_POST['kode'];
        $nambar = $_POST['barang'];
        $harga = $_POST['harba'];
        $jumlah = $_POST['jumbar'];
        $desk = $_POST['deskripsi'];
        $tanggal = $_POST['tgl'];

        if ($jumlah < 0) {
            echo "Maaf, jika ingin memesan, jumlah barang minimal 1";
            
        } 
        
        elseif ($jumlah > 5) {
            $jumlah2 = $harga*$jumlah;
            $disk = $jumlah2 * 10 / 100;
            $jumlah3 = $jumlah2-$disk;
            echo "Nama : $namaa<br>";
            echo "Alamat : $jalann<br>";
            echo "Kecamatan : $camat<br>";
            echo "Kota / Kabupaten : $wali<br>";
            echo "Provinsi : $bernur<br>";
            echo "Kode Pos : $pos<br>";
            echo "Nama Barang : $nambar<br>";
            echo "Harga Barang : $harga<br>";
            echo "Tanggal Pembelian : $tanggal<br>";
            echo "Deskripsi Barang : $desk<br>";
            echo "Jumlah Barang : $jumlah<br>";
            echo "Harga Asli : $jumlah2<br>";
            echo "Harga Diskon : $disk<br>";
            echo "Total Harga : $jumlah3<br>";
        } 
        
        elseif ($jumlah > 10) {
            $jumlah2 = $harga*$jumlah;
            $disk = $jumlah2 * 20 / 100;
            $jumlah3 = $jumlah2-$disk;
            echo "Nama : $namaa<br>";
            echo "Alamat : $jalann<br>";
            echo "Kecamatan : $camat<br>";
            echo "Kota / Kabupaten : $wali<br>";
            echo "Provinsi : $bernur<br>";
            echo "Kode Pos : $pos<br>";
            echo "Nama Barang : $nambar<br>";
            echo "Harga Barang : $harga<br>";
            echo "Tanggal Pembelian : $tanggal<br>";
            echo "Deskripsi Barang : $desk<br>";
            echo "Jumlah Barang : $jumlah<br>";
            echo "Harga Asli : $jumlah2<br>";
            echo "Harga Diskon : $disk<br>";
            echo "Total Harga : $jumlah3<br>";
        }
    }
            
?>

