<?php
/**
 * simple routing without security
 */
if(!empty($_GET) && isset($_GET['page'])){
    if($_GET['page']=="login_process"){
        include_once "login_process.php";
    }
}
else{
    session_start();
    if(!isset($_SESSION['user'])){

        include_once "login.php";

    }else{
        /**
         * 
         * If $_GET is not empty and there is page key in  $_GET then true
         */
        if(!empty($_GET) && isset($_GET['page'])){
            //simple routing
            if($_GET['page']=="profile_input"){
                include_once "profile_input.php";
            } 
            if($_GET['page']=="save_profile"){
                include_once "save_profile.php";
            }
            if($_GET['page']=="login_process"){
                include_once "login.php";
            }
        }else{
            include_once "profile.php";
            include_once "sekolah.php";
            include_once "orangtua.php";

            //controller
            $objKtp = new Profile();
            $objKtp->setNama($_GET["nama"]);
            $objKtp->setTTL($_GET["tempat_lahir"],$_GET["date"]);
            $objKtp->setJenisKelamin($_GET["sex"]);
            $objKtp->setAlamat($_GET["alamat"]);
            $objKtp->setStatus($_GET["status"]);
        
            //view
        
            $objKtp->writeData("Nama Lengkap :       ".$objKtp->getNama());
            $objKtp->writeData("TTL   : ".$objKtp->getTTL());
            $objKtp->writeData("Alamat : ".$objKtp->getJenisKelamin());
            $objKtp->writeData("Jenis Kelamin : ".$objKtp->getAlamat()); 
            $objKtp->writeData("Status : ".$objKtp->getStatus());
        }
    }
}
    
?>