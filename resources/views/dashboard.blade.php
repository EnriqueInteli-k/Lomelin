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
                        <div class="row" style="height:40px;">
                            <div class="col-md-4">
</div>
                            <div class="col-md-4">
</div>
                            <div class="col-md-4">
</div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-7 stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    
                                     <img class="card-img" src="{{ asset('images/img5.png') }}" alt="banner image"/>
                                     <div class="card-img-overlay d-flex" style="padding: 0px 0px;" >
                                     
                                         <div class="text-left w-100">
                                             <div class="row" style="height: 10%;"></div>
                                           <div class="row" style="height: 10%;">
                                            <div class="col-lg-9"></div> 
                                            <div class="col-lg-3"> 
                                                <a href="{{route('detalle') }}"> <p class="lomelin-text9" style="line-height: 1.0;">Ver detalles.</p></a>
                                            </div>
                                         </div>
                                        <div class="row" style="height: 50%;"></div>
                                           
                                        <div class="row" style="height: 10%;">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <span class="lomelin-text20">Departamentos</span>
                                            </div> 
                                           </div>    
                                       
                                         <div class="row" style="height: 20%;">
                                             <div class="col-lg-1"></div>
                                            <div class="col-lg-11">
                                                <span class="lomelin-text22">Puerta Real Residencial</span>
                                            </div> 
                                           </div>    
                                       
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            </div>     
                                
                            <div class="col-md-6 col-lg-5 stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body" style="background-color: white; padding: 0px 0px;">
                                        <div class ="row">
                                            <div class="col-md-6 col-lg-10"></div>
                                            <div class="col-md-6 col-lg-2">
                                                <a href="{{route('addProperty') }}" class="btn btn-light" name="add_property" id="edit"><img src="{{ asset('images/house1.png') }}" class="" width="32px" height="auto"></a>
                                            </div>
                                            
                                        </div>    
                                        
                                        
                                            <div class ="row">
                                               <div class="col-md-6 col-lg-7">
                                            <span class="card-description jsgrid-align-left lomelin-text11">Proyectos Activos</span>
                                            </div>
                                               <div class="col-md-6 col-lg-5" style="text-align: right;">
                                             <a href="{{route('verPropiedades') }}"><span class="lomelin-text23" >ver proyectos</span></a>  
                                             </div>
                                            </div>  
                                           
                                             
                                            
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card text-white border-0 table-wrapper-scroll-y custom-scrollbar1">
                                                      
                   <table class="table">
                      <tbody>
                        <tr style="height:20px;">
                            <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo1</span></td>
                        </tr>
                        <tr style="height:20px;">
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo2</span></td>
                        </tr>
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo3</span></td>
                        </tr>
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo4</span></td>
                        </tr>
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo5</span></td>
                        </tr>
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo6</span></td>
                        </tr>
                          <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo7</span></td>
                        </tr>
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo8</span></td>
                        </tr>  
                        <tr>
                          <td style="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo9</span></td>
                        </tr>
                        <tr>
                          <td class="height: 20px; line-height: 0px"><span class="lomelin-text24">Desarrollo10</span></td>
                        </tr>
                        
                      </tbody>
                      
                    </table>
                                                       
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->            
  

                     <div class="row" style="height: 80px;"></div>
                    
@endsection


@section('footer')

    @include('footer');  
                 

@endsection