@extends('layouts.app')
@section('title', 'Avis')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $avis->count() }} avis</span>
        <h1>Avis</h1>
    </div>
    <a href="{{ route('avis.create') }}" class="btn btn-primary">+ Donner un avis</a>
</div>

@if($avis->count())
<div class="ru-table-wrap">
    <table class="ru-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Note</th>
                <th>Commentaire</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($avis as $a)
            <tr>
                <td class="mono">{{ $a->id }}</td>
                <td>{{ $a->menu->date_menu ?? '—' }}</td>
                <td class="mono">{{ $a->note }} / 5</td>
                <td>{{ $a->commentaire }}</td>
                <td>
                    <a href="{{ route('avis.edit', $a->id) }}" class="btn btn-sm">Modifier</a>
                    <form action="{{ route('avis.destroy', $a->id) }}" method="POST" style="display:inline;">
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
    <div class="big">Aucun avis</div>
    Les avis des étudiants sur les menus s'affichent ici.
</div>
@endif
@endsection
