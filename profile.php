<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Print KTP</title>
</head>
<body>  
    <div class="container">
    <div class="jumbotron">
    <h2>Kartu Tanda Penduduk</h2>
  </div>

    <?php
    class Profile{
        //model
        private $nama;
        private $alamat;
        private $ttl;
        private $sex;
        private $status;

        // public function __construct(){
        //     echo "a";
        // }
        public function setNama($nama){
            $this->nama=$nama;
        }
        public function getNama(){
            return $this->nama;
        }
        public function setTTL($tempat_lahir, $date){
            $ttl=$tempat_lahir.", ".$date;
            $this->ttl=$ttl;
        }
        public function getTTL(){
            return $this->ttl;
        }
        public function setJenisKelamin($sex){
            if($sex) {
                $this->sex ="Perempuan";
            } else{
                $this->sex ="Laki-laki";
            }
        }
        public function getJenisKelamin(){
            return $this->sex;
        }
        public function setAlamat($alamat){
            $this->alamat=$alamat;
        }
        public function getAlamat(){
            return $this->alamat;
        }
        public function setStatus($status){
            $this->status=$status;
        }
        public function getStatus(){
            return $this->status;
        }
        public function writeData($data){
            echo $data;
            echo "<br/>";
            echo "<hr/>";
        }
    }
    
    //controller
    //$objKtp = new Profile();
    //$objKtp->setNama($_GET["nama"]);
    //$objKtp->setTTL($_GET["tempat_lahir"],$_GET["date"]);
    //$objKtp->setJenisKelamin($_GET["sex"]);
    //$objKtp->setAlamat($_GET["alamat"]);
    //$objKtp->setStatus($_GET["status"]);

    //view

   // $objKtp->writeData("Nama Lengkap :       ".$objKtp->getNama());
   // $objKtp->writeData("TTL   : ".$objKtp->getTTL());
   // $objKtp->writeData("Alamat : ".$objKtp->getJenisKelamin());
   // $objKtp->writeData("Jenis Kelamin : ".$objKtp->getAlamat()); 
   // $objKtp->writeData("Status : ".$objKtp->getStatus());
    ?>
</body>
</html>