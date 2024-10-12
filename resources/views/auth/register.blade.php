<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk | Admin Controller</title>
    <link rel="stylesheet" href="{{ asset('template-login') }}/login-satu/css/style.css">
    <link rel="shortcut icon" href="{{ asset('mazer') }}/images/logo.png" type="image/png">
</head>

<body>
    <div class="form-wrapper">
        <h2 class="form-wrapper__title">DAFTAR AKUN</h2>
        <form action="{{ route('register') }}" method="post" id="mainForm" autocomplete="off">
            @csrf
            <label for="nama_lengkap">Nama lengkap</label>
            <div class="user-wrapper"><input type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama lengkap"></div>
            <label for="userName">Email</label>
            <div class="email-wrapper"><input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Silahkan Masukkan Email" required></div>
            <label for="password">Sandi</label>
            <div class="password-wrapper"><input type="password" id="password" name="password" placeholder="Silahkan Masukkan Sandi" required></div>
            <button type="submit" id="mainForm__subBtn">Login</button>
        </form>
        <!-- ----Font Awesome Kit JS---- -->
        <script src="https://kit.fontawesome.com/da18e518c5.js"></script>
</body>

</html>