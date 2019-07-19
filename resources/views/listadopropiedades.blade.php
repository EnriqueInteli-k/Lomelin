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
      
       <div class="col-md-4 col-sm-6 grid-margin stretch-card">
              <div class="card">
                  <a href="{{ route('verPropiedad', $propiedad->id ) }}"><img class="card-img-top" style = "width: 100%; height: 240px;" src="{{ $propiedad->coverPhoto }}" alt="Card image cap1"></a>
                <div class="card-body">
                  <p class="lomelin-text11">{{$propiedad->title }}</p>
                  <p class="lomelin-text11">{{$propiedad->colonia}}</p>
                  <p class="lomelin-text12">{{$propiedad->recamaras}} recámara(s) - 0 baños - {{$propiedad->superficie}} mts2</p>
                </div>
              </div>
            </div>
    
    @php $contador++;
    @endphp
     
    @if( $contador > 3)
     
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