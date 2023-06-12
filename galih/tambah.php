<?php

session_start();

if (isset($_SESSION["login"]) == null) {
    header("Location: login.php");
    exit;
}

require('functions.php');

$title = 'Form Tambah Data';

if (isset($_POST['tambah'])) {
    // tampilkan pesan jika data berhasil ditambahkan
   if( tambah($_POST) >0) {
    echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'admin.php';
        </script>";
   } else {
    echo "<script>
        alert('Data berhasil ditambahkan ?');
        document.location.href = 'admin.php';
        </script>";
}
}

require('views/tambah.view.php');