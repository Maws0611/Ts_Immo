@extends('layouts.app')

@section('content')
<div class="container py-12 pt-5 ">
  <div class="card uper">
    <div class="card-header">
      <h1 class="text-center">Ajouter un Propriétaire</h1>
    </div>
    <div class="card-body">
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      @endif
    </div>
    <form method="post" action="{{ route('proprietaires.store') }}" class="mx-3">
       @csrf
        <div class="mb-3">
          <label for="CNI" class="form-label">CNI</label>
          <input type="text" class="form-control" name="CNI">
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="prenom">
        </div>
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
          <label for="telephone" class="form-label">Téléphone</label>
          <input type="number" class="form-control" name="telephone">
        </div>
        <select class="form-select" aria-label="Default select example" name="sexe">
          <option selected>Sexe</option>
          <option value="F">Femme</option>
          <option value="M">Masculin</option>
        </select><br>
        <div class="mb-3">
          <label for="adress" class="form-label">Adress</label>
          <input type="text" class="form-control" name="adress">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>