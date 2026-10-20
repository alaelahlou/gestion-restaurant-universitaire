@extends('layouts.app')
@section('title', 'Modifier menu')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Menus</span>
        <h1>Modifier le menu</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Date du menu</label>
            <input type="date" name="date_menu" value="{{ \Illuminate\Support\Carbon::parse($menu->date_menu)->format('Y-m-d') }}" required>
        </div>
        <div class="field">
            <label>Plats du menu</label>
            @php $selected = $menu->plats->pluck('id')->toArray(); @endphp
            @forelse($plats as $plat)
            <div class="check-row">
                <input type="checkbox" name="plats[]" value="{{ $plat->id }}" id="plat-{{ $plat->id }}" {{ in_array($plat->id, $selected) ? 'checked' : '' }}>
                <label for="plat-{{ $plat->id }}" style="margin:0; text-transform:none; font-family:inherit; font-size:14px; letter-spacing:0;">
                    {{ $plat->nom }} <span class="mono" style="color:var(--ink-soft); font-size:12px;">— {{ number_format($plat->prix, 2) }} DH</span>
                </label>
            </div>
            @empty
            <p class="field-hint">Aucun plat disponible.</p>
            @endforelse
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('menus.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
