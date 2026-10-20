@extends('layouts.app')
@section('title', 'Plats')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $plats->count() }} plat(s)</span>
        <h1>Plats</h1>
    </div>
    <a href="{{ route('plats.create') }}" class="btn btn-primary">+ Ajouter</a>
</div>

@if($plats->count())
<div class="ru-table-wrap">
    <table class="ru-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plats as $plat)
            <tr>
                <td class="mono">{{ $plat->id }}</td>
                <td>{{ $plat->nom }}</td>
                <td>{{ \Illuminate\Support\Str::limit($plat->description, 60) }}</td>
                <td class="price">{{ number_format($plat->prix, 2) }} DH</td>
                <td>{{ $plat->categorie->nom ?? 'Sans catégorie' }}</td>
                <td>
                    <a href="{{ route('plats.edit', $plat->id) }}" class="btn btn-sm">Modifier</a>
                    <form action="{{ route('plats.destroy', $plat->id) }}" method="POST" style="display:inline;">
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
    <div class="big">Aucun plat</div>
    Ajoute ton premier plat au catalogue.
</div>
@endif
@endsection
