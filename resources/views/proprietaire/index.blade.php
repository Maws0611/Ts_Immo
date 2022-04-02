@extends('layouts.app')

@section('content')
<div class="container ">
    <h1 class="text-center py-5">La liste des proprietaires</h1>
        <table class="table table-striped">
            <head>
                <th>id</th>
                <th>CNI</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Adress</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </head>
            <tbody>
                @foreach ($proprietaires as $proprietaire)
                <tr>
                    <td>{{$proprietaire->id}}</td>
                    <td>{{$proprietaire->CNI}}</td>
                    <td>{{$proprietaire->prenom}}</td>
                    <td>{{$proprietaire->nom}}</td>
                    <td>{{$proprietaire->telephone}}</td>
                    <td>{{$proprietaire->sexe}}</td>
                    <td>{{$proprietaire->adress}}</td>
                    <td><a href="{{ route('proprietaires.edit', $proprietaire->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('proprietaires.destroy', $proprietaire->id)}}" method="post">
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