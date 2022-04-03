@extends('layouts.app')

@section('content')
<div class="container ">
    <h1 class="text-center py-5">La liste des agences</h1>
        <table class="table table-striped">
            <head>
                <th>id</th>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Propriétes</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </head>
            <tbody>
                @foreach ($agences as $agence)
                <tr>
                    <td>{{$agence->id}}</td>
                    <td>{{$agence->nom}}</td>
                    <td>{{$agence->adresse}}</td>
                    <td>{{$agence->propriete_id}}</td>

                    <td><a href="{{ route('agences.edit', $agence->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('agences.destroy', $agence->id)}}" method="post">
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