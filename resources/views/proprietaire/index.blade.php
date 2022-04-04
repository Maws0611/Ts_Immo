@extends('HeaderFooter.app')

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
                    <td><a href="{{ route('proprietaires.edit', $proprietaire->id)}}" class="btn"><img src="{{ asset('img/edit.png')}}" width="30" height="30" alt="edit"></a></td>
                    <td>
                        <form action="{{ route('proprietaires.destroy', $proprietaire->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn" type="submit"><img src="{{ asset('img/Delete.png')}}" width="30" height="30" alt="Delete"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection