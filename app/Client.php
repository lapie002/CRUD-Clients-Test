<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $clients = 'clients';

      public $timestamps = false;

      protected $fillable = ['id','nom', 'prenom', 'telephone','email', 'image','datecontact',];

}
