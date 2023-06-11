<?php require('partials/header.php'); ?>

<div class="container mt-5">
  <div class="col-md-10">
           <h3><i class="me-2"  data-feather="bar-chart-2" ></i>Edit Sesuatu ?</h3>
            <div class="row">
              <div class="card bg-warning ms-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="me-2"  data-feather="user" ></i>
                      </div>
                      <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $mhs['id'] ?>">
                        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar'] ?>">
                        <div class="mb-3">
                          <label for="generasi" class="form-label">Generasi</label>
                          <input type="text" class="form-control" name="generasi" id="generasi" value="<?= $mhs['generasi'] ?>">
                        </div>
                        <div class="mb-3">
                          <label for="tahun" class="form-label">Tahun</label>
                          <input type="text" class="form-control" name="tahun" id="tahun" value="<?= $mhs['tahun'] ?>">
                        </div>
                        <div class="mb-3">
                          <label for="materi" class="form-label">Materi</label>
                          <input type="text" class="form-control" name="materi" id="materi" value="<?= $mhs['materi'] ?>">
                        </div>
                        <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar</label>
                          <img src="img/<?= $mhs['gambar']; ?>" width="200" alt="">
                          <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                        <button class="btn btn-primary btn-dark" type="tambah" name="tambah">Edit Data</button>
                      </form>
              </div>

</div>

<?php require('partials/footer.php'); ?>