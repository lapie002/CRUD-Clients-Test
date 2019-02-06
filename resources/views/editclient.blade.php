@extends('welcome')

@section('titre')
    client Form
@endsection

@section('contenu')
    <div class="container">
        <div class="content">
            <div class="title ">
                Client Form
            </div>
        </div>
<form class="" action="{{action('ClientsController@updateClient',$client['id'])}}" method="post">
@csrf
<input type="hidden" class="form-control" name="id" value="{{$client->id}}">

  <label for="nom">Nom:</label>
  <input type="text" class="form-control" name="nom" value="{{ $client->nom }}" required >

  <label for="prenom">Prenom:</label>
  <input type="text" class="form-control" name="prenom" value="{{ $client->prenom }}" required >

  <label for="telephone">Telephone:</label>
  <input type="text" class="form-control" name="telephone" value="{{ $client->telephone }}" required >

  <label for="datecontact">Date:</label>
  <input type="date" class="form-control" name="datecontact" value="{{ $client->datecontact }}"  required >

  <div class="text-center">
    <button type="submit" class="btn btn-success">Enregistrer</button>
</div>

</form>



    </div>
@endsection
