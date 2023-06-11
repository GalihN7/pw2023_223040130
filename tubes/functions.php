<?php

define('BASE_URL', '/pw2023_223040130/tubes');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $generasi = $data['generasi'];
  $tahun = $data['tahun'];
  $materi = $data['materi'];

  //upload gambar
  $gambar = upload();
  if ( !$gambar) {
    return false;
  }

  $query = "INSERT INTO
              sejarah
            VALUES
              (null, '$generasi', '$tahun', '$materi', '$gambar')";

   mysqli_query($conn, $query) or die (mysqli_error($conn));
}

function upload() {


  $namaFile = $_FILES['gambar']['name'];
  $ukuranFile = $_FILES['gambar']['size'];
  $error = $_FILES['gambar']['error'];
  $tmpName = $_FILES['gambar']['tmp_name'];

  if( $error === 4) {
    echo "<script>
            alert('Masukan Gambar')
          </script>";
          return false;
  }

  // hanya gambar yang dapat diupload
  $ekstensiGambarValid = ['jpg','jpeg','png'];
  $ekstensiGambar = explode('.',$namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));
  if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
          alert('anda bukan mengupload gambar');
         </script>";
         return false;
  }

  // jika size terlalu besar
  if($ukuranFile > 1000000) {
    echo "<script>
          alert('ukuran terlalu beasar');
         </script>";
         return false;
  }

  //loss
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
  return $namaFileBaru;

}

function hapus($id) {
  $conn = koneksi();
  $query = "DELETE FROM 
            sejarah 
            WHERE
            (id = $id)";

  mysqli_query($conn, $query);

}


function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $generasi = $data['generasi'];
  $tahun = $data['tahun'];
  $materi = $data['materi'];
  $gambarLama = $data['gambarLama'];

  if($_FILES['gambar']['error'] === 4) {
    $gambar = $gambarLama;
  } else {
    $gambar = upload();
  }
  

  $query = "UPDATE
              sejarah
            SET
            generasi = '$generasi',
            tahun = '$tahun',
            materi = '$materi',
            gambar = '$gambar'

            WHERE id = '$id'

            ";

   mysqli_query($conn, $query);
}




function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}

function registrasi($data) {
  $conn = koneksi();

  $username = strtolower(stripslashes($data['username']));
  $email = $data['email'];
 $password = mysqli_real_escape_string($conn, $data['password']);


  //cek username
  $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
  if(  mysqli_fetch_assoc($result)) {
    echo "<script>
        alert('username sudah terdaftar!')
        </script>";
        return false;
  }

  // encrypt password
  $password = password_hash($password, PASSWORD_DEFAULT);

  //DB PASSWORD
  mysqli_query($conn, "INSERT INTO
              users
              VALUES
              ('','$username', '$email', '$password')");

              return mysqli_affected_rows($conn);
}