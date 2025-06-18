<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password – Hanoi.ink</title>
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
            <h2 style="text-align:center;color:var(--color-primary);margin-bottom:1.2rem;">
                Reset your password
            </h2>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-group">
                    <label for="email" class="form-label">Email address</label>
                    <input id="email" name="email" type="email" required autocomplete="username"
                           class="form-input" value="{{ old('email', $email ?? '') }}">
                    @error('email')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">New Password</label>
                    <input id="password" name="password" type="password" required autocomplete="new-password"
                           class="form-input">
                    @error('password')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                           class="form-input">
                </div>
                <button type="submit" class="button button--red w-full">
                    Reset Password
                </button>
                <div class="form-footer" style="text-align:center;margin-top:1.2rem;">
                    <a href="{{ route('login') }}" class="link">Back to login</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
