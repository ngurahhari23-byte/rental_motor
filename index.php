<!DOCTYPE html>
<html>

<head>

<title>Sistem Informasi Rental Motor</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

body{
background: linear-gradient(135deg,#1d2b64,#f8cdda);
min-height:100vh;
}

.navbar{
box-shadow:0 4px 10px rgba(0,0,0,0.3);
}

.hero{
color:white;
text-align:center;
padding:60px 20px;
}

.menu-card{
border:none;
border-radius:15px;
transition:0.3s;
}

.menu-card:hover{
transform:translateY(-8px);
box-shadow:0 10px 20px rgba(0,0,0,0.3);
}

.icon{
font-size:50px;
margin-bottom:15px;
color:#0d6efd;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">
<i class="fa-solid fa-motorcycle"></i>
Rental Motor
</a>

</div>

</nav>

<div class="hero">

<h1> Rental Motor Top Bali</h1>

<p>Mengelola data rental motor</p>

</div>

<div class="container">

<div class="row justify-content-center">

<div class="col-md-4 mb-4">

<div class="card menu-card shadow p-4 text-center">

<div class="icon">

<i class="fa-solid fa-plus"></i>

</div>

<h4>Tambah Motor</h4>

<p class="text-muted">
Menambahkan data motor baru
</p>

<a href="tambah_motor.php" class="btn btn-success">
Tambah Motor
</a>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card menu-card shadow p-4 text-center">

<div class="icon">

<i class="fa-solid fa-list"></i>

</div>

<h4>Data Motor</h4>

<p class="text-muted">
Melihat daftar motor rental
</p>

<a href="data_motor.php" class="btn btn-primary">
Lihat Data
</a>

</div>

</div>

</div>

</div>

<footer class="text-center text-white mt-5 mb-3">

<p>© 2026 Sistem Rental Motor</p>

</footer>

</body>
</html>