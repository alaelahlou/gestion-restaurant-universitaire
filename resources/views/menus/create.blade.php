@extends('layouts.app')
@section('title', 'Créer un menu')
@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Menus</span>
        <h1>Créer un menu</h1>
    </div>
</div>
<div class="tray ru-form">
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf
        <div class="field">
            <label>Date du menu</label>
            <input type="date" name="date_menu" required>
        </div>
        <div class="field">
            <label>Plats du menu</label>
            @forelse($plats as $plat)
            <div class="check-row">
                <input type="checkbox" name="plats[]" value="{{ $plat->id }}" id="plat-{{ $plat->id }}">
                <label for="plat-{{ $plat->id }}" style="margin:0; text-transform:none; font-family:inherit; font-size:14px; letter-spacing:0;">
                    {{ $plat->nom }} <span class="mono" style="color:var(--ink-soft); font-size:12px;">— {{ number_format($plat->prix, 2) }} DH</span>
                </label>
            </div>
            @empty
            <p class="field-hint">Aucun plat disponible. <a href="{{ route('plats.create') }}">Ajoute un plat d'abord</a>.</p>
            @endforelse
        </div>
        <button type="submit" class="btn btn-primary">Créer le menu</button>
        <a href="{{ route('menus.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
