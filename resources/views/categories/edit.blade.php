@extends('layouts.app')
@section('title', 'Modifier catégorie')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">Catégories</span>
        <h1>Modifier la catégorie</h1>
    </div>
</div>

<div class="tray ru-form">
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="field">
            <label>Nom</label>
            <input type="text" name="nom" value="{{ $category->nom }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('categories.index') }}" class="btn btn-ghost">Annuler</a>
    </form>
</div>
@endsection
