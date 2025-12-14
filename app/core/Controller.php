<?php
class Controller
{
  public function view($view, $data = [])
  {
    extract($data);

    // Tentukan path lengkap file view
    $viewPath = __DIR__ . '/../views/' . $view . '.php';


    // Cek apakah file view ada
    if (file_exists($viewPath)) {
      // Muat file view. Variabel $data yang diekstrak sudah tersedia di sini.
      require_once $viewPath;
    } else {
      // Tampilkan pesan error jika view tidak ditemukan
      die("Error: File View tidak ditemukan di " . $viewPath);
    }
  }


  public function model($model)
  {
    require_once __DIR__ . '/../models/' . $model . '.php';
    return new $model;
  }
}
