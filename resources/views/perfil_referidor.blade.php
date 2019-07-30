@extends('layouts.app_referidor')

@section('content')
 <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card align-center"></div>
                            
                            <p class="lomelin-text12">El sistema de referidos le permite obtener recompensas recomendando amistades o conocidos que pudieran estar interesados en nuestra oferta inmobiliaria. Utiliza este formulario para decirnos quién puede estar interesado en nuestra oferta inmobiliaria. Si decide invertir en una de nuestras propiedades podrás recibir una recompensa de hasta $10,000.00. La información proporcionada no se compartirá con terceros.
                            </p>
                        </div>
     
     
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                <div class="card text-white border-0" style="background-color: white; background: white;"> 
                                    <div class="card-body">
                                        <form class="form-sample">
                                            <p class="card-description lomelin-text4">Perfil</p>
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text18 control-label">Nombre Completo</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text19" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text18 control-label">Correo</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text19" value = "{{ Auth::user()->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text18 control-label">Teléfono</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text19" value = "+52 33 12345678">
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
                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                     
  

@endsection


@section('footer')

   <footer class="footer">
                        <div class="w-100 clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
                        </div>
                    </footer>
                 

@endsection
