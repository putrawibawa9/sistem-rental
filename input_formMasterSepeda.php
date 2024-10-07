<?php
include "koneksi.php";
include "kelas/Kendaraan.php";
include "kelas/Motor.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>input form master sepeda</title>

</head>

<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-primary shadow">
            <h1 class="navbar-brand">Sistem Data Kendaraan</h1>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
        <h1 class="navbar-brand">Input Form Master Sepeda</h1>
            <a href="tampil_motor.php"><button type="button" class="btn btn-secondary btn-lg">Kembali</button></a>
            <div class="mb-3">
            <div class="container">
            <div class="row">
            <div class="col-sm-5 col-md-6">
                <form action="proses.php" method="POST" enctype="multipart/form-data">
                    <label class="form-label">Nama Sepeda</label>
                    <input type="text" class="form-control" name="nama_sepeda">
                    <br>
                    <label class="form-label">Merk Sepeda</label>
                    <input type="text" class="form-control" name="merk_sepeda">
                    <br>
                    <label class="form-label">Jenis Sepeda</label>
                    <select type="text" class="form-select" name="jenis_sepeda">
                        <option selected>Choose...</option>
                        <option value="MTB">MTB</option>
                        <option value="Road Bike">Road Bike</option>
                        <option value="Sepeda Anak">Sepeda Anak</option>
                    </select>
                    <br>
                    <label class="form-label">Peruntukan</label>
                    <select type="text" class="form-select" name="peruntukan">
                        <option selected>Choose...</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                    <br>
                    <label class="form-label">Jumlah Speed</label>
                    <input type="number" class="form-control" name="jumlah_speed">
                    <br>
                    <label class="form-label">Tanggal Launching</label>
                    <input type="number" class="form-control" placeholder="yyyy/mm/dd" name="tanggal_launching">
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg" name="simpanMaster">Simpan</button>
                </form>
            </div>
            </div>
            </form>
        </div>


    </main>
</body>

</html>