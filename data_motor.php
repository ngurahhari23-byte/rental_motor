<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>

<title>Data Motor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f5f7fa;
}

.table{
background:white;
}

</style>

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-primary text-white">

<h4>Data Motor Rental</h4>

</div>

<div class="card-body">

<a href="tambah_motor.php" class="btn btn-success mb-3">
Tambah Motor
</a>

<table class="table table-hover">

<thead>

<tr>

<th>ID</th>
<th>Nama Motor</th>
<th>Merk</th>
<th>Harga Sewa</th>
<th>Status</th>
<th>Aksi</th>

</tr>

</thead>

<tbody>

<?php

$query = "SELECT * FROM motor";

$data = mysqli_query($koneksi,$query);

while($motor = mysqli_fetch_array($data)){

?>

<tr>

<td><?php echo $motor['id_motor']; ?></td>
<td><?php echo $motor['nama_motor']; ?></td>
<td><?php echo $motor['merk']; ?></td>
<td>Rp <?php echo $motor['harga_sewa']; ?></td>
<td>

<?php

if($motor['status_motor']=="Tersedia"){
echo "<span class='badge bg-success'>Tersedia</span>";
}else{
echo "<span class='badge bg-danger'>Disewa</span>";
}

?>

</td>

<td>

<a href="hapus_motor.php?id=<?php echo $motor['id_motor']; ?>" class="btn btn-danger btn-sm">
Hapus
</a>

</td>

</tr>

<?php
}
?>

</tbody>

</table>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</div>

</div>

</div>

</body>
</html>