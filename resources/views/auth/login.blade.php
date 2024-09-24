<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Mencegah scroll */
        }
        
        body {
            background-image: url('https://wartagarut.com/wp-content/uploads/2023/08/Pemkab-Garut-Buka-Seleksi-Anggota-Dewan-Pengawas-Perumda-Tirta-Intan-Garut-Masa-Jabatan-2023-2027.jpg'); /* Ganti dengan URL gambar Anda */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            margin-top: 200px;
            max-width: 400px;
            padding: 30px;
            border-radius: 10px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<section class="login-container mx-auto">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 class="text-center fw-bold mb-4">Halaman Login Admin</h3>
        <form action="{{ route('authentinate') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Masukkan Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group mb-3">
                <label for="password">Masukkan Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
