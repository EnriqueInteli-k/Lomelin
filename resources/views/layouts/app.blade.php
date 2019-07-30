<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csfr-token" content="{{ csrf_token() }}">
        <title>Lomelin services</title>
        <!-- plugins:css -->
        
        
        <link href="{{ asset('vendors/iconfonts/simple-line-icon/css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/css/vendor.bundle.addons.css') }}" rel="stylesheet">
        <link href="{{ asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

        
        
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        
         <link href="{{ asset('css/style.css') }}" rel="stylesheet">
         <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
         <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
        <!-- endinject -->
        <link rel="shortcut icon" href="images/favicon.png"/>
    </head>

<body>
    
  <div class="container-scroller">
            <!-- partial:../../partials/_horizontal-navbar.html -->
            <nav class="navbar horizontal-layout col-lg-12 col-12 p-0">
                <div class="nav-top flex-grow-1" style="background: #004AAB; height: 68px;">
                    @guest
                    <div class="container d-flex flex-row h-100">
                      
                        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav navbar-nav-right mr-0">
                                <li class="nav-item nav-profile">
                                    <a class="nav-link" href="{{ route('login')}}"> <span class="" style="font-family: Helvetica; font-size: 22px; color: white;">Log-in</span>  </a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login')}}"> <i class="icon-login" style="color: #4CBD94;"></i> </a>
                                </li>
                            </ul>
                            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                                <span class="icon-menu text-white"></span>
                            </button>
                        </div>
                    </div>
                    @else
                  <div class="container d-flex flex-row h-100">
             <div class="text-center navbar-brand-wrapper d-flex align-items-top">
                           
                           
                        </div>
                      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                            <ul class="navbar-nav navbar-nav-right mr-0">
                                <li class="nav-item nav-profile">
                                    <a class="nav-link" href="{{ route('perfil')}}">
                                        <span class="nav-profile-text">{{ Auth::user()->name }}</span>
                                        <img src="{{ asset('images/face1.png') }}" class="rounded-circle" alt="profile"/>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown"> <i class="icon-bell"></i> </a>
                                   
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="icon-logout"></i> </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>

                                </li>
                            </ul>
                            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
                                <span class="icon-menu text-white"></span>
                            </button>
                        </div>
		</div>

                    
                    
                    @endguest
                </div>
                
                
                <div class="nav-bottom" style="height: 60px;">
                <div class="container d-flex flex-row h-100">

                          <ul class="nav navbar-nav" style="width:220px;">
                          
                            <li class="nav-item">
                                
                            <a class="navbar-brand brand-logo" href="{{ route('home')}}">
                                <img src="{{ asset('images/logo1.png') }}" alt="logo" style="height: 50px; width: auto;"/>
                            </a>
                            
                            </li>
                

                        </ul>

                     @guest
                    
                     <ul class="nav navbar-nav" style="display: inline-block;">
                        <li class="dropdown" style="line-height: 60px;">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">Tipo de adquisición</a> 
                            <ul class="dropdown-menu">
                <li><a href="#" class="btn btn-outline-secondary" style="width: 100%;">Venta</a> </li>
                <li><a href="#" class="btn btn-outline-secondary" style="width: 100%;">Renta</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                          <button type="button" class="btn btn-outline-secondary">Dónde</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav navbar-nav">
                        <li class="dropdown" style="line-height: 60px;">
                           <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary"> Propiedad </a> 
                           <ul class="dropdown-menu">
                <li><a href="{{ route('getPropiedades', 1 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Casa</a> </li>
                <li><a href="{{ route('getPropiedades', 2 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Departamento</a> </li>
                <li><a href="{{ route('getPropiedades', 3 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Local</a> </li>
                <li><a href="{{ route('getPropiedades', 4 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Nave</a> </li>
                <li><a href="{{ route('getPropiedades', 5 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Oficina</a> </li>
                <li><a href="{{ route('getPropiedades', 6 ) }}" class="btn btn-outline-secondary" style="width: 100%;">Terreno</a> </li>
                           </ul>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                          <button type="button" class="btn btn-outline-secondary">Precio</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                          <button type="button" class="btn btn-outline-secondary">Instalaciones</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>
                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                          <button type="button" class="btn btn-outline-secondary">Extensión</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                            
                            <button type="button" class="btn btn-success btn-fw" data-toggle="modal" data-target="#exampleModalCenter">
                    Sistema referidos
                            </button>
                            
                       
                        </li>
                        </ul>
 @else
 
                        <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                            
                        <a href="{{ route('dashboard')}}" class="btn btn-outline-secondary">Dashboard</a>
                        </li>
                        </ul>
 
 <ul class="nav">
     <li class="nav-item" style="line-height: 32px;">
         <div style="width: 48px;"></div>
     </li>
 </ul>
 
                    <ul class="nav">
                        <li class="nav-item" style="line-height: 60px;">
                            
                        <a href="{{ route('perfil')}}" class="btn btn-outline-secondary">Perfil</a>
                        </li>
                        </ul>
 
 

 @endguest

                </div>
                    
                </div>
            </nav>
            
     
             
            <!-- partial -->
            <div class="container-fluid">
                <div class="main-panel">
                    
                  
                     @yield('content')
                    
                    
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    
                    @yield('footer')
                    <!-- partial -->
                    
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
    
        <!-- login model -->
    
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span class="lomelin-text5">Inicie sesión o registre su cuenta</span>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
    <form class="login-form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="username" class="lomelin-text15">Usuario / Email</label>
          <input type="text" class="form-control" placeholder="Usuario" id="username" name="username" autofocus>
        </div> 
        <br>
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="password" class="lomelin-text15">Contraseña</label>
          <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
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
  <p class="card-description">Nuevo usuario: <a class=links" href="{{ route('register_referidos')}}"> Registrate aqui.</a>
                        </p>                        
                  
   
      </div>
    
    </div>
  </div>
</div>
    
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('vendors/js/vendor.bundle.addons.js') }}"></script>
        <script src="{{ asset('js/template.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script>
        $('.owl-carousel').owlCarousel({
            margin:10,
            items:3,
            nav: true,
        });
        
        $(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
                return false;        
		});
                
                $('.collapse').on('show.bs.collapse', function () {
    $('.collapse.in').each(function(){
        $(this).collapse('hide');
    });
  });
  
         });
        
        </script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
       
        <!-- endinject -->
        <!-- Custom js for this page-->
        <!-- End custom js for this page-->
    </body>
</html>