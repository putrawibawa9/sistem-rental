<?php
require_once 'Sepatu.php'; 
require_once 'header.php'; 


$hasil = new Sepatu;
$sepatu = $hasil->readSepatu();
?>


  
    
    <div class="container">
      <div class="row">
        <div class="col-12 p-3 bg-white">
          <h3>Sepatu</h3>
          <a href="tambah_sepatu.php" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Kode Sepatu</th>
                    <th class="text-center">Merk Sepatu</th>
                    <th class="text-center">Warna</th>
                    <th class="text-center">Jenis </th>
                    <th class="text-center">Bahan</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Tanggal Launching</th>
                    <th class="text-center">Actions</th>
                  </tr>
            </thead>
            <tbody>
              <?php foreach($sepatu as $row):?>
                <tr>
                  <td class="text-center" ><?=$row['kode_sepatu']?></td>
                  <td ><?=$row['merk_sepatu']?></td>
                  <td ><?=$row['warna_sepatu']?></td>
                  <td ><?=$row['jenis_sepatu']?></td>
                  <td ><?=$row['bahan_sepatu']?></td>
                  <td ><?=$row['deskripsi_sepatu']?></td>
                  <td ><?=$row['tanggal_launching_sepatu']?></td>
                   <td>
                    <a  href="edit_sepatu.php?kode_sepatu=<?=$row['kode_sepatu'];?>" class="btn btn-secondary btn-sm ">Edit</a>
                    <a href="hapus_sepatu.php?kode_sepatu=<?=$row['kode_sepatu'];?>" class="btn btn-danger btn-sm " onclick="return confirm('yakin?');">Delete</a>
                   </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>



<?php require_once 'footer.php';?>

<?php require_once 'footer.php';?>
<script type="text/javascript">
  $('.nav-link').removeClass('active');
  $('.menu-binatang').addClass('active');
</script>
 
