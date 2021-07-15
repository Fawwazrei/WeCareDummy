<!DOCTYPE html>
<html lang="en">
<head>
   <title>Import Excel</title>
</head>
<body>
    <style type="text/css">
body{
    font-family: sans-serif;
    text-align: center
}
</style>
<h2>Import Excel Menggunakan Php</h2>
<a href="upload.php">Import Data</a>
<?php
    if(isset($_GET['berhasil'])){
        //Tampilkan Jumlah Data Yang Berhasil Di Import 
        echo"<p>".$_GET['berhasil']." Data Berhasil Di Import. </p>";
    }
?>

<br><br>
<table border="1" align="center" width="500">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Nomor Hape</th>
</tr>
<?php
    include "koneksi.php";
    $no=1;
    $tampil = mysqli_query ($koneksi, "SELECT * from tpegawai");
    while($data = mysqli_fetch_array($tampil)) :
?>
<tr>
    <td><?=$no++?></td>
    <td><?=$data['nama']?></td>
    <td><?=$data['alamat']?></td>
    <td><?=$data['telepon']?></td>
</tr>
<?php endwhile; ?>

</table>
</body>
</html>