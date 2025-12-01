 <?php

 /**
 * Controller Default: Home
 * Controller ini akan dipanggil jika tidak ada controller spesifik yang diminta di URL.
 */
 class Home extends Controller // <- Mewarisi Base Controller
 {
 /**
 * Method default untuk Home Controller
 */
 public function index()
 {
//  echo "<h1>👋 Selamat Datang di Aplikasi MVC Sederhana!</h1>";
//  echo "<p>Anda saat ini berada di: <strong>Controller Home</strong>, Method:
//        <strong>index()</strong>.</p>";
//  echo "<p>Sistem Routing (Modul 7) sudah berhasil mendeteksi request Anda!</p>";
//  echo "<p>Coba ubah URL Anda menjadi:
//        <strong>/Home/test/parameter1/parameter2</strong></p>";


  // 1. Siapkan data yang akan dikirimkan ke View
  $data = [
    'judul' => 'Halaman Utama',
    'nama' => 'User MVC' // Data dinamis yang akan digunakan di View
   ];

  // 2. Panggil metode view dari Base Controller
  // Parameter pertama: path view relatif dari app/views/ (tanpa ekstensi .php)
  // Parameter kedua: array data
  $this->view('templates/header', $data);
  $this->view('home/index', $data);
  $this->view('templates/footer');
 }

 /**
 * Method untuk menguji parameter routing
 */
//  public function test($param1 = 'TIDAK ADA', $param2 = 'TIDAK ADA')
//  {
//  echo "<h1>🔬 Uji Coba Parameter Routing</h1>";
//  echo "<p>Anda berhasil memanggil: <strong>Controller Home</strong>, Method:
//        <strong>test()</strong>.</p>";
//  echo "<p>Parameter 1: <strong>{$param1}</strong></p>";
//  echo "<p>Parameter 2: <strong>{$param2}</strong></p>";
//  }
 }