@extends('layouts.app')

@section('content')

<div class="row" style="height: 145px;">
</div>

<div class="row" style="line-height: 1.2;">
<div class="col-12"><span class="lomelin-text1">{{$cantidad }} Propiedades encontradas</span> </div>
<div class="col-12"><span class="lomelin-text2">Querétaro, Mexico</span> </div>

</div>



 <div class="content-wrapper">
     
     
     @php $contador = 1;
     @endphp
     
      @foreach ($propiedades as $propiedad)
      
    @if( $contador == 1)
    <div class="row">
    @endif
      
       <div class="col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card">
                  <a href="{{ route('verPropiedadPropietario', $propiedad->id ) }}"><img class="card-img-top" style = "width: 100%; height: 240px;" src="{{ $propiedad->coverPhoto }}" alt="Card image cap1">
                               <div class="card-img-overlay d-flex" style="padding: 0px 0px;" >
                                    <div class="text-left w-100">
                                    <div style="height: 70%;"></div>
                                      <div style="background: black; width:100%; height: 30%; opacity: 0.5; filter: alpha(opacity=50);">
                                        
                                            <div class="row">
                                            <div class="col-lg-1"></div> 
                                            <div class="col-lg-10"> 
                                            <p class="lomelin-text20" style="line-height: 1.0;">{{ $propiedad->title }}</p>
                                            
                                            </div>
                                            <div class="col-lg-1"></div> 
                                          </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                      
                  </a>
                  
                  
              </div>
            </div>
    
    @php $contador++;
    @endphp
     
    @if( $contador > 4)
     
    @php $contador = 1;
    @endphp
    </div>  
     
    @endif
    
      
       @endforeach
     
     
     
     
</div>

    
</div>



@endsection


@section('footer')

  @include('footer');
                 

@endsection