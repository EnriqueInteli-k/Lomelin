<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
class atributos
{
    public $recamaras;
    public $banos;
    public $superficie;
    public $estacionamientos;
}
*/

class direccion
{
    public $address1;
    public $address2;
    
    public $administrative_area;
    public $locality;
    public $dependent_locality;
    public $postal_code;
    
}


class DetallePropietarioPropiedadController extends Controller
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
        $dir = $attributos['field_direccion'];
        $procesado = $body['processed'];
        
                
        $cur_direccion = new direccion();
        $cur_direccion->address1 = $dir['address_line1'];
        $cur_direccion->address2 = $dir['address_line2'];
        $cur_direccion->administrative_area = $dir['administrative_area'];
        $cur_direccion->dependent_locality = $dir['dependent_locality'];
        $cur_direccion->locality = $dir['locality'];
        $cur_direccion->postal_code = $dir['postal_code'];
        
        
        
        if (isset($attributos['field_cajones_de_estacionamiento']))
        {
        $estacionamientos = $attributos['field_cajones_de_estacionamiento'];    
        }
        else
        {
            $estacionamientos = "0";
        }
        
        if (isset($attributos['field_recamaras'])){
        $recamaras = $attributos['field_recamaras'];
        }
        else
        {
            $recamaras = "0";
        }
        
        
        $superficie = $attributos['field_superficie'];
        
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
        
               $cur_atributos = new atributos();
               $cur_atributos->banos = "2";
               $cur_atributos->recamaras = $recamaras;
               $cur_atributos->estacionamientos = $estacionamientos;
               $cur_atributos->superficie = $superficie;
             
             
        $carrusel = array("images/detalle".$id.".png","images/car_6.png", "images/car_7.png", "images/car_8.png", "images/car_9.png");
        
        return view('verdetallepropietario', ['imagen'=>$imagen,'carrusel'=>$imagenes,'body'=>$procesado,'title'=>$title, 'colonia'=>$colonia, 'atributos'=>$cur_atributos, 'direccion'=> $cur_direccion]);
   
       
    }
    
    
}
