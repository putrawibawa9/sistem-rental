<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data mobil</title>
    <link rel="stylesheet" href="style/bootstrap.css">
</head>
<body>

<?php
include "koneksi.php";
$id= $_GET['id'];
$qry = "SELECT * FROM kendaraan WHERE id = '$id'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>
<header>
        <nav class="navbar sticky-top navbar-expand-lg bg-primary shadow">
            <h1 class="navbar-brand">Update Data Mobil</h1>
        </nav>
    </header>
<main>
    <a href="tampil_mobil.php"><button class="btn btn-secondary btn-lg">Kembali</button></a> 
    <div class="container">
    <div class="mb-3">
    <div class="container">
    <div class="row">
    <div class="col-sm-5 col-md-6">
    <form action="proses.php" method="POST">
        <label class="form-label">Nama kendaraan</label>
        <input type="text" class="form-control" name="nama_kendaraan" value="<?=$data['nama_kendaraan']?>">
        <br>
        <label class="form-label">Tahun Kendaraan</label>
        <input type="text" class="form-control" name="tahun_kendaraan" value="<?=$data['tahun_kendaraan']?>">
        <br>
        <div class="col-auto">
        <label class="form-label">Jenis</label>
        <select class="form-select" type="text" name="jenis" value="<?=$data['jenis']?>">
            <option selected>Choose...</option>
            <option value="Motor">Motor</option>
            <option value="Mobil">Mobil</option>
        </select>
        <br>
        <button type="submit" class="btn btn-secondary btn-lg" name="updateMobil">Simpan</button>
    </form>
    </div>
    </div>
</div>


</body>
</html>