<?php

include "Interface/Show.php";


class Kendaraan implements Show //menggunakan interface show
{
    private $id, $nama_kendaraan, $tahun_kendaraan, $jenis, $foto;
    public function __construct( $v_id,$v_nama_kendaraan, $v_tahun_kendaraan, $v_jenis, $v_foto)
    {
        $this->id=$v_id;
        $this->nama_kendaraan = $v_nama_kendaraan;
        $this->tahun_kendaraan = $v_tahun_kendaraan;
        $this->jenis = $v_jenis;
        $this->foto = $v_foto;
    }

    //method ambil data id kendaraan
    public function getId()
    {
        return $this->id;
    }

    //method setting data id kendaraan
    public function setId($value)
    {
        $this->id = $value;
    }

    public function getNamaKendaraan()
    {
        return $this->nama_kendaraan;
    }
    public function setNamaKendaraan($value)
    {
        $this->nama_kendaraan = $value;
    }

    public function getTahunKendaraan()
    {
        return $this->tahun_kendaraan;
    }
    public function setTahunKendaraan($value)
    {
        $this->tahun_kendaraan = $value;
    }

    public function getJenis()
    {
        return $this->jenis;
    }
    public function setJenis($value)
    {
        $this->jenis = $value;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($value)
    {
        $this->foto = $value;
    }

    public function tampilData()
    {
        
        echo "<td>" . $this->nama_kendaraan . "</td>";
        echo "<td>" . $this->tahun_kendaraan . "</td>";
        echo "<td>" . $this->jenis . "</td>";
        echo "<td><img src='" . $this->foto . "'alt='foto kendaraan /></td>";
    }
}
