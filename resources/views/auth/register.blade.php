@extends('layouts.auth')
@section('title', 'Inscription')

@section('content')
<h3 style="margin-bottom:1.25rem;">Créer un compte</h3>

@if($errors->any())
<div class="alert">
    @foreach($errors->all() as $error)
        {{ $error }}<br>
    @endforeach
</div>
@endif

<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="field">
        <label>Nom</label>
        <input type="text" name="name" value="{{ old('name') }}" placeholder="Ton nom complet" required autofocus>
    </div>
    <div class="field">
        <label>Email</label>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="toi@universite.ma" required>
    </div>
    <div class="field">
        <label>Mot de passe</label>
        <input type="password" name="password" placeholder="8 caractères minimum" required>
    </div>
    <div class="field">
        <label>Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" placeholder="••••••••" required>
    </div>
    <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">S'inscrire</button>
</form>

<div class="perf" style="margin-top:1.25rem;"></div>
<p style="text-align:center; font-size:13px; margin-top:1.1rem; color:var(--ink-soft);">
    Déjà un compte ? <a href="{{ route('login') }}">Se connecter</a>
</p>
@endsection
