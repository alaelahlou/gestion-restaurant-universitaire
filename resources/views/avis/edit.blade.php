@extends('layouts.app')
@section('title', 'Modifier avis')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Avis</span>
        <h1>Modifier l'avis</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('avis.update', $avi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Menu</label>
            <select name="menu_id" required>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}" {{ $avi->menu_id == $menu->id ? 'selected' : '' }}>Menu du {{ $menu->date_menu }}</option>
                @endforeach
            </select>
        </div>
        <div class="field">
            <label>Note (1 à 5)</label>
            <input type="number" name="note" min="1" max="5" value="{{ $avi->note }}" required>
        </div>
        <div class="field">
            <label>Commentaire</label>
            <textarea name="commentaire">{{ $avi->commentaire }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('avis.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
