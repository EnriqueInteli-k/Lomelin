<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Referido;

class PerfilController extends Controller
{
    //
    
      public function index()
    {
          $user = Auth::user();
          
          if($user->type == 3)
          {
              $referidos = Referido::where('id_user','=', $user->id)->get();
              //$referidos = Referido::All();
              return view('perfil_referidor',['referidos' => $referidos]);
          }
          
          else
          {
        return view('perfil');      
          }
        
        
    }
    
}
