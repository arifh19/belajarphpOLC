<?php
 class OrangTua{

    private $nama;
    private $pekerjaan;
    private $domisili;
    private $umur;
    private $pendidikan;
    private $penghasilan;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function setPekerjaan($pekerjaan){
        $this->pekerjaan = $pekerjaan;
    }
    
    public function getPekerjaan(){
        return $this->pekerjaan;
    }

    public function setDomisili($domisili){
        $this->domisili = $domisili;
    }
    
    public function getDomisili(){
        return $this->domisili;
    }

    public function setUmur($umur){
        $this->umur = $umur;
    }
    
    public function getUmur(){
        return $this->umur;
    }

    public function setPendidikan($pendidikan){
        $this->pendidikan = $pendidikan;
    }
    
    public function getPendidikan(){
        return $this->pendidikan;
    }

    public function setPenghasilan($penghasilan){
        $this->penghasilan = $penghasilan;
    }
    
    public function getPenghasilan(){
        return $this->penghasilan;
    }
 }