<?php
include "koneksi.php";
include "kelas/Kendaraan.php";
include "kelas/Mobil.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Data Mobil</title>
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
        </ul>
    </div>
    </nav>
    </header>
    <main>
    <div class="container">
    <h1 class="navbar-brand" style="text-align:center;">Data Mobil</h1>
    <a href="input_mobil.php"><button type="button" class="btn btn-secondary btn-lg">Input Data</button></a>
    <table class="table table-hover">
    <thead class="table-light ">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Kendaraan</th>
        <th scope="col">Tahun Kendaraan</th>
        <th scope="col">Foto Kendaraan</th>
        <th scope="col">Opsi</th>
    </tr>
    </thead>
    <tbody class="table-primary">
    <?php
    $query = "SELECT *from kendaraan where jenis = 'mobil'";
    $result = mysqli_query($con,$query);
    $no=1;
    //Array ini digunakan untuk menyimpan objek-objek kendaraan yang dihasilkan dari hasil query
    $arrayDatakendaraan=array();
    //untuk memeriksa apakah hasil query mengembalikan data atau tidak.
    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_assoc($result)){
            $mobil= new Mobil( $row['id'],$row['nama_kendaraan'], $row['tahun_kendaraan'], $row['jenis'], $row['foto']);
            array_push($arrayDatakendaraan, $mobil);

        }
        foreach ($arrayDatakendaraan as $data){
        ?>
        <tr>
        <td scope="row"><?=$no?></td>
        <?=$data->tampilData();?>
       <td>
        <a href="proses.php?action=delMobil&id=<?= $data->getId(); ?>" class="btn btn-secondary btn-lg" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
        <a href="update_mobil.php?id=<?= $data->getId(); ?>" class="btn btn-secondary btn-lg">Update</a>
        </td>
            
        </td>
    </tr>
    <?php
    $no++;
        }
    }else{
        ?> 
    
    <tr>
        <td colspan="6" style="text-align:center;">Tidak Ada Data</td>
    
    </tr>
<?php
}
?>
    
    </tbody>
</table>
<footer class="fixed-bottom d-flex justify-content-between py-4 border-top">
<span class="text-muted">Ari Wahyuni</span>
</footer>
</body>
</html>