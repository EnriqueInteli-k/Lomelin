@extends('layouts.app')

@section('content')
                    
<div class="row" style="height: 145px;">
</div>


<div class="w-100 clearfix" style="background: #DCE5EE;">
    
   <div class="row">
       <div class="col-md-9 col-sm-6">
           <div class="row">
               <div class="col-md-12">
                    <img src="{{ asset("$imagen") }}" style="width:100%">
               </div>
               
               
           </div>
           
           <div class="row" style="height: 180px;">
               <div class="col-md-12">
        
                    <div class="owl-carousel owl-theme loop">

                         @foreach ($carrusel as $car)
                        
                    <div class="item"style="margin-right: 10px" >
                        <div class="card text-white">
                            <img class="card-img" src="{{ asset("$car") }}" alt="banner image"/>
                               
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

<div class="" style="background: white; width: 100%; height: 600px;">
    
    <div class="row" style="line-height: 1.2;">
        <div class="col-md-12 col-sm-6">
            <span class ="lomelin-text2">Departamento Atelier Juriquilla</span><br>  
            <span class ="lomelin-text3">Juriquilla, Juriquilla</span>  
        
<div class="row" style="height: 45px;">
</div>
        
            
            <span class="lomelin-text3">Departamento en venta en piso 9. Cuenta con 2 recamaras, la principal con vestidor y baño, la segunda recamara con closet y baño completo y medio baño para visitas, cocina equipada, sala y comedor con barra y terraza y vista a la ciudad de Querétaro. Cuarto de Lavado, bodega y 2 estacionamientos subterráneos.</span>
            <br>
            
<div class="row" style="height: 25px;">
</div>
        
            
            <span class="lomelin-text11">Características.</span>
            <br>
            
            
<div class="row" style="height: 25px;">
</div>
            

<img src="{{ asset('images/map1.png') }}" style="width:100%">
            
            
            
            
            
    </div>
    
    
        
        
        
        
        
        
        
        
        
        
</div>
        
        
</div>

</div>

@endsection


@section('footer')

  @include('footer');                 

@endsection