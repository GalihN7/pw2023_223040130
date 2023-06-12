<?php 
require 'functions.php';

// jika session sudah ada, paksa masuk ke halaman admin
if(isset($_SESSION["login"])) {
   header("Location: admin.php");
   exit;
 }

if(isset($_POST["register"])) {

   if( registrasi($_POST) >0 ) {
    echo "<script>
         alert('user baru berhasil ditambahkan!');
          </script>";
         //  jika sudah berhasil register, langsung arahkan ke halaman login
          header("Location: login.php");
   }

}
require('views/registrasi.view.php');