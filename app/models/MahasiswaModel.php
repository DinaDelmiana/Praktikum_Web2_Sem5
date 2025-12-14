<?php
class MahasiswaModel
{
  private $table = 'mahasiswa';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function getAllMahasiswa()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultSet();
  }

  public function getMahasiswaById($id)
  {
    $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
    $this->db->bind('id', $id);
    return $this->db->single();
  }

  public function tambahDataMahasiswa($data)
  {
    $query = "INSERT INTO mahasiswa (npm, nama, email, jurusan)
          VALUES (:npm, :nama, :email, :jurusan)";
    // ID dikosongkan (AUTO_INCREMENT)

    $this->db->query($query);
    // Binding semua parameter
    $this->db->bind('npm', $data['npm']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();

    return $this->db->rowCount();
  }

  public function hapusDataMahasiswa($id)
  {
    $query = "DELETE FROM mahasiswa WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function ubahDataMahasiswa($data)
  {
    $query = "UPDATE mahasiswa SET
  npm = :npm,
  nama = :nama,
  email = :email,
  jurusan = :jurusan
  WHERE id = :id";

    $this->db->query($query);
    $this->db->bind('npm', $data['npm']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);
    $this->db->bind('id', $data['id']); // Pastikan ID juga di-bind

    $this->db->execute();
    return $this->db->rowCount();
  }
}
