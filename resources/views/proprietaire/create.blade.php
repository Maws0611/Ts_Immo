@extends('layouts.app')

@section('content')
<div class="container py-12 pt-5">
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
        <select class="form-select" aria-label="Default select example" name="sexe">
          <option selected>Sexe</option>
          <option value="F">Femme</option>
          <option value="M">Masculin</option>
        </select><br>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>