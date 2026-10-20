@extends('layouts.app')
@section('title', 'Modifier plat')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Plats</span>
        <h1>Modifier le plat</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('plats.update', $plat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" value="{{ $plat->nom }}" required>
        </div>
        <div class="field">
            <label>Description</label>
            <textarea name="description">{{ $plat->description }}</textarea>
        </div>
        <div class="field">
            <label>Prix (DH)</label>
            <input type="number" step="0.01" min="0" name="prix" value="{{ $plat->prix }}" required>
        </div>
        <div class="field">
            <label>Catégorie</label>
            <select name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $plat->category_id == $category->id ? 'selected' : '' }}>{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('plats.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
