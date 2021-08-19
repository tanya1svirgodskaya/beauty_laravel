<?php

namespace App\Http\Controllers;
 //namespace App\Models\Users;
use App\Models\Users;
use Illuminate\Http\Request;

class RecordsController extends Controller
{
  public function recordsfortoday(){
    return view ('home');
  }
  public function newrecord(){
    return view ('newrecord');
  }
  public function createrecords(Request $req){
   Users::newuser ($req);
  return redirect('/records');
  }
    //
}
