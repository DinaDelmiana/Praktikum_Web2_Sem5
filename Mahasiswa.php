<?php
class Mahasiswa
{
               public $nama;
               public $nim;


public function sayHello()
{
               echo "Halo, saya adalah Mahasiswa " . $this->nama . "<br>";
               echo "NIM saya adalah " . $this->nim . ". Selamat datang di dunia OOP!";
}
}
