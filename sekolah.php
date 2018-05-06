<?php
class Sekolah{
    private $nama;
    private $alamat;
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }
    
    public function getAlamat(){
        return $this->alamat;
    }
}