@extends('layouts.app')

@section('content')
<div class="container ">
    <h1 class="text-center py-5">La liste des proprietes</h1>
        <table class="table table-striped">
            <head>
                <th>id</th>
                <th>Surface</th>
                <th>Description</th>
                <th>Le propriétaire</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </head>
            <tbody>
                @foreach ($proprietes as $propriete)
                <tr>
                    <td>{{$propriete->id}}</td>
                    <td>{{$propriete->surface}}</td>
                    <td>{{$propriete->description}}</td>
                    <td>{{$propriete->proprietaire_id}}</td>
                    <td><a href="{{ route('proprietes.edit', $propriete->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('proprietes.destroy', $propriete->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection