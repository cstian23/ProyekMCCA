<?php
require_once 'app/functions/MY_model.php';
$dokters = get("SELECT * FROM dokter");

$no = 1;

?>

<!-- User Table -->
<section id="column-selectors">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Dokter</h4>
          <a href="?page=tambah-dokter" class="btn btn-primary round waves-effect waves-light">
            Tambah Dokter
          </a>
        </div>
        <div class="card-content">
          <div class="card-body card-dashboard">
            <div class="table-responsive">
              <table class="table table-striped dataex-html5-selectors">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($dokters as $dokter) : ?>
                    <tr>
                      <td><?= $dokter['dokter_id'] ?></td>
                      <td><?= $dokter['nama_dokter']; ?></td>
                      <td><?= $dokter['spesialis']; ?></td>
                      <td><?= $dokter['alamat']; ?></td>
                      <td><?= $dokter['no_hp']; ?></td>
                      <td><?= ($dokter['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'); ?></td>
                      <td>
                        <a href="?page=edit-dokter&dokter_id=<?= $dokter['dokter_id']; ?>"><i class="m-1 feather icon-edit-2"></i></a>
                        <a href="?page=hapus-dokter&dokter_id=<?= $dokter['dokter_id']; ?>" class="btn-hapus">
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