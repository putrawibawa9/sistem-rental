<?php

include "koneksi.php";
include "kelas/Kendaraan.php";
include "kelas/Motor.php";

// folder tempat menyimpan file yang diupload
$target_folder = "foto/";

if (isset($_POST['simpanMotor'])) {
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tahun_kendaraan = $_POST['tahun_kendaraan'];
    $jenis = $_POST['jenis'];

    // Mengambil file foto
    //random nama file yang diupload 
    $nama_file = time() . basename($_FILES['foto']['name']);
    // target lokasi dimana file akan disimpan
    $target_file = $target_folder . basename($nama_file);
    // pindahkan file ke folder yang dituju
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $query = "INSERT INTO kendaraan (nama_kendaraan, tahun_kendaraan, jenis, foto) 
                 VALUES ('$nama_kendaraan', '$tahun_kendaraan', '$jenis', '$nama_file')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_motor.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_motor.php'</script>";
    }
}
 

if(isset($_POST['updateMotor'])){
    $query ="UPDATE kendaraan set nama_kendaraan='".$_POST['nama_kendaraan']."', tahun_kendaraan='".$_POST['tahun_kendaraan'] ."'";

    if(mysqli_query($con, $query)){
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_motor.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_motor.php'</script>";

    }
 
    }


if(isset($_GET['action']) && $_GET['action'] == 'delMotor' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM kendaraan WHERE id='$id'";
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Terhapus!'); window.location = 'tampil_motor.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Terhapus!'); window.location = 'tampil_motor.php'</script>";
    }
}


// folder tempat menyimpan file yang diupload
$target_folder = "foto/";
if (isset($_POST['simpanMobil'])) {
    $nama_kendaraan = $_POST['nama_kendaraan'];
    $tahun_kendaraan = $_POST['tahun_kendaraan'];
    $jenis = $_POST['jenis'];

    // Mengambil file foto
    //random nama file yang diupload 
    $nama_file = time() . basename($_FILES['foto']['name']);
    // target lokasi dimana file akan disimpan
    $target_file = $target_folder . basename($nama_file);
    // pindahkan file ke folder yang dituju
    move_uploaded_file($_FILES['foto']['tmp_name'], $target_file);

    $query = "INSERT INTO kendaraan (nama_kendaraan, tahun_kendaraan, jenis, foto) 
                 VALUES ('$nama_kendaraan', '$tahun_kendaraan', '$jenis', '$nama_file')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_mobil.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_mobil.php'</script>";
    }
}
 
 
if(isset($_POST['updateMobil'])){
    $query ="UPDATE kendaraan set nama_kendaraan='".$_POST['nama_kendaraan']."', tahun_kendaraan='".$_POST['tahun_kendaraan'] ."'";
    if(mysqli_query($con, $query)){
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_mobil.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_mobil.php'</script>";

    }
 
    }


if(isset($_GET['action']) && $_GET['action'] == 'delMobil' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM kendaraan WHERE id='$id'";
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Terhapus!'); window.location = 'tampil_mobil.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Terhapus!'); window.location = 'tampil_mobil.php'</script>";
    }
}

//proses sepeda
if (isset($_POST['simpanMaster'])) {
    $nama_sepeda = $_POST['nama_sepeda'];
    $merk_sepeda = $_POST['merk_sepeda'];
    $jenis_sepeda = $_POST['jenis_sepeda'];
    $peruntukan = $_POST['peruntukan'];
    $jumlah_speed = $_POST['jumlah_speed'];
    $tanggal_launching = $_POST['tanggal_launching'];

    $query = "INSERT INTO  formmastersepeda ( nama_sepeda ,  merk_sepeda ,  jenis_sepeda ,  peruntukan ,  jumlah_speed ,  tanggal_launching)
                 VALUES ('$nama_sepeda' ,'$merk_sepeda','$jenis_sepeda' ,'$peruntukan','$jumlah_speed' ,'$tanggal_launching')";

    if (mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_formMasterSepeda.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_formMasterSepeda.php'</script>";
    }
}
 

if(isset($_POST['updateMaster'])){
    $query ="UPDATE formmastersepeda set nama_sepeda='".$_POST['nama_sepeda']."', merk_sepeda='".$_POST['merk_sepeda'] ."', jenis_sepeda='".$_POST['jenis_sepeda']."', peruntukan ='".$_POST['peruntukan']."', jumlah_speed ='".$_POST['jumlah_speed']."', tanggal_launching ='".$_POST['tanggal_launching']."'";

    if(mysqli_query($con, $query)){
        echo "<script>alert('Data Berhasil Disimpan!');window.location ='tampil_formMasterSepeda.php'</script>";
    }else{
        echo "<script>alert('Data Gagal Disimpan!');window.location ='tampil_formMasterSepeda.php'</script>";

    }
 
    }


if(isset($_GET['action']) && $_GET['action'] == 'delMaster' && isset($_GET['kode_sepeda'])) {
    $kode_sepeda = $_GET['kode_sepeda'];

    $query = "DELETE FROM formmastersepeda WHERE kode_sepeda='$kode_sepeda'";
    if(mysqli_query($con, $query)) {
        echo "<script>alert('Data Berhasil Terhapus!'); window.location = 'tampil_formMasterSepeda.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Terhapus!'); window.location = 'tampil_formMasterSepeda.php'</script>";
    }
}


