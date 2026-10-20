@extends('layouts.app')
@section('title', 'Ajouter un ingrédient')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Stock</span>
        <h1>Ajouter un ingrédient</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('ingredients.store') }}" method="POST">
        @csrf
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" placeholder="Ex. Riz, Huile, Tomates" required>
        </div>
        <div class="field">
            <label>Quantité en stock</label>
            <input type="number" name="quantite_stock" min="0" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('ingredients.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
