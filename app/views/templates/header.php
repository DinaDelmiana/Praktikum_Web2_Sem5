<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman diambil dari data yang dikirim Controller -->
    <title><?php echo isset($judul) ? htmlspecialchars($judul) : 'Judul Default'; ?> | MVC
        Sederhana</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Simple MVC App</a>
            <div class="ms-auto">
                <a class="nav-link d-inline text-white" href="Home.php">Home</a>
                <a class="nav-link d-inline text-white" href="#">About</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">