@extends('layouts.app')

@section('content')
 <div class="w-100 clearfix">
                        <hr style="width: 2; min-width: 2;">
                        <img src="{{ asset('images/house2.png') }}" style="width:100%">


   

</div>
                   
<div class="row" style="height: 145px;">
</div>

<div class="row" style="line-height: 1.2;">
<div class="col-1"></div>
<div class="col-11"><span class="lomelin-text1">Encuentra lo que buscas</span> </div>
</div>

<div class="row" style="line-height: 1.2;">
<div class="col-1"></div>
<div class="col-11"><span class="lomelin-text2">Lorem ipsum dolor sit amet consectetur adipiscing</span> </div>
</div>

<div class="row" style="height: 118px;">
</div>

<div class="row">
<div class="col-1"></div>
<div class="col-4"><p align="justify" class="lomelin-text3">Lorem ipsum dolor sit amet consectetur adipiscing elit egestas augue, ultricies neque habitant nulla pharetra cum cras platea, rhoncus dis elementum tempus senectus porttitor inceptos lobortis. Sodales aenean suspendisse mus quam mollis magna interdum cum eros, etiam molestie fusce inceptos ante justo in senectus.</p> </div>
<div class="col-2"><img src="{{ asset('images/sample1.png') }}" style="width:100%"></div>
<div class="col-4"><p align="justify" class="lomelin-text3">Somos una empresa familiar líder en el sector inmobiliario desde 1943. ¡Este año cupimos 75 años de trayectoria! Te invitamos a celebrar con nosotros y a obtener grandes beneficios.</p> </div>
<div class="col-1"></div>
</div>


<div class="row">
<div class="col-1"></div>
<div class="col-4"><p align="justify" class="lomelin-text3"></p> </div>
<div class="col-2"><img src="{{ asset('images/sample2.png') }}" style="width:100%"></div>
<div class="col-4"><p align="justify" class="lomelin-text3">Asesoramos a nuestros clientes con honradez y responsabilidad para brindarles las mejores soluciones y servicios inmobiliarios, en la promoción de inmuebles a la venta o renta, administración, consultoría y comercialización de desarrollos.</p> </div>
<div class="col-1"></div>
</div>


<div class="row">
<div class="col-1"></div>
<div class="col-4"><p align="justify" class="lomelin-text3"></p> </div>
<div class="col-2"><img src="{{ asset('images/sample3.png') }}" style="width:100%"></div>
<div class="col-4"><p align="justify" class="lomelin-text3">Comparte con tus conocidos la oportunidad de invertir en alguno de nuestros desarrollos y gana bonos en efectivo!</p> </div>
<div class="col-1"></div>
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