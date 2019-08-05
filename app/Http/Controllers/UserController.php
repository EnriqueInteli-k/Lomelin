<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{


    public function modificar(Request $request) 
    {
    
        $user = Auth::user();
        $cur_id = $user->id;
          
         $usuario = User::find($cur_id);  
        
          $usuario->name = $request->get('nombre');
          $usuario->phone = $request->get('phone');
         
          
          $usuario->save();
          return redirect('perfil');
          
    }
    
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

