<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body> 

<?php
  //controller
    $ktp["nama"]=$_GET["nama"];
    $ktp["tempat_lahir"]=$_GET["tempat_lahir"];
    $ktp["date"]=$_GET["date"];
    $ktp["alamat"]=$_GET["alamat"];
    $ktp["sex"]=jenisKelamin($_GET["jk"]);
    //model
    $ktp["ttl"]=$ktp["tempat_lahir"].", ".$ktp["date"];
    
    function jenisKelamin($sex){
      if($sex) {
        return "Perempuan";
      } else{
        return "Laki-laki";
      }
    }

    function writeData($data){
      echo $data;
      echo "<br/>";
      echo "<hr/>";
    }

    //view
    // $objKtp = new Profile();
    // $objKtp->setNama("Arif Hidayat");
    // echo $objKtp->getNama();
    echo "<title>OLC Web Apps</title>";
    writeData("<h2>Profile</h1>");
    writeData("Nama Lengkap : ".$ktp["nama"]);
    writeData("TTL   : ".$ktp["ttl"]);
    writeData("Alamat : ".$ktp["alamat"]);
    writeData("Jenis Kelamin : ".$ktp["sex"]); 

?>
</body>
</html>