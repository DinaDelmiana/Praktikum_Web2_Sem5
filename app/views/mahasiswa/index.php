<?php Flasher::flash(); ?>

<div class="card shadow-sm">
  <div class="card-body">

    <div class="d-flex justify-content-between align-items-center mb-3">
      <h3 class="text-primary mb-0">Daftar Mahasiswa</h3>
      <a href="<?= BASEURL; ?>/mahasiswa/tambah" class="btn btn-success">
        + Tambah Data
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th width="5%">No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th width="18%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($data['mhs'] as $mhs): ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $mhs['npm']; ?></td>
              <td><?= $mhs['nama']; ?></td>
              <td><?= $mhs['email']; ?></td>
              <td>
                <span class="badge bg-primary">
                  <?= $mhs['jurusan']; ?>
                </span>
              </td>
              <td>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
                  class="btn btn-warning btn-sm">
                  Ubah
                </a>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>"
                  class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus?');">
                  Hapus
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>