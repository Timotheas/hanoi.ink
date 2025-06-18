<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Confirm Password – Hanoi.ink</title>
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
                Confirm your password
            </h2>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="pas
