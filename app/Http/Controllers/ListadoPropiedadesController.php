<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class propiedad
{
    public $id;
    public $coverPhoto;
    public $url;
    public $title;
    public $colonia;
    public $recamaras;
    public $banos;
    public $superficie;
    public $tipo;
}


class ListadoPropiedadesController extends Controller
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
    
    public function ObtenTipoPropiedad($id)
    {
        
        $idArrays = array();
        $propiedades = array();
        $rUrl = "";
            if ($id == 1) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/casa";
            }
            
            else if ($id == 2) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/departamento";
            }
           
            else if ($id == 3) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/local";
            }
           
            else if ($id == 4) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/nave";
            }
           
            else if ($id == 5) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/oficina";
            }
           
            else if ($id == 6) {
                $rUrl = "https://lomelinqueretaro.mx/lomelin-api/node/terreno";
            }
           
            
            
        $data = json_decode(file_get_contents($rUrl), true);
        $casas = $data['data'];
        
        foreach ( $casas as $casa)
        {
            $id_propiedad = $casa['id'];
            $links = $casa['links'];
            
            $self = $links['self'];
            $liga = $self['href'];
           
           
            $attributos = $casa['attributes'];
            $title = $attributos['title'];
            
            if (isset($attributos['field_recamaras']))
            {
                $recamaras = $attributos['field_recamaras'];
                
            }
            else
                $recamaras = "0";
            
            
            $superficie = $attributos['field_superficie'];
            
            $banos = "2";
            
            $field_direccion = $attributos['field_direccion'];
            $colonia = $field_direccion['dependent_locality'];
            
            
            // Get Photo URL
            $photoUrl = $rUrl."/".$id_propiedad."/field_foto";
            
            //https://lomelinqueretaro.mx/lomelin-api/node/departamento/85d90f71-16d7-4d00-b9db-5cad11e794ec/field_foto
            
             $data2 = json_decode(file_get_contents($photoUrl), true);
             $photos = $data2['data'];
             
             
             
             
             if (isset($photos[0]))
             {
                 $firstPhoto = $photos[0];
             $attribute = $firstPhoto['attributes'];
             $uri = $attribute['uri'];
             $url = $uri['url'];
             
             }
             else
             {
                 $url = "";
             }
            
             
             
             $new_propiedad = new propiedad();
             $new_propiedad->id = $id_propiedad;
             $new_propiedad->tipo = $id;
             $new_propiedad->title = $title;
             $new_propiedad->coverPhoto = "https://lomelinqueretaro.mx".$url;  
            $new_propiedad->colonia = $colonia;
            $new_propiedad->recamaras = $recamaras;
            $new_propiedad->banos = $banos;
            $new_propiedad->superficie = $superficie;
            $propiedades[] =  $new_propiedad;
        }
        
          return view('listadopropiedades', ['propiedades'=>$propiedades,'cantidad'=>count($propiedades)]);
    }
    
    
}
