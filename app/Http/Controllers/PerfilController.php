<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PerfilController extends Controller
{
    //
    
      public function index()
    {
          $user = Auth::user();
          
          if($user->type == 3)
          {
              return view('perfil_referidor');
          }
          
          else
          {
        return view('perfil');      
          }
        
        
    }
    
}
