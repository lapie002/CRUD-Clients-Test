<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Client;

class ClientsController extends Controller
{
    //
    public function index()
    {
      // recuperation de touts les Clients
      $clients = Client::all();

      return view('clients')->with('clients',$clients);

    }

    public function create()
    {
      // code...
      return view('clientsform');

    }

    public function store(ClientRequest $client_request)
    {
      // code...
    $client = new Client();

    $client->nom = $client_request->input('nom');
    $client->prenom = $client_request->input('prenom');
    $client->telephone = $client_request->input('telephone');
    $client->email = $client_request->input('email');
    $client->datecontact = $client_request->input('datecontact');

    /** IMAGE **/
    $image = $client_request->file('image');

    if($image->isValid()){

        $chemin = config('images.path');

        $extension = $image->getClientOriginalExtension();

        do{
            $nom_image = str_random(4) . '.' . $extension;
        }while(file_exists($chemin . '/' . $nom_image));

        if($image->move("$chemin","$nom_image")){

            $client->image = $nom_image;

            // on sauvegarde le client
            $client->save();

            return view('client_image_ok');
        }



    }

    return redirect('/clients');

    }

    public function editClient($id)
    {
        $client = Client::find($id);

        return view('editclient')->with('client',$client)->with('id',$id);

    }

    public function updateClient(ClientRequest $client_request, $id)
    {
      // code...
        $client = Client::find($id);

        //validation des entree du formulaire par exemple
        /*$this->validate($request, [
          'nom'=> 'required|max:20'
        ]);*/
        $client->nom = $client_request->input('nom');
        $client->prenom = $client_request->input('prenom');
        $client->telephone = $client_request->input('telephone');
        $client->email = $client_request->input('email');
        $client->datecontact = $client_request->input('datecontact');

        //update : on refait un save
        $client->save();

        return redirect('/clients');

    }

    public function deleteClient($id)
    {
      // code...
      // $id = $request->input('id');

      $client = Client::find($id);

      $client->delete();

      return redirect('/clients');

    }




}
