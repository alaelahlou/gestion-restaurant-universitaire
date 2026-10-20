@extends('layouts.app')
@section('title', 'Modifier ingrédient')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Stock</span>
        <h1>Modifier l'ingrédient</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('ingredients.update', $ingredient->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" value="{{ $ingredient->nom }}" required>
        </div>
        <div class="field">
            <label>Quantité en stock</label>
            <input type="number" name="quantite_stock" min="0" value="{{ $ingredient->quantite_stock }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('ingredients.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
