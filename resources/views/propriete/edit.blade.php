@extends('HeaderFooter.app')

@section('content')
<div class="container py-12 pt-5">
<div class="card uper">
  <div class="card-header">
    <h1 class="text-center">Modifier les propriétes</h1>
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
      <form method="post" action="{{ route('proprietes.update', $propriete->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <div class="mb-3">
                <label for="surface" class="form-label">Surface</label>
                <input type="number" class="form-control" name="surface" value="{{ $propriete->surface }}">
              </div>
              <div class="form-floating">
                <textarea class="form-control" name="description">{{ $propriete->description }}</textarea>
              </div><br>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="etat" @if(old('etat')=='on')) checked @endif>
                <label class="form-check-label" for="etat">Etat</label>
              </div>
              <select class="form-select" aria-label="Default select example" name="proprietaire_id">
                <option selected>Propriétaire</option>
                {{ $propriete->proprietaire_id }}
                @foreach ($proprietaires as $proprietaire)
                <option value="{{$proprietaire->id}}">{{"$proprietaire->prenom $proprietaire->nom"}}</option>
                @endforeach
              </select><br>
              <select class="form-select" aria-label="Default select example" name="quartier_id">
                <option selected>Quartiers</option>
                @foreach ($quartiers as $quartier)
                <option value="{{$quartier->id}}">{{$quartier->nom}}</option>
                @endforeach
              </select><br>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
    </div>
</div>
</div>
@endsection