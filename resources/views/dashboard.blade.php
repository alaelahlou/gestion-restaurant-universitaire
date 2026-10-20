@extends('layouts.app')
@section('title', 'Tableau de bord')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Aujourd'hui</span>
        <h1>Tableau de bord</h1>
    </div>
</div>

<div class="stat-grid">
    <div class="stat-card">
        <span class="n">{{ $menus }}</span>
        <span class="l">Menus publiés</span>
    </div>
    <div class="stat-card">
        <span class="n">{{ $plats }}</span>
        <span class="l">Plats au catalogue</span>
    </div>
    <div class="stat-card">
        <span class="n">{{ $reservations }}</span>
        <span class="l">Réservations</span>
    </div>
    <div class="stat-card">
        <span class="n">{{ $users }}</span>
        <span class="l">Utilisateurs</span>
    </div>
</div>

<div class="tray">
    <h3 style="margin-bottom:.75rem;">Accès rapide</h3>
    <div style="display:flex; gap:.75rem; flex-wrap:wrap;">
        <a href="{{ route('menus.create') }}" class="btn btn-primary">+ Nouveau menu</a>
        <a href="{{ route('plats.create') }}" class="btn">+ Nouveau plat</a>
        <a href="{{ route('reservations.index') }}" class="btn">Voir les réservations</a>
    </div>
</div>
@endsection
