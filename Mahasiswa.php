<?php

/**
* Kelas Mahasiswa (Blueprint Objek Mahasiswa)
* Modul 1: Konsep Dasar Class & Object
*/
class Mahasiswa
{
// Properti (Attributes) - Data yang dimiliki objek
public $nama;
public $nim;

public function __construct($nama, $nim)
{
// Menggunakan $this untuk mengisi properti kelas
$this->nama = $nama;
$this->nim = $nim;

echo "--> Objek **{$this->nama}** berhasil dibuat (Konstruktor berjalan).<br>";
}

/**
* Metode (Method) - Perilaku yang dapat dilakukan objek
* Menampilkan salam sapaan.
*/
public function sayHello()
{
// Menggunakan variabel internal kelas
echo "Halo, saya adalah Mahasiswa " . $this->nama . ".<br>";
echo "NIM saya adalah " . $this->nim . ". Selamat datang di dunia OOP!";
}

public function __destruct()
{
echo "--> Objek **{$this->nama}** telah dihancurkan (Destruktor berjalan).<br>";
}



}
// Catatan: Kelas Mahasiswa tidak akan dieksekusi di sini,
// melainkan di file index.php.