<?php

/**
* Kelas Mahasiswa (Blueprint Objek Mahasiswa)
* Modul 1: Konsep Dasar Class & Object
*/
class Mahasiswa
{
    // Properti (Attributes) - Data yang dimiliki objek 
    public $nama;
    private $nim; // <-- NIM DIBUAT PRIVATE (Enkapsulasi)

    public function __construct($nama, $nim)
    {
    // Menggunakan $this untuk mengisi properti kelas
     $this->nama = $nama;
     $this->setNim($nim);

    //  echo "--> Objek **{$this->nama}** berhasil dibuat (Konstruktor berjalan).<br>";
    }

    public function setNim($nim)
    {
  $nim = trim($nim);

        if (!ctype_digit($nim)) {
            echo "<span style='color:red;'>[ERROR] NIM hanya boleh angka.</span><br>";
            return false;
        }

        if (strlen($nim) !== 7) {
            echo "<span style='color:red;'>[ERROR] NIM harus 7 digit.</span><br>";
            return false;
        }

        if ($nim[0] !== '2') {
            echo "<span style='color:red;'>[ERROR] Format NIM tidak valid.</span><br>";
            return false;
        }

        $this->nim = $nim;
        return true;
    }

    /**
    * 🔓 Getter (Accessor) untuk properti NIM.
    * Mengambil nilai properti privat.
    */
     public function getNim()
     {
       return $this->nim;
     }

     /**
     * Metode (Method) - Perilaku yang dapat dilakukan objek
     * Menampilkan salam sapaan.
     */
     public function sayHello()
     {
       // Properti $nim diakses langsung karena di dalam kelas yang sama
       echo "Halo, saya adalah Mahasiswa " . $this->nama . ".<br>";
       echo "NIM saya adalah " . $this->nim . ". Selamat datang di dunia OOP!"; 
     }

     public function __destruct()
     {
               
               // Menggunakan Getter untuk memastikan nilainya bisa diakses jika properti dibuat private

              //  echo "--> Objek **{$this->nama}** telah dihancurkan (Destruktor berjalan).<br>";
     }
}
// Catatan: Kelas Mahasiswa tidak akan dieksekusi di sini,
// melainkan di file index.php.