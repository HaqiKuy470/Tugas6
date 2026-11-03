<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Login Demo</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="login-page">

    {{-- ===== Kolom kiri: informasi ===== --}}
    <section class="login-left">
        <div class="brand">
            <div class="brand-logo"><i class="bi bi-code-slash"></i></div>
            <div>
                <h1>LOGIN DEMO</h1>
                <small>PRAKTIKUM LARAVEL - AUTENTIKASI DAN MIDDLEWARE</small>
            </div>
        </div>

        <div class="hero">
            <span class="hero-badge">
                <i class="bi bi-shield-check"></i> Mini Project Laravel
            </span>
            <h2>Memahami Login dan Middleware dengan Mudah</h2>
            <p>
                Latihan alur login, penjaga halaman, dan pembagian
                hak akses antara admin dan user.
            </p>

            <div class="hero-cards">
                <div class="hero-card">
                    <i class="bi bi-door-open ic-blue"></i>
                    guest
                    <small>Hanya untuk yang belum login</small>
                </div>
                <div class="hero-card">
                    <i class="bi bi-shield-lock ic-green"></i>
                    auth
                    <small>Wajib sudah login</small>
                </div>
                <div class="hero-card">
                    <i class="bi bi-person-gear ic-yellow"></i>
                    admin
                    <small>Khusus role admin</small>
                </div>
            </div>
        </div>

        <div class="login-copy">&copy; 2026 Praktikum Laravel</div>
    </section>

    {{-- ===== Kolom kanan: form ===== --}}
    <section class="login-right">
        <div class="login-card">
            <div class="login-icon"><i class="bi bi-shield-lock-fill"></i></div>
            <h3>Masuk ke Sistem</h3>
            <p class="login-sub">Silakan masukkan akun kredensial Anda</p>

            <form action="{{ route('login.proses') }}" method="POST">
                @csrf

                <div class="field">
                    <label for="email">Email</label>
                    <div class="input-group @error('email') invalid @enderror">
                        <i class="bi bi-envelope-fill"></i>
                        <input type="email" name="email" id="email"
                               value="{{ old('email') }}"
                               placeholder="Masukkan email" autofocus>
                    </div>
                    @error('email')
                        <div class="field-error">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="input-group @error('password') invalid @enderror">
                        <i class="bi bi-lock-fill"></i>
                        <input type="password" name="password" id="password"
                               placeholder="Masukkan password">
                        <button type="button" class="toggle-pass"
                                onclick="tampilPassword()">
                            <i class="bi bi-eye-fill" id="ikon-mata"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="field-error">
                            <i class="bi bi-exclamation-circle-fill"></i>
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <label class="remember">
                    <input type="checkbox" name="ingat"> Ingat saya
                </label>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right"></i> Masuk ke Dashboard
                </button>
            </form>

            <p class="login-hint">
                Akun contoh: <code>admin@test.com</code> atau
                <code>user@test.com</code>, password <code>password</code>
            </p>
        </div>
    </section>

</div>

<script>
    function tampilPassword() {
        const input  = document.getElementById('password');
        const ikon   = document.getElementById('ikon-mata');
        const tampil = input.type === 'password';

        input.type = tampil ? 'text' : 'password';
        ikon.className = tampil ? 'bi bi-eye-slash-fill' : 'bi bi-eye-fill';
    }
</script>
</body>
</html>
