<?php 
    require_once 'header.php';
    require_once 'Sepatu.php';
?>

<?php
$kode_sepatu = $_GET['kode_sepatu'];


$data = new Sepatu;
$sepatuIndividu = new Sepatu;

$sepatu = $sepatuIndividu->viewEachSepatu($kode_sepatu);
if(isset($_POST['submit'])){

    $edit = new Sepatu;
    $result = $edit->editSepatu($_POST);
    
    //check the progress
    if ($result){
        echo "
            <script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
            </script>
        ";
    }else{
        echo " <script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>
    ";

    }

}

?>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Edit Sepatu</h3>


        <form method="post" enctype="multipart/form-data">

        <input type="hidden" name="kode_sepatu" value="<?= $kode_sepatu ?>">


    
            <div class="mb-3">
                <label class="form-label"> Merk_sepatu</label>
                <input type="text" name="merk_sepatu" class="form-control" value="<?= $sepatu['merk_sepatu']?>">
            </div>

            <div class="mb-3">
        <select class="form-select" name="warna_sepatu" required>
            <option value="<?= $sepatu['warna_sepatu'] ?>"><?= $sepatu['warna_sepatu'] ?></option>
            <option value="Hitam">Hitam</option>
                <option value="Putih">Putih</option>
                <option value="Abu">Abu</option>
                <option value="Coklat">Coklat</option>
                <option value="Merah">Merah</option>
        </select>
    </div>
    
            <div class="mb-3">
        <select class="form-select" name="jenis_sepatu" required>
            <option value="<?= $sepatu['jenis_sepatu'] ?>"><?= $sepatu['jenis_sepatu'] ?></option>
            <option value="Sepatu Pria">Sepatu Pria</option>
                <option value="Sepatu Wanita">Sepatu Wanita</option>
                <option value="Sepatu Anak">Sepatu Anak</option>
        </select>
    </div>

            <div class="mb-3">
                <label class="form-label">Bahan</label>
                <input type="text" name="bahan_sepatu" class="form-control" value="<?= $sepatu['bahan_sepatu']?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi_sepatu" class="form-control" value="<?= $sepatu['deskripsi_sepatu']?>">
            </div>

            <div class="mb-3">
                <label class="form-label"> Tanggal Launching</label>
                <input type="date" name="tanggal_launching_sepatu" class="form-control" value="<?= $sepatu['tanggal_launching_sepatu']?>">
            </div>
        

            <a href="index.php" class="btn btn-danger" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        </form>
    </div>
  </div>
</div>


<?php require_once 'footer.php';?>

<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
