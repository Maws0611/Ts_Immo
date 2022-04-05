@extends('HeaderFooter.app')

@section('content')
<div class="container py-12 pt-5">
  <div class="card uper">
    <div class="card-header">
      <h1 class="text-center">Ajouter un agence</h1>
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
    <form method="post" action="{{ route('agences.store') }}" class="mx-3">
       @csrf
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">
        </div>
        <div class="mb-3">
          <label for="adresse" class="form-label">Adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>
        <select class="form-select" aria-label="Default select example" name="propriete_id">
          <option selected>Propriétes</option>
          @foreach ($proprietes as $propriete)
            <option value="{{ $propriete->id }}">{{ $propriete->nom }}</option>
          @endforeach
        </select><br>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>
@endsection