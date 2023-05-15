<?php
require_once 'app/functions/MY_model.php';
$pasiens = get("SELECT * FROM pasien");

$no = 1;

$title = 'pasien';
?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pasien</h4>
          <a href="?page=tambah-pasien" class="btn btn-primary round waves-effect waves-light">
            Tambah Pasien
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nomor Identitas</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($pasiens as $pasien) : ?>
                    <tr>
                      <td><?= $pasien['pasien_id'] ?></td>
                      <td><?= $pasien['nomor_identitas']; ?></td>
                      <td><?= $pasien['nama_pasien']; ?></td>
                      <td><?= $pasien['alamat']; ?></td>
                      <td><?= $pasien['no_hp']; ?></td>
                      <td><?= ($pasien['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td>
                        <a href="?page=edit-pasien&pasien_id=<?= $pasien['pasien_id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-pasien&pasien_id=<?= $pasien['pasien_id']; ?>" class="btn-hapus">
                          <i class="feather icon-trash"></i>
                        </a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- User Table -->
<?php $title = 'pasien'; ?>