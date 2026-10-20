@extends('layouts.app')
@section('title', 'Ajouter une catégorie')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Catégories</span>
        <h1>Ajouter une catégorie</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="field">
            <label>Nom de la catégorie</label>
            <input type="text" name="nom" placeholder="Ex. Entrées, Plats chauds, Desserts" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href="{{ route('categories.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
