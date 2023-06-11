<?php

session_start();

if( isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require('functions.php');

$title = 'Form Ubah Data';

$id = $_GET["id"];

$mhs = query("SELECT * FROM sejarah WHERE id = $id")[0];

if (isset($_POST['tambah'])) {

    // tampilkan pesan jika data berhasil diubah
   if( ubah($_POST) >0) {
    echo "<script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
   } else {
    echo "<script>
        alert('Data berhasil diubah ?');
        document.location.href = 'index.php';
        </script>";
}
}

require('views/ubah.view.php');
