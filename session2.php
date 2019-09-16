<?php
/**************************************************************
Halaman ini merupakan contoh halaman pemeriksaan session. Peme-
riksaan session biasanya dilakukan jika suatu halaman memiliki
akses terbatas. Misalnya harus login terlebih dahulu.
**************************************************************/

 session_start();

 //pemeriksaan session
 if (isset($_SESSION['Login'])) { //jika sudah login
     //menampilkan isi session
     echo "<h1>Selamat Datang ".$_SESSION['Login']."</h1>";
     echo "<h2>Halaman ini hanya bisa di akses ketika anda sudah login</h2>";
     echo "<h2>Klik <a href='session3.php'>Disini(session3.php)</a> untuk LogOut</h2>";
      
 } else {
     //session belum ada artinya
     die ("Anda belum login! Anda tidak berhak masuk ke halaman ini.
     Silahkan login <a href='session1.php'> Disini</a>");
 }
?>