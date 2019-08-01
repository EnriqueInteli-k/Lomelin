<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Referido;
use Auth;

class ReferidoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
     //   $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    
      public function agregar(Request $request) 
    {
    $user = Auth::user();
          
            $referido = new Referido();
          $referido->name = $request->get('name');
          $referido->email = $request->get('email');
          $referido->phone = $request->get('phone');
          $referido->id_user = $user->id;
          
          $referido->save();
          return redirect('perfil');
          
    }
     
}
