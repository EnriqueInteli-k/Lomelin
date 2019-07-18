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
          
          $imagenes = array();
          $url = "https://lomelinqueretaro.mx/lomelin-api/node/departamento/".$id;
          
        $data = json_decode(file_get_contents($url), true);
        $propiedad = $data['data'];
        
         $attributos = $propiedad['attributes'];
         $title = $attributos['title'];
        $body = $attributos['body'];
        $procesado = $body['processed'];
        
        
        $field_direccion = $attributos['field_direccion'];
            $colonia = $field_direccion['dependent_locality'];
        
          $photoUrl = $url."/field_foto";
          
            $data2 = json_decode(file_get_contents($photoUrl), true);
             $photos = $data2['data'];
             
             foreach($photos as $photo)
             {
                 
             $attribute = $photo['attributes'];
             $uri = $attribute['uri'];
             $url = $uri['url'];
             
             
             $curPhoto = "https://lomelinqueretaro.mx".$url;  
             $imagenes[] = $curPhoto;
             }
             
             
             
        
        
        
          
        //$imagen = "images/detalle".$id.".png";
             if (isset($imagenes[0])){
                 $imagen = $imagenes[0];
             }
             
             else
             {
                 $imagen = "";
             }
        
        $carrusel = array("images/detalle".$id.".png","images/car_6.png", "images/car_7.png", "images/car_8.png", "images/car_9.png");
        
        return view('verdetalle', ['imagen'=>$imagen,'carrusel'=>$imagenes,'body'=>$procesado,'title'=>$title, 'colonia'=>$colonia]);
   
       
    }
    
    
}
