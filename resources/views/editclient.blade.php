@extends('welcome')

@section('titre')
    client Update Form
@endsection

@section('contenu')
    <div class="container">
        <!--
        <div class="content">
            <div class="title ">
                Client Form
            </div>
        </div>
        -->
        <br>
        <div class="col-sm-offset-3 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading">Formulaire client</div>
                <div class="panel-body">
                    <form class="" action="{{action('ClientsController@updateClient',$client['id'])}}" method="post">
                        @csrf

                        <input type="hidden" class="form-control" name="id" value="{{$client->id}}">

                        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                            <label for="nom">Nom:</label>
                            <input type="text" class="form-control" name="nom" placeholder="Votre nom" value="{{ $client->nom }}" required >
                            {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                            <label for="prenom">Prenom:</label>
                            <input type="text" class="form-control" name="prenom" placeholder="Votre prenom"  value="{{ $client->prenom }}" required>
                            {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                            <label for="telephone">telephone:</label>
                            <input type="text" class="form-control" name="telephone" placeholder="Votre telephone" value="{{ $client->telephone }}"  required>
                            {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                            <label for="email">email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Votre email" value="{{ $client->email }}"  required>
                            {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                        </div>
                        <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
                            <label for="datecontact">Date de contact:</label>
                            <input type="date" class="form-control" name="datecontact" value="{{ $client->datecontact }}" required>
                            {!! $errors->first('datecontact', '<small class="help-block">:message</small>') !!}
                        </div>
                        <button type="submit" class="btn btn-info pull-right">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
