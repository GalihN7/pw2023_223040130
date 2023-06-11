<?php 

session_start();

if(isset($_SESSION["login"])) {
  header("Location: index.php");
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


      $_SESSION["login"] = true;


      header("Location: index.php");
      exit;
    }
  }
  $error = true;
}

require('views/login.view.php');