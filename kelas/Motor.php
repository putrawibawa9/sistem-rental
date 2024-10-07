<?php

class Motor extends Kendaraan{
    private $jenis;

    public function __construct($v_id, $v_nama_kendaraan, $v_tahun_kendaraan, $v_jenis, $v_foto){
        parent::__construct($v_id,$v_nama_kendaraan, $v_tahun_kendaraan, $v_jenis, $v_foto);
        $this->jenis = $v_jenis;
    }

    public function getJenis()
    {
        return $this->jenis;
    }

    public function setJenis($value)
    {
        $this->jenis=$value;
    }

    public function tampilData()
    {
       
        echo "<td>".parent::getNamaKendaraan()."</td>";
        echo "<td>".parent::getTahunKendaraan()."</td>";
        echo "<td><img src='foto/".parent::getFoto()."' alt='Foto Kendaraan' style='max-width: 100px; max-height: 100px;'></td>";
    }
}
?>