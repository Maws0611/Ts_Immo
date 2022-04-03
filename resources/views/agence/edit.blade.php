@extends('layouts.app')

@section('content')
<div class="container py-12 pt-5">
<div class="card uper">
  <div class="card-header">
    <h1 class="text-center">Modifier un agences</h1>
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
      <form method="post" action="{{ route('agences.update', $agence->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{ $agence->nom }}">
              </div>
              <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" name="adresse" value="{{ $agence->adresse }}">
              </div>
              <select class="form-select" aria-label="Default select example" name="propriete_id">
                <option selected>Propriétes</option>
                @foreach ($proprietes as $propriete)
                <option value="{{ $propriete->id }}">{{ $propriete->nom }}</option>
                @endforeach
              </select><br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </div>
</div>
</div>
@endsection