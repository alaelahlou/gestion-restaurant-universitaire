@extends('layouts.app')
@section('title', 'Stock')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $ingredients->count() }} ingrédient(s)</span>
        <h1>Stock</h1>
    </div>
    <a href="{{ route('ingredients.create') }}" class="btn btn-primary">+ Ajouter</a>
</div>

@if($ingredients->count())
<div class="ru-table-wrap">
    <table class="ru-table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Quantité en stock</th>
                <th>Niveau</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ingredients as $ingredient)
            <tr>
                <td>{{ $ingredient->nom }}</td>
                <td class="mono">{{ $ingredient->quantite_stock }}</td>
                <td>
                    @if($ingredient->quantite_stock <= 10)
                        <span class="stamp stamp-full">Stock bas</span>
                    @elseif($ingredient->quantite_stock <= 50)
                        <span class="stamp stamp-wait">À surveiller</span>
                    @else
                        <span class="stamp stamp-ok">Ok</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('ingredients.edit', $ingredient->id) }}" class="btn btn-sm">Modifier</a>
                    <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST" style="display:inline;">
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
    <div class="big">Aucun ingrédient</div>
    Ajoute ton premier ingrédient au stock.
</div>
@endif
@endsection
