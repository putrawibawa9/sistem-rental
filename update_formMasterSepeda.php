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
$kode_sepeda = $_GET['kode_sepeda'];
$qry = "SELECT * FROM formmastersepeda WHERE kode_sepeda = '$kode_sepeda'";
$exec = mysqli_query($con, $qry);
$data = mysqli_fetch_assoc($exec);
?>
<header>
        <nav class="navbar sticky-top navbar-expand-lg bg-primary shadow">
            <h1 class="navbar-brand">Update Data sepeda</h1>
        </nav>
    </header>
<main>
    <a href="tampil_formMasterSepeda.php"><button class="btn btn-secondary btn-lg">Kembali</button></a> 
    <div class="container">
    <div class="mb-3">
    <div class="container">
    <div class="row">
    <div class="col-sm-5 col-md-6">
    <form action="proses.php" method="POST">
        <label class="form-label">Nama Sepeda</label>
        <input type="text" class="form-control" name="nama_sepeda" value="<?=$data['nama_sepeda']?>">
        <br>
        <label class="form-label">Merk Sepeda</label>
        <input type="text" class="form-control" name="merk_sepeda" value="<?=$data['merk_sepeda']?>">
        <br>
        <label class="form-label">Jenis Sepeda</label>
        <select type="text" class="form-select" name="jenis_sepeda" value="<?=$data['jenis_sepeda']?>">
            <option selected>Choose...</option>
            <option value="MTB">MTB</option>
            <option value="Road Bike">Road Bike</option>
            <option value="Sepeda Anak">Sepeda Anak</option>
        </select>
        <br>
        <label class="form-label">Peruntukan</label>
        <select type="text" class="form-select" name="peruntukan" value="<?=$data['peruntukan']?>">
            <option selected>Choose...</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
        <br>
        <label class="form-label">Jumlah Speed</label>
        <input type="number" class="form-control" name="jumlah_speed" value="<?=$data['jumlah_speed']?>">
        <br>
        <label class="form-label">Tanggal Launching</label>
        <input type="date" class="form-control" placeholder="yyyy/mm/dd" name="tanggal_launching" value="<?=$data['tanggal_launching']?>">
        <br>
        <button type="submit" class="btn btn-secondary btn-lg" name="updateMaster">Simpan</button>
    </form>
    </div>
    </div>
</div>


</body>
</html>