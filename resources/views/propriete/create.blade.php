@extends('HeaderFooter.app')

@section('content')
<div class="container py-12 pt-5">
  <div class="card uper">
    <div class="card-header">
      <h1 class="text-center">Ajouter un propriété</h1>
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
    <form method="post" action="{{ route('proprietes.store') }}" class="mx-3">
       @csrf
        <div class="mb-3">
          <label for="surface" class="form-label">Surface</label>
          <input type="number" class="form-control" name="surface" value="{{old('surface')}}">
        </div>
        <div class="form-floating">
          <textarea class="form-control" name="description" value="{{old('description')}}"></textarea>
        </div><br>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="etat" value="{{old('etat')}}">
          <label class="form-check-label" for="etat">Etat</label>
        </div>
        <select class="form-select" aria-label="Default select example" name="proprietaire_id" value="{{old('proprietaire_id')}}">
          <option selected>Propriétaire</option>
          @foreach ($proprietaires as $proprietaire)
          <option value="{{$proprietaire->id}}">{{"$proprietaire->prenom $proprietaire->nom"}}</option>
          @endforeach
        </select><br>
        <select class="form-select" aria-label="Default select example" name="quartier_id" value="{{old('quartier_id')}}">
          <option selected>Quartiers</option>
          @foreach ($quartiers as $quartier)
          <option value="{{$quartier->id}}">{{$quartier->nom}}</option>
          @endforeach
        </select><br>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </form>
  </div>
</div>