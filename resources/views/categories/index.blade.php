@extends('layouts.app')
@section('title', 'Catégories')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $categories->count() }} catégorie(s)</span>
        <h1>Catégories</h1>
    </div>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">+ Ajouter</a>
</div>

@if($categories->count())
<div class="ru-table-wrap">
    <table class="ru-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="mono">{{ $category->id }}</td>
                <td>{{ $category->nom }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm">Modifier</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="empty">
    <div class="big">Aucune catégorie</div>
    Commence par en ajouter une pour organiser tes plats.
</div>
@endif
@endsection
