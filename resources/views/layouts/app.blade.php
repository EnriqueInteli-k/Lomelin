<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csfr-token" content="{{ csrf_token() }}"
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
</button>
                        </div>
                    </div>
                    @else
                  <div class="container d-flex flex-row h-100">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top">
                            <a class="navbar-brand brand-logo" href="/">
                                <img src="{{ asset('images/logo1.png') }}" alt="logo"/>
                            </a>
                            <a class="navbar-brand brand-logo-mini" href="{{ route('home')}}">
                                <img src="{{ asset('images/logo1.svg') }}" alt="logo"/>
                            </a>
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
                <div class="nav-bottom" style="height: 117px;">
                <div class="container d-flex flex-row h-100">

                          <ul class="nav" style="width:285px;">
                          
                            <li class="nav-item" style="width:245px; height:117px;">
                            <a class="navbar-brand brand-logo" href="{{ route('home')}}">
                                <img src="{{ asset('images/logo1.png') }}" alt="logo"/>
                            </a>
                            <a class="navbar-brand brand-logo-mini" href="{{ route('home')}}">
                                <img src="{{ asset ('images/logo-mini.svg') }}" style="color: blue;" alt="logo"/>
                            </a>
                            </li>
                

                        </ul>

                     @guest
                    
                        <ul class="nav navbar-nav">
                        <li class="dropdown" style="line-height: 117px;">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle btn btn-outline-secondary">Tipo de adquisición</a> 
                            <ul class="dropdown-menu">
                <li><a href="#" class="btn btn-outline-secondary" style="width: 100%;">Venta</a> </li>
                <li><a href="#" class="btn btn-outline-secondary" style="width: 100%;">Renta</a> </li>
                            </ul>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                          <button type="button" class="btn btn-outline-secondary">Dónde</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav navbar-nav">
                        <li class="dropdown" style="line-height: 117px;">
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
                        <li class="nav-item" style="line-height: 117px;">
                          <button type="button" class="btn btn-outline-secondary">Precio</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                          <button type="button" class="btn btn-outline-secondary">Instalaciones</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>
                        <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                          <button type="button" class="btn btn-outline-secondary">Extensión</button>
                        </li>
                        <li class="nav-item" style="width:5px;"></li>
                        </ul>

                        <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                            
                        <a href="{{ route('login')}}" class="btn btn-success btn-fw">Sistema referidos</a>
                        </li>
                        </ul>
 @else
 
                        <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                            
                        <a href="{{ route('dashboard')}}" class="btn btn-outline-secondary">Dashboard</a>
                        </li>
                        </ul>
 
 <ul class="nav">
     <li class="nav-item" style="line-height: 117px;">
         <div style="width: 48px;"></div>
     </li>
 </ul>
 
                    <ul class="nav">
                        <li class="nav-item" style="line-height: 117px;">
                            
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