<?php
if($_POST['username']=='admin' && $_POST['password']=='tanya panitia'){
    //jika benar
    session_start();
    $_SESSION['user']=$_POST['username'];
    header("Location: http://localhost/belajarphp/default.php?page=profile_input");
}else{
    //jika salah
    die('user / password salah');
}
?>