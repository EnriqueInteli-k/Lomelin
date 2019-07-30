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
        
            <h4 class="card-title" style = "font-family: Helvetica Neue; font-size: 26px; color: #292929; font-weight: normal;">Registro de nuevos usuarios:</h4>
                  <p class="card-description">
                    Ingresa tus datos de acceso
                  </p>        
                    
                  <form class="login-form" method="POST" action="{{route('register') }}">
                      {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="username" class="lomelin-text15">Usuario</label>
          <input type="text" class="form-control" placeholder="Usuario" id="username" name="username" autofocus required>
        </div> 
    
        
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="name" class="lomelin-text15">Nombre completo</label>
          <input type="text" class="form-control" placeholder="Nombre completo" id="name" name="name" required>
        </div> 
      
      
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="email" class="lomelin-text15">Dirección de correo:</label>
          <input type="text" class="form-control" placeholder="email" id="email" name="email" autofocus required>
        </div> 
           
         <div class="form-group">
                    <label for="exampleFormControlSelect2" class="lomelin-text15">Tipo de usuario</label>
                    
                    {!! Form::select('id',$tiposUsuarios,1,['class'=>'form-control','id'=>'type','name'=>'type' ]); !!}
                   
                  </div>
        
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password" class="lomelin-text15">Contraseña</label>
          <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>
         </div>
       
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password2" class="lomelin-text15">Confirma tu contraseña</label>
          <input type="password" class="form-control" placeholder="Contraseña" id="password2" name="password2">
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
