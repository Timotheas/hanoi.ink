<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <title>Hanoi.ink – Tattoo Studios in Hanoi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Jouw custom CSS (let op: nu public/css/styles.css) -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
<header>
    <div class="container site-header">
        <img src="{{ asset('images/logo_hanoiInk.png') }}" alt="Hanoi.Ink logo" class="site-logo">
        <h1 class="site-title">
            Hanoi.<span>ink</span>
        </h1>
        <button id="themeToggle" class="button secondary theme-toggle-btn" aria-label="Toggle theme">
            Toggle Theme
        </button>
    </div>
</header>



    <main>
        <div class="container" style="min-height:60vh; display:flex; flex-direction:column; justify-content:center; align-items:center;">
            <p class="lead" style="font-size:1.2rem; color:var(--color-neutral); margin-bottom:2rem;">
                Discover tattoo studios in Hanoi.<br>
                Welcome to the boldest ink community!
            </p>
            <div class="button-group" style="margin-bottom:2rem;">
                <a href="/register" class="button button--red">Register</a>
                <a href="/login" class="button button--yellow">Log In</a>
                <a href="/just-visiting" class="button button--outline">Just Visiting</a>
            </div>
            <!-- Card voorbeeld -->
            <div class="card" style="max-width:350px; margin-top:1rem;">
                <h3>Nieuw: Studio aanmelden?</h3>
                <p>Wil je je studio aanmelden bij het Hanoi.ink platform? Meld je aan als artiest of studio en word onderdeel van de community!</p>
                <a href="/register" class="button button--green" style="margin-top:1rem;">Studio Registreren</a>
            </div>
        </div>
    </main>

    <!-- Tabs demo -->
    <div class="container" style="margin-top:2rem;">
        <div class="tabs">
            <button class="tab active" type="button">Populair</button>
            <button class="tab" type="button">Nieuwste</button>
            <button class="tab" type="button">Aanbevolen</button>
        </div>
        <div class="tab-content active">
            <p>Hier komen populaire studios, artiesten, of nieuws.</p>
        </div>
        <div class="tab-content">
            <p>Hier komen nieuwste toevoegingen.</p>
        </div>
        <div class="tab-content">
            <p>Hier komen aanbevolen artiesten of studios.</p>
        </div>
    </div>

    <!-- Table demo (responsive) -->
    <div class="container" style="margin-top:2rem;">
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Studio</th>
                        <th>Locatie</th>
                        <th>Specialisme</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Red Dragon</td>
                        <td>Hanoi Old Quarter</td>
                        <td>Traditional</td>
                    </tr>
                    <tr>
                        <td>Ink Army</td>
                        <td>Tay Ho</td>
                        <td>Neo-traditional</td>
                    </tr>
                    <tr>
                        <td>Yellow Star Studio</td>
                        <td>Ba Dinh</td>
                        <td>Japanese</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Slider demo -->
    <div class="container" style="margin:2rem auto;">
        <div class="slider">
            <div class="slide active">Slider content 1 (bijvoorbeeld afbeelding, quote, promo)</div>
            <div class="slide">Slider content 2</div>
            <div class="slide">Slider content 3</div>
            <div class="slider-nav">
                <button id="sliderPrev" type="button">&lt;</button>
                <button id="sliderNext" type="button">&gt;</button>
            </div>
        </div>
    </div>

    <!-- Jouw JS (let op: nu public/js/scripts.js) -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
