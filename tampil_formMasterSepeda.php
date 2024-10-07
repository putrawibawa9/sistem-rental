<?php
include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Form Master Sepeda</title>
</head>
<body>
    <header>
    <nav class="navbar sticky-top navbar-expand-lg bg-primary shadow">
    <h1 class="navbar-brand">Sistem Data Kendaraan</h1>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item active">
                <a class="nav-link" href="tampil_motor.php">Motor</a></li>
            <li class="nav-item active">
                <a class="nav-link" href="tampil_mobil.php">Mobil</a></li>
            <li class="nav-item active">
        </ul>
    </div>
    </nav>
    </header>
    <main>
    <div class="container">
    <h1 class="navbar-brand" style="text-align:center;">Form Master Sepeda</h1>
    <a href="input_formMasterSepeda.php"><button type="button" class="btn btn-secondary btn-lg">Input Data</button></a>
    <table class="table table-hover">
    <thead class="table-light ">
    <tr>
        <th scope="col">id</th>
        <th scope="col">Nama Sepeda</th>
        <th scope="col">Merk Sepeda</th>
        <th scope="col">Jenis Sepeda</th>
        <th scope="col">Peruntukan</th>
        <th scope="col">Jumlah Speed</th>
        <th scope="col">Tanggal Launching</th>
        <th scope="col">Opsi</th>
    </tr>
    </thead>

    <?php

include "koneksi.php";

$sql="SELECT * from formmastersepeda order by kode_sepeda asc";
$hasil=mysqli_query($con,$sql);
while ($data = mysqli_fetch_array($hasil)) {

?>

    <tbody class="table-primary">
    <tr>
        <td><?php echo $data['kode_sepeda']?></td>
        <td><?php echo $data['nama_sepeda']?></td>
        <td><?php echo $data['merk_sepeda']?></td>
        <td><?php echo $data['jenis_sepeda']?></td>
        <td><?php echo $data['peruntukan']?></td>
        <td><?php echo $data['jumlah_speed']?></td>
        <td><?php echo $data['tanggal_launching']?></td>
        
        <td>
       <a href="proses.php?action=delMaster&kode_sepeda=<?= $data['kode_sepeda']; ?>" class="btn btn-secondary btn-lg" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
        <a href="update_formMasterSepeda.php?kode_sepeda=<?= $data['kode_sepeda']; ?>" class="btn btn-secondary btn-lg">Update</a>
        </td>
    </tr>
    </tbody>
<?php
}
?>

</table>
<footer class="fixed-bottom d-flex justify-content-between py-4 border-top">
<span class="text-muted">Ari Wahyuni</span>
</footer>
</body>
</html>