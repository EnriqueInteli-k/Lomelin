<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetallePropiedadController extends Controller
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
        return view('resultado');
    }
    
      public function verPropiedad($id)
    {
          
          
        $imagen = "images/detalle".$id.".png";
        $carrusel = array("images/detalle".$id.".png","images/car_6.png", "images/car_7.png", "images/car_8.png", "images/car_9.png");
        
        return view('verdetalle', ['imagen'=>$imagen,'carrusel'=>$carrusel]);
   
       
    }
    
    
}
