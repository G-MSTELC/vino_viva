<!-- Informations détaillées sur un utilisateur particulier -->
@extends('layouts.admin')
@section('title', 'Utilisateur')
@section('content')
<header>
    utilisateur
</header>
<main>
    <div>
        <h1>{{-- {{ $user->prenom }} {{ $user->nom }} --}}</h1>
        <div>
            <table>
                <tr>
                    <th>Courriel</th>
                    <th>Courriel vérifié</th>
                    <th>Mot de passe</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                </tr>
                <tr>
                    <td>{{-- {{ $user->email }} --}}</td>
                    <td>{{-- {{ $user->email_verified_at }} --}}</td>
                    <td>{{-- {{ $user->password }} --}}</td>
                    <td>{{-- {{ $user->created_at }} --}}</td>
                    <td>{{-- {{ $user->updated_at }} --}}</td>
                </tr>
            </table>
        </div>
    </div>
    
    <div>
        <a href="{{ route('profil.edit', $user->id) }}">Modifier</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Supprimer</button>
    </div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deleteModalLabel">Supprimer un utilisateur</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Confirmez-vous la suppression de l'utilisateur {{-- {{ $user->prenom }} {{ $user->nom }} --}}? 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <form action="#" method="post">
            {{-- {{ route('profil.destroy', $user->id) }} --}}
            @csrf
            @method('delete')
            <input type="submit" value="Supprimer" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        </form>
      </div>
    </div>
  </div>
</div>
</main>
@endsection