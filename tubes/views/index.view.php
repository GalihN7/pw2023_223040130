<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

<body>

<div class="container mt-3">

  <a href="tubes.html" class="btn btn-warning"><i data-feather="layout"></i>html/a>
  
  <h3>Daftar Materi</h3>

  <a href="tambah.php" class="btn btn-warning">Tambah Sesuatu</a>

  <div class="row">
    <div class="col-md-6">
      <form action="" method="get">
      <div class="input-group my-3">
      <input type="search" class="form-control form-control-color"  placeholder="Search" name="keyword" id="keyword" autofocus autocomplete="off">
      <button class="btn btn-warning" type="submit" name="button-search" id="button-search">Search</button>
      </div>
      </form>
    </div>
  </div>

  
  <div id="search-container">

  <?php if($students): ?>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Gambar</th>
        <th scope="col">Generasi</th>
        <th scope="col">Tahun</th>
        <th scope="col">Materi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($students as $student) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="img/<?= $student['gambar']; ?>" width="50">
          </td>
          <td><?= $student['generasi']; ?></td>
          <td><?= $student['tahun']; ?></td>
          <td><?= $student['materi']; ?></td>
          <td>
            <a href="ubah.php?id=<?= $student["id"]; ?>" class="badge text-bg-warning"><i data-feather="edit"></i></a> |
            <a href="hapus.php?id=<?= $student["id"]; ?>" onclick=" return confirm('Sure?');" class="badge text-bg-danger"><i data-feather="trash-2"></i> </a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
     </table>

        <?php else : ?>
          <div class="row">
            <div class="col-md-6">
            <div class="alert alert-danger" role="alert">
            not found!
            </div>
            </div>
          </div>
        <?php endif;  ?>

        </div>      

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script>
        feather.replace();
      </script>
  </body>
</html>


<?php require('partials/footer.php'); ?>