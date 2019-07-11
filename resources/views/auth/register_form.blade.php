@extends('layouts.app')

@section('content')

 <div class="container">
     <div class="row">
         <div class="col-lg-3 col-md-3"></div>
         <div style="height:30px;"></div>
     </div>     
     
  




<div class="row">
    <div class="col-lg-3 col-md-3"></div>
    <div class="col-lg-6 col-md-6 grid-margin stretch-card">
     
        <div class="card">
                <div class="card-body">
        
            <h4 class="card-title">Registro de nuevos usuarios:</h4>
                  <p class="card-description">
                    Ingresa tus datos de acceso
                  </p>        
                    
                  <form class="login-form" method="POST" action="{{route('register') }}">
                      {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="username">Usuario</label>
          <input type="text" class="form-control lomelin-text5" placeholder="Usuario" id="username" name="username" autofocus required>
        </div> 
    
        
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="name">Nombre completo</label>
          <input type="text" class="form-control lomelin-text5" placeholder="Nombre completo" id="name" name="name" required>
        </div> 
      
      
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="email">Dirección de correo:</label>
          <input type="text" class="form-control lomelin-text5" placeholder="email" id="email" name="email" autofocus required>
        </div> 
           
         <div class="form-group">
                    <label for="exampleFormControlSelect2">Tipo de usuario</label>
                    
                    {!! Form::select('id',$tiposUsuarios,1,['class'=>'form-control','id'=>'tipo','name'=>'tipo' ]); !!}
                   
                  </div>
        
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password">Contraseña</label>
          <input type="password" class="form-control lomelin-text5" placeholder="Contraseña" id="password" name="password" required>
         </div>
       
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password2">Confirma tu contraseña</label>
          <input type="password" class="form-control lomelin-text5" placeholder="Contraseña" id="password2" name="password2">
         </div>
       
        
       
        <button class="btn btn-primary btn-lg btn-block" type="submit">Registrarme</button>
      
      </div>
    </form>
                  <br>
                  <br>
  <p class="card-description">Ya estas registrado: <a class=links" href="{{ route('login')}}"> Entra aqui.</a>
                        </p>                        
                  
                </div>
        </div>
                    
    </div>    
    <div class="col-lg-3 col-md-3"></div>
</div>
     
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>

@endsection
