<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
      // code...
    $client = new Client();

    $client->nom = $request->input('nom');
    $client->prenom = $request->input('prenom');
    $client->telephone = $request->input('telephone');
    $client->datecontact = $request->input('datecontact');


    $client->save();

    return redirect('/clients');

    }

    public function editClient($id)
    {
        $client = Client::find($id);

        return view('editclient')->with('client',$client)->with('id',$id);

    }

    public function updateClient(Request $request, $id)
    {
      // code...
        $client = Client::find($id);

        //validation des entree du formulaire par exemple
        /*$this->validate($request, [
          'nom'=> 'required|max:20'
        ]);*/
        $client->nom = $request->input('nom');
        $client->prenom = $request->input('prenom');
        $client->telephone = $request->input('telephone');
        $client->datecontact = $request->input('datecontact');

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
