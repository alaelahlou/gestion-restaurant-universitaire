@extends('layouts.app')
@section('title', 'Menus')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $menus->count() }} menu(s)</span>
        <h1>Menus</h1>
    </div>
    <a href="{{ route('menus.create') }}" class="btn btn-primary">+ Créer un menu</a>
</div>

@if($menus->count())
<div class="stat-grid">
    @foreach($menus as $menu)
    <div class="tray">
        <span class="kicker">Menu du</span>
        <h3 style="margin-bottom:.75rem;">{{ \Illuminate\Support\Carbon::parse($menu->date_menu)->translatedFormat('d M Y') }}</h3>
        <div class="perf"></div>
        <ul style="list-style:none; padding:0; margin:.9rem 0 0;">
            @forelse($menu->plats as $plat)
            <li style="padding:.35rem 0; border-bottom:1px dashed var(--line); display:flex; justify-content:space-between;">
                <span>{{ $plat->nom }}</span>
                <span class="mono price">{{ number_format($plat->prix, 2) }} DH</span>
            </li>
            @empty
            <li style="color:var(--ink-soft); font-size:13px;">Aucun plat associé</li>
            @endforelse
        </ul>
        <div style="margin-top:1rem; display:flex; gap:.5rem;">
            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm">Modifier</a>
            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@else
<div class="empty">
    <div class="big">Aucun menu</div>
    Crée un menu du jour en associant des plats.
</div>
@endif
@endsection
