@extends('layouts.auth')
@section('title', 'Connexion')

@section('content')
<h3 style="margin-bottom:1.25rem;">Connexion</h3>

@if($errors->any())
<div class="alert">{{ $errors->first() }}</div>
@endif

<form action="{{ route('login') }}" method="POST">
    @csrf
    <div class="field">
        <label>Email</label>
        <input type="text" name="email" value="{{ old('email') }}" placeholder="toi@universite.ma" required autofocus>
    </div>
    <div class="field">
        <label>Mot de passe</label>
        <input type="password" name="password" placeholder="••••••••" required>
    </div>
    <div class="field" style="display:flex; align-items:center; gap:.5rem;">
        <input type="checkbox" name="remember" id="remember" style="width:16px; height:16px; accent-color:var(--mustard-dark);">
        <label for="remember" style="margin:0; text-transform:none; font-family:inherit; font-size:13px; letter-spacing:0;">Se souvenir de moi</label>
    </div>
    <button type="submit" class="btn btn-primary" style="width:100%; justify-content:center;">Se connecter</button>
</form>

<div class="perf" style="margin-top:1.25rem;"></div>
<p style="text-align:center; font-size:13px; margin-top:1.1rem; color:var(--ink-soft);">
    Pas encore de compte ? <a href="{{ route('register') }}">S'inscrire</a>
</p>
@endsection
