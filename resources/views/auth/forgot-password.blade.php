<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password – Hanoi.ink</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="container site-header">
            <img src="{{ asset('images/logo_hanoiInk.png') }}" alt="Hanoi.Ink logo" class="site-logo">
            <h1 class="site-title">
                Hanoi.<span>ink</span>
            </h1>
        </div>
    </header>
    <main>
        <div class="container card" style="max-width:400px;">
            <h2 style="text-align:center;color:var(--color-primary);margin-bottom:1.2rem;">Forgot your password?</h2>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" name="email" type="email" required autocomplete="username" class="form-input" value="{{ old('email') }}">
                    @error('email')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="button button--red w-full">
                    Send reset link
                </button>
                <div class="form-footer" style="text-align:center;margin-top:1.2rem;">
                    <a href="{{ route('login') }}" class="link">Back to login</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
