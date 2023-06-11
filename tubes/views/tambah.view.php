<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?> 

<div class="container mt-5">
  
  <div class="col-md-10">
           <h3><i class="me-2"  data-feather="bar-chart-2" ></i>Tambah Sesuatu</h3>
            <div class="row">
              <div class="card bg-warning ms-3" style="width: 18rem;">
                <div class="card-body">
                    <div class="card-body-icon">
                        <i class="me-2"  data-feather="user" ></i>
                      </div>
                      <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                          <label for="generasi" class="form-label">Generasi</label>
                          <input type="text" class="form-control" name="generasi" id="generasi">
                        </div>
                        <div class="mb-3">
                          <label for="tahun" class="form-label">Tahun</label>
                          <input type="text" class="form-control" name="tahun" id="tahun">
                        </div>
                        <div class="mb-3">
                          <label for="materi" class="form-label">Materi</label>
                          <input type="text" class="form-control" name="materi" id="materi">
                        </div>
                        <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar</label>
                          <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                        <button class="btn btn-primary btn-dark" type="tambah" name="tambah">Tambah Data</button>
                      </form>
              </div>

</div>

<?php require('partials/footer.php'); ?>