 <?php

  // Asumsi kelas Controller dasar sudah ada (misalnya: $this->view(), $this->model())
  class Mahasiswa extends Controller
  {
    // READ: Tampilkan daftar mahasiswa
    public function index()
    {
      $data['judul'] = 'Daftar Mahasiswa';
      $data['mhs'] = $this->model('MahasiswaModel')->getAllMahasiswa();

      $this->view('templates/header', $data);
      $this->view('mahasiswa/index', $data);
      $this->view('templates/footer');
    }

    // Menampilkan form tambah
    public function tambah()
    {
      $data['judul'] = 'Tambah Data Mahasiswa';
      $data['aksi'] = 'prosesTambah';
      $this->view('templates/header', $data);
      $this->view('mahasiswa/form', $data);
      $this->view('templates/footer');
    }

    // Menampilkan form ubah (dengan data lama)
    public function ubah($id)
    {
      $data['judul'] = 'Ubah Data Mahasiswa';
      $data['aksi'] = 'update';
      $data['mhs'] = $this->model('MahasiswaModel')->getMahasiswaById($id);
      $this->view('templates/header', $data);
      $this->view('mahasiswa/form', $data);
      $this->view('templates/footer');
    }


    // Proses Simpan Data Baru
    public function prosesTambah()
    {
      if ($this->model('MahasiswaModel')->tambahDataMahasiswa($_POST) > 0) {
        Flasher::setFlash('berhasil', 'ditambahkan', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }

    // DELETE
    public function hapus($id)
    {
      if ($this->model('MahasiswaModel')->hapusDataMahasiswa($id) > 0) {
        Flasher::setFlash('Berhasil', 'dihapus', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }



    // UPDATE (Proses)
    public function update()
    {
      if ($this->model('MahasiswaModel')->ubahDataMahasiswa($_POST) > 0) {
        Flasher::setFlash('Berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      } else {
        Flasher::setFlash('Gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/mahasiswa');
        exit;
      }
    }
  }
