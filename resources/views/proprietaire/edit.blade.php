@extends('layouts.app')

@section('content')
<div class="container py-12 pt-5">
<div class="card uper">
  <div class="card-header">
    <h1 class="text-center">Modifier un propriétaire</h1>
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
      <form method="post" action="{{ route('proprietaires.update', $proprietaire->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="mb-3">
                <label for="CNI" class="form-label">CNI</label>
                <input type="text" class="form-control" name="CNI" value="{{$proprietaire->CNI}}">
              </div>
              <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="{{$proprietaire->prenom}}">
              </div>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{$proprietaire->nom}}">
              </div>
              <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="number" class="form-control" name="telephone" value="{{$proprietaire->telephone}}">
              </div>
              <select class="form-select" aria-label="Default select example" name="sexe">
                
                <option selected>Sexe</option>
                <option value="F">Femme</option>
                <option value="M">Masculin</option>
              </select><br>
              <div class="mb-3">
                <label for="adress" class="form-label">Adress</label>
                <input type="text" class="form-control" name="adress" value="{{$proprietaire->adress}}">
              </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </div>
</div>
</div>
@endsection