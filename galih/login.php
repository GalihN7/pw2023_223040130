<?php 

session_start();

// jika session sudah ada, paksa masuk ke halaman admin
if(isset($_SESSION["login"])) {
  header("Location: admin.php");
  exit;
}

require 'functions.php';

if(isset($_POST["login"])) {

  $conn = koneksi();

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'"); 

  if(mysqli_num_rows($result) === 1) {


    $row = mysqli_fetch_assoc($result);
    if( password_verify($password, $row["password"]) ) {
      // jika password benar, mulai simpan session
      $_SESSION["login"] = true;
      // dan arahkan ke halaman admin
      header("Location: admin.php");
      exit;
    }
  }
  $error = true;
}

require('views/login.view.php');