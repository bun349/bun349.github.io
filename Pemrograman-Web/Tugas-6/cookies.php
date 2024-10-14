<?php
// Cek jika cookies sudah disetel
if(isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    $username = '';
}

// Jika form disubmit, set cookie
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = htmlspecialchars($_POST['username']);
    // Set cookie yang bertahan selama 1 jam
    setcookie('username', $username, time() + 3600, "/");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website dengan Cookies</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Selamat Datang di Website Kami</h3>
                    </div>
                    <div class="card-body">
                        <?php if($username): ?>
                            <h4 class="text-center">Halo, <?= $username; ?>!</h4>
                            <p class="text-center">Senang bertemu dengan Anda lagi.</p>
                        <?php else: ?>
                            <form method="POST" action="index.php">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Masukkan Nama Anda:</label>
                                    <input type="text" name="username" class="form-control" id="username" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Simpan Nama</button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
