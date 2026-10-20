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
<body style="min-height:100vh; display:flex; align-items:center; justify-content:center; padding:2rem;">
    <div style="width:100%; max-width:400px;">
        <div style="text-align:center; margin-bottom:1.5rem;">
            <div style="font-family:'Archivo Black',sans-serif; font-size:2rem; color:var(--ink);">RU°</div>
            <div class="mono" style="font-size:11px; text-transform:uppercase; letter-spacing:.08em; color:var(--ink-soft);">Restaurant Universitaire</div>
        </div>
        <div class="tray">
            @yield('content')
        </div>
    </div>
</body>
</html>
