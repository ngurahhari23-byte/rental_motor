<!DOCTYPE html>
<html>

<head>

<title>Tambah Motor</title>

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

.card{
border:none;
border-radius:15px;
}

.card-header{
border-top-left-radius:15px;
border-top-right-radius:15px;
}

.icon{
font-size:40px;
margin-right:10px;
}

</style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="index.php">
<i class="fa-solid fa-motorcycle"></i> Rental Motor
</a>

</div>

</nav>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow">

<div class="card-header bg-success text-white">

<h4>
<i class="fa-solid fa-plus icon"></i>
Tambah Data Motor
</h4>

</div>

<div class="card-body">

<form action="simpan_motor.php" method="POST">

<div class="mb-3">

<label class="form-label">Nama Motor</label>

<input type="text" name="nama_motor" class="form-control" placeholder="Masukkan nama motor" required>

</div>

<div class="mb-3">

<label class="form-label">Merk Motor</label>

<input type="text" name="merk" class="form-control" placeholder="Masukkan merk motor" required>

</div>

<div class="mb-3">

<label class="form-label">Harga Sewa per Hari</label>

<input type="number" name="harga_sewa" class="form-control" placeholder="Contoh: 80000" required>

</div>

<div class="mb-3">

<label class="form-label">Status Motor</label>

<select name="status_motor" class="form-select">

<option value="Tersedia">Tersedia</option>
<option value="Disewa">Disewa</option>

</select>

</div>

<div class="d-flex justify-content-between">

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

<button type="submit" class="btn btn-success">
Simpan Data
</button>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</body>
</html>