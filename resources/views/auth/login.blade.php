<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk | Admin Controller</title>
  <link rel="stylesheet" href="{{ asset('mazer') }}/template-login/login-dua/css/style.css">
  <link rel="shortcut icon" href="{{ asset('mazer') }}/images/logo.png" type="image/png">
</head>

<body>
  <div class="form-wrapper">
    <h2 class="form-wrapper__title">MASUK</h2>
    <form action="{{ route('login') }}" method="post" id="mainForm">
      @csrf
      <label for="userName">Email</label>
      <div class="user-wrapper"><input type="text" id="email" name="email" value="{{ old('email') }}" placeholder="Silahkan Masukkan Username" required></div>
      <label for="password">Password</label>
      <div class="password-wrapper"><input type="password" id="password" name="password" placeholder="Silahkan Masukkan Sandi" required></div>
      <button type="submit" id="mainForm__subBtn">Login</button>
    </form>
    <!-- ----Font Awesome Kit JS---- -->
    <script src="https://kit.fontawesome.com/da18e518c5.js"></script>
</body>

</html>