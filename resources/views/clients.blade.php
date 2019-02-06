@extends('welcome')

@section('titre')
    clients
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Clients
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Date de prise de contact</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->nom }}</td>
                    <td>{{ $client->prenom }}</td>
                    <td>{{ $client->telephone }}</td>
                    <td>{{ $client->datecontact }}</td>
                    <td><a href="{{ url('/editclient/' . $client->id) }}">mise a jour</a></td>
                    <td><a href="{{ url('/deleteclient/' . $client->id) }}">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
