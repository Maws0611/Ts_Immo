{{-- @extends('layouts.app')

@section('content') --}}
<div class="container ">
    <h1 class="text-center py-5">La liste des proprietes</h1>
        <table class="table table-striped">
            <head>
                <th>id</th>
                <th>CNI</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Sexe</th>
                <th>Adress</th>
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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    