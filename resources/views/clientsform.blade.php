@extends('welcome')

@section('titre')
    client Form
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
                <form class="" action="{{ url('/saveclient') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" name="nom" placeholder="Votre nom" required >
                        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('prenom') ? 'has-error' : '' !!}">
                        <label for="prenom">Prenom:</label>
                        <input type="text" class="form-control" name="prenom" placeholder="Votre prenom"  required>
                        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('telephone') ? 'has-error' : '' !!}">
                        <label for="telephone">telephone:</label>
                        <input type="text" class="form-control" name="telephone" placeholder="Votre telephone" required>
                        {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" name="email" placeholder="Votre email" required>
                        {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        <label for="image">image:</label>
                        <input type="file" class="form-control" name="image" required>
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
                        <label for="datecontact">Date de contact:</label>
                        <input type="date" class="form-control" name="datecontact"  >
                        {!! $errors->first('datecontact', '<small class="help-block">:message</small>') !!}
                    </div>
                    <button type="submit" class="btn btn-info pull-right">Enregistrer</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection


