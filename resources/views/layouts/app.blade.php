<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RU°') — Restaurant Universitaire</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Work+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="ru-shell">
        <aside class="ru-sidebar">
            <div class="ru-brand">
                <div class="mark">RU°</div>
                <div class="sub">Restaurant Univ.</div>
            </div>
            <nav class="ru-nav">
                <a href="{{ url('/dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}"><span class="dot"></span> Tableau de bord</a>
                <a href="{{ route('categories.index') }}" class="{{ request()->is('categories*') ? 'active' : '' }}"><span class="dot"></span> Catégories</a>
                <a href="{{ route('plats.index') }}" class="{{ request()->is('plats*') ? 'active' : '' }}"><span class="dot"></span> Plats</a>
                <a href="{{ route('menus.index') }}" class="{{ request()->is('menus*') ? 'active' : '' }}"><span class="dot"></span> Menus</a>
                <a href="{{ route('reservations.index') }}" class="{{ request()->is('reservations*') ? 'active' : '' }}"><span class="dot"></span> Réservations</a>
                <a href="{{ route('avis.index') }}" class="{{ request()->is('avis*') ? 'active' : '' }}"><span class="dot"></span> Avis</a>
                <a href="{{ route('ingredients.index') }}" class="{{ request()->is('ingredients*') ? 'active' : '' }}"><span class="dot"></span> Stock</a>
            </nav>
            <div style="margin-top:auto; padding: 1rem .75rem 0; border-top:1px dashed rgba(246,241,228,0.25);">
                <div class="mono" style="font-size:12px; color:var(--paper-2); opacity:.8; padding:.5rem .75rem 0;">{{ auth()->user()->name ?? '' }}</div>
                <form action="{{ route('logout') }}" method="POST" style="padding:.35rem .75rem 0;">
                    @csrf
                    <button type="submit" class="btn btn-ghost btn-sm" style="width:100%; justify-content:flex-start; color:var(--paper-2); border:none;">Se déconnecter</button>
                </form>
            </div>
        </aside>
        <main class="ru-main">
            @yield('content')
        </main>
    </div>
</body>
</html>
