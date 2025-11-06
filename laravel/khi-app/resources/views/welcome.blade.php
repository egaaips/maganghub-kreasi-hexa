<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <title>Welcome to Hexanian!</title>
</head>
<body>
    <div class="welcome-container">
        <div class="icon-container">
            <svg class="checkmark" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
            </svg>
        </div>

        <h1>SELAMAT DATANG!</h1>
        <h2>Terimakasih telah bergabung di Kreasi Hexa</h2>
        <p>Kami berharap Anda mendapatkan banyak manfaat dari bergabung bersama kami. Jelajahi fitur-fitur yang tersedia dan mulai perjalanan Anda bersama kami.</p>

        @if(isset($user))
        <div class="user-info">
            <h3>Informasi Akun Anda</h3>
            <div class="info-row">
                <span class="info-label">Nama:</span>
                <span class="info-value">{{ $user['first_name'] ?? 'N/A' }} {{ $user['last_name'] ?? '' }}</span>
            </div>
        </div>
        @endif

        <div class="btn-group">
            <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>

        </div>
    </div>

    <script>
        // Optional: Add confetti effect or celebration animation
        console.log('Welcome to Hexanian! 🎉');
    </script>
</body>
</html>