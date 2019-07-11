@extends('layouts.app')

@section('content')

<div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 grid-margin stretch-card">
                                <div class="card text-white border-0">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Detalle Desarrollo</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">PM_Cliente</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Constructora</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Arquitectura</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Marketing</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Comercialización</button>
                                            </div>
                                            <div class="row" style="height:20px"></div>
                                            <div class="row">
                                                <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Socios_Clave</button>
                                            </div>                                             
                                        </div>
                                        <div class="col-md-5">
                                            <img class="card-img h-100 rounded-0" src="{{ asset('images/img5.png') }}" alt="Card image">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <button type="button" class="btn btn-ls btn-block btn-outline-light text-left" style="color:blue;">Detalle Desarrollo</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <form class="forms-sample">
                                                                <div class="form-group">
                                                                    <label for="exampleInputUsername1" class="lomelin-text5">Nombre de la constructora</label>
                                                                    <input type="text" class="form-control lomelin-text5" id="exampleInputUsername1" placeholder="Nombre">
                                                                </div>
                                                                <div class="form-group">
                                                                    <font color="#0000ff" face="Arial, Helvetica, sans-serif"><span style="font-size: 14px;"><b>Telefono</b></span></font>
                                                                    <br>
                                                                    <input type="email" class="form-control lomelin-text5" id="exampleInputEmail1" placeholder="Telefóno">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1" class="lomelin-text5">Ubicación</label>
                                                                    <textarea class="form-control lomelin-text5" cols="5" rows=""></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <font color="#0000ff" face="Arial, Helvetica, sans-serif"><span style="font-size: 14px;"><b>Referencias</b></span></font>
                                                                    <br>
                                                                    <input type="text" class="form-control lomelin-text5" id="exampleInputConfirmPassword1" placeholder="Referencias">
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

   <footer class="footer">
                        <div class="w-100 clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
                        </div>
                    </footer>
                 

@endsection