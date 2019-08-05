<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class PropiedadController extends Controller
{
    
    
    public function agregar()
    {
        
        return view('agregarpropiedad');  
        
    }
    
    
}