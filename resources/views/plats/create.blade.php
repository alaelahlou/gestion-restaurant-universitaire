@extends('layouts.app')
@section('title', 'Ajouter un plat')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Plats</span>
        <h1>Ajouter un plat</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('plats.store') }}" method="POST">
        @csrf
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Ex. Tajine de poulet" required>
        </div>
        <div class="field">
            <label>Description</label>
            <textarea name="description" placeholder="Quelques mots sur le plat"></textarea>
        </div>
        <div class="field">
            <label>Prix (DH)</label>
            <input type="number" step="0.01" min="0" name="prix" placeholder="0.00" required>
        </div>
        <div class="field">
            <label>Catégorie</label>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('plats.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
