<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
     h1 {
         font-family:arial;
     }
     body{
         font-family:arial;
     }
    </style>
    <title>Form Biodata</title>
</head>
<body>
    <fieldset>
        <legend align="center"><h1>Formulir Pendaftaran</h1></legend><br>
        <form action="prosesformbio.php" method="POST" name="input">
        <table border=0 align="center"> 
            <tr>
                <td>NO PENDAFTARAN</td>
                <td>:</td> 
                <td><input type="number" name="nomor"><br><br></td>
            </tr>
            <tr>
                <td>NISN</td>            
                <td>:</td> 
                <td><input type="number" name="nisn"><br><br></td>
            </tr>
            <tr>
                <td>NAMA</td>             
                <td>:</td>
                <td><input type="text" name="nama"><br><br></td>
            </tr>
            <tr>
                <td>ALAMAT</td>           
                <td>:</td>
                <td><textarea name="alamat" cols="30" rows="5"></textarea><br><br></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>     k
                <td>:</td> 
                <td><input type="text" name="tl"><br><br></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>    
                <td>:</td>
                <td><input type="date" name="ttl"><br><br></td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>     
                <td>:</td>
                <td><input type="text" name="sekolah"><br><br></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>    
                <td>:</td> 
                <td><input type="radio" name="jenkel" value="Laki Laki"> Laki Laki <br>
                <input type="radio" name="jenkel" value="Perempuan"> Perempuan <br></td>
            </tr>
            <tr>
                <td>JURUSAN</td>          
                <td>:</td> 
                <td><select name="jurusan">
                                <option value="Rekayasa Perangkat Lunak">RPL</option>
                                <option value="Teknik Sepeda Motor">TSM</option>
                                <option value="Teknik Kendaraan Ringan">TKR</option>
                    </select><br><br></td>
            </tr>
            <tr>
                <td>NAMA AYAH</td>        
                <td>:</td>
                <td><input type="text" name="namay" ><br><br></td>
            </tr>
            <tr>
                <td>PEKERJAAN AYAH</td> 
                <td>:</td> 
                <td><input type="text" name="keray" ><br><br></td>
            </tr>
            <tr>
                <td>NAMA IBU</td>         
                <td>:</td> 
                <td><input type="text" name="namib"><br><br></td> 
            </tr>
            <tr>
                <td>PEKERJAAN IBU</td>    
                <td>:</td> 
                <td><input type="text" name="kerib"><br><br></td> 
            </tr>
            <tr>
                <td>AGAMA</td>            
                <td>:</td> 
                <td><select name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Ateis">Ateis</option>
                              </select><br><br></td> 
            </tr>
            <tr>
                <td>HOBBY</td>            
                <td>:</td>
                <td><input type="checkbox" name="ngegame" value="Main Game">Main Game
                <input type="checkbox" name="Ngusep" value="Ngusep">Mancing
                <input type="checkbox" name="Membaca" value="Membaca">Membaca
                <input type="checkbox" name="Menggambar" value="Menggambar">Menggambar
                <input type="checkbox" name="Melukis" value="Melukis">Melukis <br></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="SIMPAN"> 
                <input type="reset" name="reset" value="KEMBALI"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>