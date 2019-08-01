@extends('layouts.app_referidor')

@section('content')
 <div class="content-wrapper">
     
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card text-center">
                                <span class="lomelin-text1" style="width: 100%; line-height: 1.1">Sistema de referidos</span>
                            </div>
                        </div>
     
     
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card text-center">
                                <span class="lomelin-text2" style="width: 100%; line-height: 1.1">Lorem ipsum dolor sit amet consectetur.</span>
                            </div>
                        </div>
     
     
     
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card text-center">
                            
                            <p class="lomelin-text3" style="width: 100%;">El sistema de referidos le permite obtener recompensas recomendando amistades o conocidos que pudieran estar interesados en nuestra oferta inmobiliaria. Utiliza este formulario para decirnos quién puede estar interesado en nuestra oferta inmobiliaria. Si decide invertir en una de nuestras propiedades podrás recibir una recompensa de hasta $10,000.00. La información proporcionada no se compartirá con terceros.
                            </p>
                              </div>
                        </div>
     
     
                        <div class="row">
                            <div class="col-md-6 col-lg-12 stretch-card">
                                <div class="card text-white border-0" style="background-color: white; background: white;"> 
                                    <div class="card-body" style ="padding: 0px 0px;">
                                        <form class="form-sample">
                                            <p class="card-description lomelin-text11">TUS DATOS</p>
                                           
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre Completo</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" disabled style="padding-left: 0px;" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Correo</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" disabled style="padding-left: 0px;" disabled value = "{{ Auth::user()->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Teléfono</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" disabled value = "{{ Auth::user()->phone }}">
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
                                         <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                    </div>
                                </div>
                            </div>
                        </div>
     
     
                    <div class="row">
                            <div class="col-md-6 col-lg-10 grid-margin stretch-card text-left">
                                <span class="lomelin-text11" style="width: 100%;">Tus referidos</span>
                            </div>
                        
                            <div class="col-md-6 col-lg-2 grid-margin stretch-card text-right">
                                     <button type="button" class="btn btn-link" data-toggle="modal" data-target="#registraReferidor">
                                    <span class="lomelin-text28" style="width: 100%; padding-right: 0px;">Agregar nuevo</span>
                                    </button>
                       
                                
                            </div>
                        
                        
                        </div>
     
     
     <div class="row overflow-auto" style="overflow-y: auto;">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card text-center" style="width:100%; height: 300px; overflow-y: ">
                                  	<table id="example1" class="table">
					<thead>
                                       </thead>
				   <tbody>
                                        @foreach ($referidos as $referido)
                                        <tr>
                                         
                                            <td class="text-left" style="border: 0;">
                                            <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre Completo</label>
                                            <input type="text" class="form-control lomelin-text19" disabled style="padding-left: 0px;" value="{{ $referido->name }}">
                                            </td>    
                                         
                                           <td class="text-left" style="border: 0;">
                                            <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Email</label>
                                            <input type="text" class="form-control lomelin-text19" disabled style="padding-left: 0px;" value="{{ $referido->email }}">
                                            </td>    
                                         
                                           <td class="text-left" style="border: 0;">
                                            <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Télefono</label>
                                            <input type="text" class="form-control lomelin-text19" disabled style="padding-left: 0px;" value="{{ $referido->phone }}">
                                            </td>    
                                         
                                            <td class="text-left" style="border: 0;">
                                                <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;"> </label>
                                                <br><br>
                                                <button class='btnTrash remove'><i class='fa fa-times'></i></button>
                                            </td>
                                            
                                        </tr>
                                     
                                        @endforeach
                                      
                                   </tbody>    
                         </table>
                                
                                
                            </div>
                        </div>
     
     
     <br><br>
     
                    </div>
                                     
  

 <div class="modal" id="registraReferidor" tabindex="-1" role="dialog" aria-labelledby="Agrea un referidor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <span class="lomelin-text5">Agrega un referido.</span>
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    
    <form class="login-form" method="POST" action="{{ route('agregaReferidor') }}">
          {{ csrf_field() }}
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
       <div class="form-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
           <label for="name" class="lomelin-text15">Nombre Completo</label>
          <input type="text" class="form-control" placeholder="Usuario" id="name" name="name" autofocus>
        </div> 
        <br>
        
        <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="email" class="lomelin-text15">Correo email</label>
          <input type="text" class="form-control" placeholder="email" id="email" name="email">
         </div>
        <br>
     
          <div class="form-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <label for="phone" class="lomelin-text15">Teléfono</label>
          <input type="text" class="form-control" placeholder="Teléfono" id="phone" name="phone">
         </div>
        <br>
     
        
        <button class="btn btn-primary btn-lg btn-block" type="submit">Agregar</button>
      
      </div>
    </form>
                 
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
