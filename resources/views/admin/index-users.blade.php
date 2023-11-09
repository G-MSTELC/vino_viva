@extends('layouts.admin')
@section('title', 'Liste d'utilisateurs')
@section('content')
<header>
    utilisateurs
</header>
<main>
    <div class="form-container">
        <form action="">
            <div class="form-input-container">
                <label for="search_users">RECHERCHE</label>
                <input type="text" id="search_users">
            </div>
        </form>
    </div>
    <div>
        <table>
            <thead>
                <tr>Prénom</tr>
                <tr>Nom</tr>
                <tr>Action</tr>
            </thead>
            <tbody>
                {{-- @forelse($users as $user) --}}
                <tr>
                    <td>{{-- {{ $user->prenom }} --}}</td>
                    <td>{{-- {{ $user->nom }} --}}</td>
                    <td><a href="#" class="text-dark">Mettre à jour</a></td>
                    {{-- {{ route('profil.edit', $user->id) }} --}}
                </tr>
                {{-- @empty --}}
                <tr>Aucun utilisateur</tr>
                {{-- @endforelse --}}
            </tbody>
            <th></th>
        </table>
    </div>
</main>
@endsection