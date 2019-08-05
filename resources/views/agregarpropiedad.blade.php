@extends('layouts.app')

@section('content')



<script>
function init() {
  	navigator.geolocation.getCurrentPosition(function(response) {
    var mapOptions = {
      center: new google.maps.LatLng(response.coords.latitude, response.coords.longitude),
      zoom: 10,
      mapTypeId: google.maps.MapTypeId.HYBRID
    }

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    
    google.maps.event.addListener(map, 'click', function(event) {

    
     var myLatLng = event.latLng;
     var lat = myLatLng.lat();
     var lng = myLatLng.lng();
     
      document.getElementById("lat").value = lat;
      document.getElementById("lang").value = lng;
   
});
    });
  }
</script>

<div class="content-wrapper">
     <div class="row">
           <div class="col-md-4">
            <span class="lomelin-text24">Agregar propiedad</span>
            </div>
                                                       
         
     </div>   

    <div class="row" style="height: 20px;"></div>
    
       <form class="form-sample" method="POST" action="{{ route('agregarPropiedad') }}" name="agregarPropiedad" id="agregarPropiedad">
         {{ csrf_field() }}                          
    
    <div class="row">
       <div class="col-md-8">
        <div class="form-group" style="padding: 0px 0px">
          <label class="col-sm-3 col-form-label lomelin-text18 control-label">Titulo</label>
            <div class="col-sm-9">
                <input type="text" class="form-control lomelin-text19" value="" name="titulo" id="titulo" placeholder="Titulo de la propiedad">
           </div>
       </div>
    </div>
    </div>
    
    <div class="row" style="height: 20px;"></div>
    
    
    <div class="row">
       <div class="col-md-12">
         <label class="col-sm-3 col-form-label lomelin-text18 control-label">Descripción</label>
           
         <div id="summernote" style="height: 400px;">
                    <h4>Descripción General</h4>
                    
                  </div>
           
           
    </div>
    </div>
 
    <div class="row" style="height: 20px;"></div>
 
    
     <div class="row" style="height: 20px;"></div>
 
  <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Imagenes</span>
                                            </div>
     </div>
                  
                  <div class="row">
                      <div class="col-md-12">
                            <div id='image-holder2' style='display: inline-block;width:220px;height:280px;border:1px solid black;'></div>
                      </div>
                  </div>                  
                  
                  
                   <div class="row" >
                      <div class="col-md-4">
                          <input type="file" class ="form-control" id="imageFotoUpload2" multiple="">
                      </div>
                  </div>        
                  
                  
     </div>
         </div>
          
      </div>
         
     </div>  
          
    
    
    
    
    
     <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Dirección</span>
                                            </div>
     </div>
        
 <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Calle</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Calle de la propeidad">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
                  
 <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Número Exterior:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Número exterior">
                                                        </div>
                                                    </div>
                                                </div>
     
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Número Interior:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Número Interior">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
  
<div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Colonia</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Colonia de la propeidad">
                                                        </div>
                                                    </div>
                                                </div>
 </div>                  
                  
 
                  <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Municipio:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Municipio">
                                                        </div>
                                                    </div>
                                                </div>
     
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Estado:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                           <select class="form-control lomelin-text19" style="padding-left: 0px;" name="estado" id="estado">
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
                  
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">C.P.:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Código postal">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
  
    
    <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Latitud:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" disabled class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="" id="lat">
                                                        </div>
                                                    </div>
                                                </div>
     
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Longitud:</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" disabled class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="" id="lang">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
    
 <div class="row">
     <div class="col-md-12">
<div id="map"  style="height: 250px; width: 100%;"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?callback=init"></script>
         
     </div>   
 

</div>
                  
                  
                  
                  
                  
                  
      </div> 
     </div>
      </div>
      
     </div>
          
    
    <div class="row" style="height: 20px;"></div>
 
    <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Tamaño</span>
                                            </div>
     </div>
        
 
                  
 <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Largo de la propiedad (mts)</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Largo de la propiedad">
                                                        </div>
                                                    </div>
                                                </div>
     
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Ancho de la propiedad (mts)</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Ancho de la propiedad">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
  
                
  
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Superficie Total (mts2)</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Superficie total">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
  
      </div> 
     </div>
      </div>
      
     </div>
    
     <div class="row" style="height: 20px;"></div> 
    
    
    
     <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Servicios</span>
                                            </div>
     </div>
    
     <div class="row">
                                                                 
                                                                 <div class="col-sm-2">
                                                                     <input type="checkbox" name="servicio1" value="bano"><span class="lomelin-text24">Baño</span><br>
                                                                      <input type="checkbox" name="servicio2" value="jardin"><span class="lomelin-text24">Jardin</span><br>
                                                                      <input type="checkbox" name="servicio3" value="estacionamiento" checked><span class="lomelin-text24">Est.</span><br> 
                                                                      <input type="checkbox" name="servicio4" value="balcon" checked><span class="lomelin-text24">Balcón</span><br> 
                                                                 </div>
                                                                 
                                                                 <div class="col-sm-2">
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
 <div class="row" style="height: 20px;"></div>
 
 <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Constructora</span>
                                            </div>
     </div>
    
     <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre de la constructora</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Nombre de la constructora">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
 
   <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Dirección</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Dirección de la constructora">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Teléfono</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
 
 <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Página WEB</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Dirección de la página web">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
                  
                  
                  
       
              </div>
         </div>
          
      </div>
         
     </div>    

 <div class="row" style="height: 20px;"></div>
 
  <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Arquitecto</span>
                                            </div>
     </div>
    
     <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre del arquitecto(a)</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Nombre del arquitecto(a)">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
 
   
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Teléfono</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
 
           
                  
                  
       
              </div>
         </div>
          
      </div>
         
     </div>  
          
          
 <div class="row" style="height: 20px;"></div>
 
  <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Marketing</span>
                                            </div>
     </div>
    
     <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre de la empresa</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Nombre de la empresa">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
 
   
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Teléfono</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
 
           
                  
                  
       
              </div>
         </div>
          
      </div>
         
     </div>  
          
 
 
 <div class="row" style="height: 20px;"></div>
 
  <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Comercialización</span>
                                            </div>
     </div>
    
     <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Nombre de la empresa</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Nombre de la empresa">
                                                        </div>
                                                    </div>
                                                </div>
 </div>
 
   
  
<div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-sm-12 col-form-label lomelin-text27 control-label" style="padding-left: 0px;">Teléfono</label>
                                                        <div class="col-sm-12" style="padding-left: 0px;">
                                                            <input type="text" class="form-control lomelin-text19" style="padding-left: 0px;" value="" placeholder="Teléfono">
                                                        </div>
                                                    </div>
                                                </div>
     
       
 </div>                  
 
           
                  
                  
       
              </div>
         </div>
          
      </div>
         
     </div>  
          
 
 
 <div class="row" style="height: 20px;"></div>
 
  <div class="row">
      <div class="col-md-6 col-lg-12 grid-margin stretch-card">
         <div class="card text-white" style="background-color: white; background: white;">
              <div class="card-body" style="padding: 0px 0px;">
                                    
     <div class="row">
                                            <div class="col-md-2">
                                            <span class="lomelin-text4">Socios Clave</span>
                                            </div>
     </div>
                  
<div class="row" style="height: 120px;"></div>                  
                  
     </div>
         </div>
          
      </div>
         
     </div>  
          
 
 
 <div class="row">
     <div class="col-md-10"></div>     
     <div class="col-md-2">
      <button class="btn btn-light" name ="save" id="save"><img src="{{ asset('images/save_icon.png') }}" disabled class="" width="48px" height="auto"></button>    
         
         
     </div>
 </div>   
       
       </form> 

</div>    
    
    
    
    @endsection


@section('footer')

    @include('footer');  
                 

@endsection


@section('scripts')
 $('#save').on('click', function(event) {
$('#agregarPropiedad').submit();
}); 


 $("#imageFotoUpload2").on('change', function () {

     //Get count of selected files
     var countFiles = $(this)[0].files.length;

     var imgPath = $(this)[0].value;
     var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
     var image_holder = $("#image-holder2");
     image_holder.empty();


     if (extn === "gif" || extn === "png" || extn === "jpg" || extn === "jpeg") {

            if (typeof (FileReader) !== "undefined") {


             //loop for each file selected for uploaded.
             for (var i = 0; i < countFiles; i++) {

                 var reader = new FileReader();
                 reader.onload = function (e) {
                     
                     $("<img />", {"src": e.target.result,"class": "thumb-image","style":"width:220px;height:280px"}).appendTo(image_holder);
                     
                     // $(image_holder).html("<img src='" + e.target.result + "' />");
                       console.log($(image_holder).html());
                     console.log("<img src='" + e.target.result + "'/>");
                 };

                 //image_holder.show();
                 reader.readAsDataURL($(this)[0].files[i]);
             }

         } else {
             alert("This browser does not support FileReader.");
         }
     } else {
         alert("Pls select only images");
     }
 });


@endsection