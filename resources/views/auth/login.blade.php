<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Jersian.co</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <div class="form-container">
        <h2>Login ke Jersian</h2>
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required />
            <button type="submit">Login</button>
            <p>Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
        </form>
    </div>
</body>

</html>