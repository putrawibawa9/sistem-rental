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
    <title>input data motor</title>

</head>

<body>
    <header>
        <nav class="navbar sticky-top navbar-expand-lg bg-primary shadow">
            <h1 class="navbar-brand">Sistem Data Kendaraan</h1>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
        <h1 class="navbar-brand">Input Data Motor</h1>
            <a href="tampil_motor.php"><button type="button" class="btn btn-secondary btn-lg">Kembali</button></a>
            <div class="mb-3">
            <div class="container">
            <div class="row">
            <div class="col-sm-5 col-md-6">
                <form action="proses.php" method="POST" enctype="multipart/form-data">
                    <label class="form-label">Nama Kendaraan</label>
                    <input type="text" class="form-control" name="nama_kendaraan"><br>
                    <br>
                    <label class="form-label">Tahun Kendaraan</label>
                    <input type="number" class="form-control" name="tahun_kendaraan">
                    <br>
                    <label class="form-label">Jenis</label>
                    <select type="text" class="form-select" name="jenis">
                        <option selected>Choose...</option>
                        <option value="Motor">Motor</option>
                        <option value="Mobil">Mobil</option>
                    </select>
                    <br>
                    <label class="form-label">Select image to upload:</label>
                    <input type="file" name="foto" id="fileToUpload">
                    <br>
                    <button type="submit" class="btn btn-secondary btn-lg" name="simpanMotor">Simpan</button>
                </form>
            </div>
            </div>
            </form>
        </div>


    </main>
</body>

</html>