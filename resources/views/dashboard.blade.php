@extends('layouts.app')

@section('content')

        <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card bg-dark text-white border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-handbag icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Ventas</h4>
                                                <h3 class="font-weight-light mb-3">75, 650</h3>
                                                <p class="mb-0 font-weight-light">39%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card bg-primary text-white border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-user icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Rentas</h4>
                                                <h3 class="font-weight-light mb-3">37, 650</h3>
                                                <p class="mb-0 font-weight-light">43%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card bg-danger text-white border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-screen-desktop icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Prospectos</h4>
                                                <h3 class="font-weight-light mb-3">1349</h3>
                                                <p class="mb-0 font-weight-light">69%</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 grid-margin stretch-card">
                                <div class="card bg-success text-white border-0">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <i class="icon-support icon-lg"></i>
                                            <div class="ml-4">
                                                <h4 class="font-weight-light">Pendientes</h4>
                                                <h3 class="font-weight-light mb-3">37, 580</h3>
                                                <p class="mb-0 font-weight-light">65%</p>
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
                            <div class="col-md-6 col-lg-7 grid-margin stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body">
                                        <form class="form-sample">
                                            <p class="card-description lomelin-text4 jsgrid-align-right"> <a href="{{route('detalle') }}">Ver detalles</a> </p>
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group row">
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control lomelin-text4" value="Desarrollo1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card text-white border-0">
                                                         <img src="{{ asset('images/img5.png') }}"  class="card-img rounded-0">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="form-group row">
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control lomelin-text4" value="Desarrollo1">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control lomelin-text4" cols="10" rows="3">
                </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 grid-margin stretch-card">
                                <div class="card text-white border-0 bg-secondary">
                                    <div class="card-body" style="background=white;">
                                        <form class="form-sample">
                                            <p class="card-description lomelin-text4 jsgrid-align-right"> <a href="{{route('listado') }}">Ver Listado</a> </p>
                                            <hr style="width: 2; min-width: 2;" class="hr-gray1"/>
                                            <div class="row">
                                                <div class="col-md-12 grid-margin stretch-card">
                                                    <div class="card text-white border-0">
                                                        <ul class="nobull">
</ul>
                                                        <a href="#demo1" class="btn btn-outline-secondary" data-toggle="collapse">Desarrollo 1</a>
                                                        <div id="demo1" class="collapse">
                                                            <ul class="nobull">
                                                                <li>
                                                                    <a href="http://">Proyecto 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 4</a>
                                                                </li>
                                                            </ul>                                                             
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <a href="#demo2" class="btn btn-outline-secondary" data-toggle="collapse">Desarrollo 2</a>
                                                        <div id="demo2" class="collapse">
                                                            <ul class="nobull">
                                                                <li>
                                                                    <a href="http://">Proyecto 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 2</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 3</a>
                                                                </li>
                                                                <li>
                                                                    <a href="http://">Proyecto 4</a>
                                                                </li>
                                                            </ul>                                                             
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
                    <!-- content-wrapper ends -->            
  

@endsection


@section('footer')

   <footer class="footer">
                        <div class="w-100 clearfix">
                            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018 <a href="http://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="icon-heart text-danger"></i></span>
                        </div>
                    </footer>
                 

@endsection