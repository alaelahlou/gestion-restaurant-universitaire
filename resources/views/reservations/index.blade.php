@extends('layouts.app')
@section('title', 'Réservations')

@section('content')
<div class="ru-topbar">
    <div>
        <span class="kicker">{{ $reservations->count() }} réservation(s)</span>
        <h1>Réservations</h1>
    </div>
    <a href="{{ route('reservations.create') }}" class="btn btn-primary">+ Réserver</a>
</div>

@if($reservations->count())
<div class="ru-table-wrap">
    <table class="ru-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu</th>
                <th>Quantité</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
            <tr>
                <td class="mono">{{ $reservation->id }}</td>
                <td>{{ $reservation->menu->date_menu ?? '—' }}</td>
                <td class="mono">{{ $reservation->quantite }}</td>
                <td>
                    @if($reservation->status === 'en_attente')
                        <span class="stamp stamp-wait">En attente</span>
                    @elseif($reservation->status === 'complet')
                        <span class="stamp stamp-full">Complet</span>
                    @else
                        <span class="stamp stamp-ok">{{ ucfirst($reservation->status) }}</span>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="empty">
    <div class="big">Aucune réservation</div>
    Les réservations apparaîtront ici une fois passées.
</div>
@endif
@endsection
