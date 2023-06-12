<?php 

require '../functions.php';

$keyword = $_GET['keyword'];
    $query = "SELECT * FROM
                 sejarah
                WHERE
                 generasi LIKE '%$keyword%' OR
                 tahun LIKE '%$keyword%' OR
                 materi LIKE '%$keyword%'

                 ";
    $students = query($query);

?>

<?php if($students): ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No.</th>
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
          <a href="" class="badge text-bg-warning"><i data-feather="edit"></a> |
          <a href="" class="badge text-bg-danger"><i data-feather="trash-2"></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

      <?php else : ?>
        <div class="row">
          <div class="col-md-6">
          <div class="alert alert-danger" role="alert">
          Student(s) not found!
          </div>
          </div>
        </div>
      <?php endif;  ?>