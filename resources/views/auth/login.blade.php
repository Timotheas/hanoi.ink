<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in – Hanoi.ink</title>
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
            <h2 style="text-align:center;color:var(--color-primary);margin-bottom:1.2rem;">Log in to your account</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" required autocomplete="username" class="form-input" value="{{ old('email') }}">
                    @error('email')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password" class="form-input">
                    @error('password')
                        <p class="form-error">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group" style="display:flex;align-items:center;justify-content:space-between;">
                    <label style="display:flex;align-items:center;">
                        <input type="checkbox" name="remember" style="margin-right:0.45em;"> Remember me
                    </label>
                    <a href="{{ route('password.request') }}" class="link" style="font-size:0.96em;">Forgot password?</a>
                </div>
                <button type="submit" class="button button--red w-full">
                    Log in
                </button>
                <div class="form-footer" style="text-align:center;margin-top:1.2rem;">
                    <a href="{{ route('register') }}" class="link">No account yet? Register</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
