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
        
            <h4 class="card-title">Usuarios registrados</h4>
                  <p class="card-description">
                    Ingresa tus datos de acceso
                  </p>        
                    
    <form class="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="username">Usuario</label>
          <input type="text" class="form-control lomelin-text5" placeholder="Usuario" id="username" name="username" autofocus>
        </div> 
        <br>
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password">Contraseña</label>
          <input type="password" class="form-control lomelin-text5" placeholder="Contraseña" id="password" name="password">
         </div>
        <br>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right"> <a href="#"> Olvide mi contraseña?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      
      </div>
    </form>
                  <br>
                  <br>
  <p class="card-description">Nuevo usuario: <a class=links" href="{{ route('register')}}"> Registrate aqui.</a>
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