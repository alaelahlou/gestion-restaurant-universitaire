@extends('layouts.app')
@section('title', 'Donner un avis')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Avis</span>
        <h1>Donner un avis</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('avis.store') }}" method="POST">
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
            <label>Note (1 à 5)</label>
            <input type="number" name="note" min="1" max="5" required>
        </div>
        <div class="field">
            <label>Commentaire</label>
            <textarea name="commentaire" placeholder="Qu'as-tu pensé du menu ?"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="{{ route('avis.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
