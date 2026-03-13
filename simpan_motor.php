<?php
include "koneksi.php";

$nama_motor = $_POST['nama_motor'];
$merk = $_POST['merk'];
$harga_sewa = $_POST['harga_sewa'];
$status_motor = $_POST['status_motor'];

$query = "INSERT INTO motor (nama_motor, merk, harga_sewa, status_motor)
VALUES ('$nama_motor','$merk','$harga_sewa','$status_motor')";

$hasil = mysqli_query($koneksi,$query);
?>

<!DOCTYPE html>
<html>

<head>

<title>Data Berhasil Disimpan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#1d2b64,#f8cdda);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
}

.card{
border:none;
border-radius:15px;
}

.icon{
font-size:60px;
color:green;
}

</style>

</head>

<body>

<div class="card shadow p-5 text-center">

<?php

if($hasil){

?>

<div class="icon mb-3">

✓

</div>

<h3 class="text-success">Data Motor Berhasil Disimpan</h3>

<p class="text-muted">
Data motor telah berhasil dimasukkan ke dalam database.
</p>

<a href="data_motor.php" class="btn btn-primary mt-3">
Lihat Data Motor
</a>

<a href="tambah_motor.php" class="btn btn-success mt-3">
Tambah Motor Lagi
</a>

<?php

}else{

?>

<h3 class="text-danger">Data Gagal Disimpan</h3>

<a href="tambah_motor.php" class="btn btn-danger mt-3">
Kembali
</a>

<?php

}

?>

</div>

</body>
</html>