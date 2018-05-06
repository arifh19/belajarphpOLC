<?php

    include_once "profile.php";
    
    $objKtp = new Profile();
    $objKtp->setNama($_POST["nama"]);
    //$objKtp->setTTL($_POST["tempat_lahir"],$_POST["date"]);
    //$objKtp->setJenisKelamin($_POST["sex"]);
    //$objKtp->setAlamat($_POST["alamat"]);
    //$objKtp->setStatus($_POST["status"]);
    //print_r($_POST);
?>