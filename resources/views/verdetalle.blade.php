@extends('layouts.app')

@section('content')
                    
<div class="row" style="height: 145px;">
</div>


<div class="w-100 clearfix" style="background: #DCE5EE;">
    
   <div class="row">
       <div class="col-md-9 col-sm-6">
           <div class="row">
               <div class="col-md-12">
                    <img src="{{ asset("$imagen") }}" class="imagepreview" style="width:100%">
               </div>
               
               
           </div>
           
           <div class="row" style="height: 180px;">
               <div class="col-md-12">
        
                    <div class="owl-carousel owl-theme loop">

                         @foreach ($carrusel as $car)
                        
                    <div class="item"style="margin-right: 10px" >
                        <div class="card text-white">
                            <a href="#" class="pop">
                            <img class="card-img" style = "width: 100%; height: 200px;" src="{{ asset("$car") }}" alt="banner image"/>
                            </a>   
                        </div>
                    </div>
                      
                         @endforeach
                        
                    </div>
              
               </div>
               
           </div>
           
           
           
       </div>
      
        <div class="col-md-3 col-sm-6">
           
              <div class="card">
                  <div class="card-header">
                      <span class="lomelin-text11">Haz una cita</span>
                  </div>
                  
                <img class="card-img-top" src="{{ asset('images/lomelin_logo1.png') }}" alt="Card image cap1">
                <div class="card-body">
                    
                    <p class="lomelin-text13"><img  src="{{ asset('images/phone_icon.png') }}" alt="Telefóno">(55) 2581-0350</p>
                  
                     <form class="forms-sample">
                    <div class="form-group">
                      <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                    </div>
                    
                  <div class="form-group">
                      <input type="text" class="form-control" id="email" placeholder="Email">
                    </div>
                    
                    <div class="form-group">
                      <input type="text" class="form-control" id="telefono" placeholder="Número de teléfono">
                    </div>
                    <div class="form-group">
                    <textarea class="form-control" id="comentarios" rows="4"></textarea>     
                    
                    <div class="row" style="height: 20px;"></div>
                    
                    <div class="row">
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-primary mr-2" style="width: 100%;" >Enviar</button>
                    </div>
                    </div>
                    
                    
                    </div>
                    
                     </form>
                    
                </div>
              </div>
            
            
            
       </div>
      
       
       
   </div>   
    
</div>

<div class="row" style="height: 45px;">
</div>

<div class="row">
    <div class="col-md-9 col-sm-6">

<div class="" style="background: white; width: 100%;">
    
    <div class="row" style="line-height: 1.2;">
        <div class="col-md-12 col-sm-6">
            <span class ="lomelin-text2">{{$title}}</span><br>  
            <span class ="lomelin-text3">{{$colonia}}</span>  
        
<div class="row" style="height: 45px;">
</div>
        

            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img src="{{ asset('images/rooms.png') }}" style="width: 60px; height: 60px;">
                    <span class='lomelin-text13'>{{ $atributos->recamaras }} Recámaras</span>
                </div>
                <div class="col-md-1">
                    
                </div>
                
                
                <div class="col-md-5 col-sm-6">
                   <img src="{{ asset('images/baths.png') }}" style="width: 60px; height: 60px;">
                    <span class='lomelin-text13'>{{ $atributos->banos }} Baños completos</span> 
                </div>
                
            </div>

            
                <div class="row">
                <div class="col-md-5 col-sm-6">
                    <img src="{{ asset('images/cars.png') }}" style="width: 60px; height: 60px;">
                    <span class='lomelin-text13'>{{ $atributos->estacionamientos }} Estacionamiento(s)</span>
                </div>
                <div class="col-md-1">
                    
                </div>
                
                
                <div class="col-md-5 col-sm-6">
                   <img src="{{ asset('images/surface.png') }}" style="width: 60px; height: 60px;">
                    <span class='lomelin-text13'>{{ $atributos->superficie }} mts2.</span> 
                </div>
                
            </div>

            
            
<div class="row" style="height: 45px;">
</div>

            
            <span class="lomelin-text3">{!! $body !!}</span>
            <br>
            
            <hr style="color: #464646; size: 2px; height: 2px;">

            <div class="row" style="width: 2; min-width: 2;">
</div>
        
            
            <span class="lomelin-text11">Características.</span>
            <br>
            
            <div class="row">
                <div class="col-md-12 col-sm-6">
                    <span class='lomelin-text13'>&#10004;Jardin &#10004;Terraza &#10004;Seguridad &#10004;Cuarto de servicio &#10004;Alberca </span>    
                </div>
            </div>    
                
            
            
<div class="row" style="height: 25px;">
</div>
            
  <span class="lomelin-text11">Ubicación.</span>
            <br>
        
            
 <div class="row" style="height: 25px;">
</div>
      
            
            
<img src="{{ asset('images/map1.png') }}" style="width:100%">
            
            <div class="row" style="height: 45px;">
</div>
            
            
            
    </div>
    
    
        
        
        
        
        
        
        
        
        
        
</div>
        
        
</div>

</div>

@endsection


@section('footer')

  @include('footer');                 

@endsection