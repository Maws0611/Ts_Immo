{{-- @extends('layouts.app')

@section('content') --}}
<div class="container ">
    <h1 class="text-center py-5">La liste des agences</h1>
        <table class="table table-striped">
            <head>
                <th>id</th>
                <th>Nom</th>
                <th>Adress</th>
                <th>Propriete gérer</th>
            </head>
            <tbody>
                @foreach ($agences as $agence)
                <tr>
                    <td>{{$agence->id}}</td>
                    <td>{{$agence->nom}}</td>
                    <td>{{$agence->adresse}}</td>
                    <td>{{$agence->propriete_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    