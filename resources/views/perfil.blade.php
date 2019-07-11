@extends('layouts.app')

@section('content')
 <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="ml-5">
                                                 <img src="{{ asset('images/user1.png') }}" class="img-fluid" width="120px">
                                            </div>
                                            <div class="ml-5">
                                                <p class="lomelin-text1"><p class="lomelin-text2">Propietario</p>Sr. Eduardo Lozano Cortes</p>
                                            </div>
                                            <div class="col-md-2 my-auto text-center">
                                                <p class="lomelin-text3">Proyectos</p>
                                                <p class="lomelin-text3">24</p>
                                            </div>
                                            <div class="col-md-2 my-auto text-center">
                                                <p class="lomelin-text3">Activos</p>
                                                <p class="lomelin-text3">8</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-12 grid-margin stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body">
                                        <form class="form-sample">
                                            <p class="card-description lomelin-text4">Perfil</p>
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Nombre Completo</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4" value="{{ Auth::user()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Correo</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4" value = "{{ Auth::user()->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Organización</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4">
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
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Telefóno</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Ubicación</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label lomelin-text4 control-label">Estado</label>
                                                        <div class="col-sm-9">
                                                            <select class="form-control">
                                                                <option value='Ciudad de México'>Ciudad de México</option>
                                                                <option value='Aguascalientes'>Aguascalientes</option>
                                                                <option value='Baja California'>Baja California</option>
                                                                <option value='Baja California Sur'>Baja California Sur</option>
                                                                <option value='Campeche'>Campeche</option>
                                                                <option value='Chiapas'>Chiapas</option>
                                                                <option value='Chihuahua'>Chihuahua</option>
                                                                <option value='Coahuila de Zaragoza'>Coahuila de Zaragoza</option>
                                                                <option value='Colima'>Colima</option>
                                                                <option value='Durango'>Durango</option>
                                                                <option value='Guanajuato'>Guanajuato</option>
                                                                <option value='Guerrero'>Guerrero</option>
                                                                <option value='Hidalgo'>Hidalgo</option>
                                                                <option value='Jalisco'>Jalisco</option>
                                                                <option value='México'>México</option>
                                                                <option value='Michoacán de Ocampo'>Michoacán de Ocampo</option>
                                                                <option value='Morelos'>Morelos</option>
                                                                <option value='Nayarit'>Nayarit</option>
                                                                <option value='Nuevo León'>Nuevo León</option>
                                                                <option value='Oaxaca'>Oaxaca</option>
                                                                <option value='Puebla'>Puebla</option>
                                                                <option value='Querétaro Arteaga'>Querétaro Arteaga</option>
                                                                <option value='Quintana Roo'>Quintana Roo</option>
                                                                <option value='San Luis Potosí'>San Luis Potosí</option>
                                                                <option value='Sinaloa'>Sinaloa</option>
                                                                <option value='Sonora'>Sonora</option>
                                                                <option value='Tabasco'>Tabasco</option>
                                                                <option value='Tamaulipas'>Tamaulipas</option>
                                                                <option value='Tlaxcala'>Tlaxcala</option>
                                                                <option value='Veracruz'>Veracruz</option>
                                                                <option value='Yucatán'>Yucatán</option>
                                                                <option value='Zacatecas'>Zacatecas</option>
                                                            </select>
                                                        </div>
                                                    </div>
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