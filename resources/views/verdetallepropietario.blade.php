@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
            
            
                        <div class="row">
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card text-white border-0" style="background-color: #004AAB;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-handbag icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Ventas Totales</h4>
                                                <h3 class="font-weight-light mb-3">38 %</h3>
                                                <p class="mb-0 font-weight-light">Más crecimiento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card text-white border-0" style="background-color: #1A74DE;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-user icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Rentas Totals</h4>
                                                <h3 class="font-weight-light mb-3">20 %</h3>
                                                <p class="mb-0 font-weight-light">Más crecimiento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card text-white border-0" style="background-color: #4CBD94;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-screen-desktop icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Prospectos</h4>
                                                <h3 class="font-weight-light mb-3">38 %</h3>
                                                <p class="mb-0 font-weight-light">Más crecimiento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card text-white border-0" style="background-color: #292929;">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-support icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Pendientes</h4>
                                                <h3 class="font-weight-light mb-3">20 %</h3>
                                                <p class="mb-0 font-weight-light">Más crecimiento</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
 
               <div class="row" style ="height: 60px;"></div>
               
               
               
               
               
                                   <div class="row">
                            <div class="col-md-6 col-lg-7 stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    
                                     <img class="card-img" src="{{ asset("$imagen") }}" style ="width: 100%; height: 80%;" alt="banner image"/>
                             
                            </div>
                            </div>     
                                
                            <div class="col-md-6 col-lg-5 stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body" style="background-color: white; padding: 0px 0px;">
                                             <p class="card-description jsgrid-align-left lomelin-text25">{{$title }}</p>
                                             <img src="{{ asset('images/place.png') }}" style="width: 18px; height: 24px;">
                                            <span class="jsgrid-align-left lomelin-text24">{{$direccion->address1 }}, {{$direccion->dependent_locality }}</span>
                                            
                                             
                                            
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-4 grid-margin stretch-card">
                                                    <button type="button" href="#descripcion" class="btn btn-outline-secondary" data-toggle="collapse">Descripción</button>
                                                </div>
                                                <div class="col-md-4 grid-margin stretch-card">
                                                         <button type="button" href="#servicios" class="btn btn-outline-secondary" data-toggle="collapse">Servicios</button>    
                                                </div>
                                                <div class="col-md-4 grid-margin stretch-card">
                                                         <button type="button" class="btn btn-outline-secondary">Otros</button>    
                                                </div>
                                            </div>
                                            
                                             <div class="row overflow-auto"  style="width: 100%; height: 100px;">
                                                 <div class="col-md-12 grid-margin stretch-card">
                                                      <div class="card-body" style="background-color: white; padding: 0px 0px;">
                                                          <div id="descripcion" class="collapse in">
                                                               <span class="lomelin-text24">
                                                             {!! $body !!}
                                                          </span>
                                                         </div>
                                                     
                                                         <div id="servicios" class="collapse in">
                                                         
                                                             <div class="row">
                                                                 
                                                                 <div class="col-sm-6">
                                                                     <input type="checkbox" name="servicio1" value="bano"><span class="lomelin-text24">Baño</span><br>
                                                                      <input type="checkbox" name="servicio2" value="jardin"><span class="lomelin-text24">Jardin</span><br>
                                                                      <input type="checkbox" name="servicio3" value="estacionamiento" checked><span class="lomelin-text24">Est.</span><br> 
                                                                      <input type="checkbox" name="servicio4" value="balcon" checked><span class="lomelin-text24">Balcón</span><br> 
                                                                 </div>
                                                                 
                                                                 <div class="col-sm-6">
                                                                     <input type="checkbox" name="servicio5" value="recepcion"><span class="lomelin-text24">Recepción</span><br>
                                                                      <input type="checkbox" name="servicio6" value="seguridad"><span class="lomelin-text24">Seguridad</span><br>
                                                                      <input type="checkbox" name="servicio7" value="gimnasio" checked><span class="lomelin-text24">Gimnasio</span><br> 
                                                                      <input type="checkbox" name="servicio8" value="cocina" checked><span class="lomelin-text24">Cocina</span><br> 
                                                                 </div>
                                                                 
                                                                 
                                                                 
                                                             </div>  
                                                             
                                                             
                                                         </div>
                                                     
                                                         
                                      
                                                     
                                                 </div>  
                                                 </div>
                                                 
                                             </div>
                                            
                                        </div>
                                </div>
                            </div>
                        </div>
               
               
               <div class="row" style ="height: 60px;"></div>
               
                <div class="row">
                            <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                                <div class="card text-white border-0">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="row" style="height:20px"></div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row" style="height:20px"></div>
                                          
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left">Constructora</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left">Arquitectura</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left">Marketing</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left">Comercialización</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left">Socios_Clave</button>
                                            </div>                                             
                                        </div>
                                        <div class="col-md-6">
                                            <img class="card-img h-100 rounded-0" src="{{ asset("$imagen") }}" alt="Card image">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form class="forms-sample">
                                                                <div class="form-group">
                                                                    <span class="lomelin-text11">Constructora</span>>
                                                                    <input type="text" class="form-control lomelin-text24" id="exampleInputUsername1" placeholder="Nombre de la constructora">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="email" class="form-control lomelin-text24" id="exampleInputEmail1" placeholder="Telefóno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="form-control lomelin-text24" cols="5" rows="3" placeholder="Dirección"></textarea>
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control lomelin-text24" id="exampleInputConfirmPassword1" placeholder="Página web">
                                                                </div>
                                                                
                                                                    <span class="lomelin-text11">Referencia constructora</span>>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control lomelin-text24" id="referencia1" placeholder="Lorem Ipsum">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control lomelin-text24" id="referencia2" placeholder="Lorem Ipsum">
                                                                </div>
                                                               <div class="form-group">
                                                                    <input type="text" class="form-control lomelin-text24" id="referencia3" placeholder="Lorem Ipsum">
                                                                </div>
                                                                    <div class="form-group">
                                                                    <input type="text" class="form-control lomelin-text24" id="referencia4" placeholder="Lorem Ipsum">
                                                                </div>
                                                                
                                                                     
                                                                
                                                                
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
               
               
               
               
               
               
               
               
               
            
        </div>
@endsection


@section('footer')

    @include('footer');  
                 

@endsection                   