@extends('layouts.app')
@section('title', 'Réserver un repas')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Réservations</span>
        <h1>Réserver un repas</h1>
    </div>
</div>

@if(session('error'))
<div class="alert">{{ session('error') }}</div>
@endif

<div class="tray ru-form">
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="field">
            <label>Menu</label>
            <select name="menu_id" required>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">Menu du {{ $menu->date_menu }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Quantité</label>
            <input type="number" name="quantite" min="1" value="1" required>
        </div>
        <button type="submit" class="btn btn-primary">Réserver</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
