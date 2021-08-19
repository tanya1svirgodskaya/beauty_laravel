<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    public static function newuser ($req){
      $user= new Users();
      $user->name=$req->input('name');
      $user->lastname=$req ->input ('lastname');
      $user->save();
      
    }

}
