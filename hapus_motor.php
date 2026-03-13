<?php

include "koneksi.php";

$id_motor = $_GET['id'];

$query = "DELETE FROM motor WHERE id_motor='$id_motor'";

$hasil = mysqli_query($koneksi,$query);

?>

<!DOCTYPE html>
<html>

<head>

<title>Data Dihapus</title>

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
color:red;
}

</style>

</head>

<body>

<div class="card shadow p-5 text-center">

<?php

if($hasil){

?>

<div class="icon mb-3">

🗑️

</div>

<h3 class="text-danger">Data Motor Berhasil Dihapus</h3>

<p class="text-muted">
Data motor telah dihapus dari database sistem rental motor.
</p>

<a href="data_motor.php" class="btn btn-primary mt-3">
Kembali ke Data Motor
</a>

<a href="index.php" class="btn btn-secondary mt-3">
Menu Utama
</a>

<?php

}else{

?>

<h3 class="text-danger">Data Gagal Dihapus</h3>

<a href="data_motor.php" class="btn btn-danger mt-3">
Kembali
</a>

<?php

}

?>

</div>

</body>
</html>