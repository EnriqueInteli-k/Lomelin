@extends('layouts.app')

@section('content')
 
    <div class="content-wrapper">
                        <div class="row">
                            <div class="table-responsice col-md-12">
                                <table class=".table-hover">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">
                                                <select class="custom-select" id="nombre">
                                                    <option selected>Nombre...</option>
                                                    <option value="1">A-F</option>
                                                    <option value="2">G-M</option>
                                                    <option value="2">N-Q</option>
                                                    <option value="2">U-z</option>
                                                </select>                                                 
                                            </th>
                                            <th scope="col">
                                                <select class="custom-select" id="estado">
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
                                            </th>
                                            <th scope="col">
                                                <select class="custom-select" id="ciudad">
                                                    <option value='Ciudad de México '>Ciudad de México </option>
                                                    <option value='Ecatepec '>Ecatepec </option>
                                                    <option value='Guadalajara '>Guadalajara </option>
                                                    <option value='Puebla de Zaragoza '>Puebla de Zaragoza </option>
                                                    <option value='Ciudad Juárez '>Ciudad Juárez </option>
                                                    <option value='Tijuana '>Tijuana </option>
                                                    <option value='León '>León </option>
                                                    <option value='Zapopan '>Zapopan </option>
                                                    <option value='Monterrey '>Monterrey </option>
                                                    <option value='Nezahualcóyotl '>Nezahualcóyotl </option>
                                                    <option value='Chihuahua '>Chihuahua </option>
                                                    <option value='Naucalpan de Juárez '>Naucalpan de Juárez </option>
                                                    <option value='Mérida '>Mérida </option>
                                                    <option value='San Luis Potosí '>San Luis Potosí </option>
                                                    <option value='Aguascalientes '>Aguascalientes </option>
                                                    <option value='Hermosillo '>Hermosillo </option>
                                                    <option value='Saltillo '>Saltillo </option>
                                                    <option value='Mexicali '>Mexicali </option>
                                                    <option value='Culiacán Rosales '>Culiacán Rosales </option>
                                                    <option value='Guadalupe '>Guadalupe </option>
                                                    <option value='Acapulco de Juárez '>Acapulco de Juárez </option>
                                                    <option value='Tlalnepantla de Baz '>Tlalnepantla de Baz </option>
                                                    <option value='Cancún '>Cancún </option>
                                                    <option value='Santiago de Querétaro '>Santiago de Querétaro </option>
                                                    <option value='Chimalhuacán '>Chimalhuacán </option>
                                                    <option value='Torreón '>Torreón </option>
                                                    <option value='Morelia '>Morelia </option>
                                                    <option value='Reynosa '>Reynosa </option>
                                                    <option value='Tlaquepaque '>Tlaquepaque </option>
                                                    <option value='Tuxtla Gutiérrez '>Tuxtla Gutiérrez </option>
                                                    <option value='Victoria de Durango '>Victoria de Durango </option>
                                                    <option value='Toluca de Lerdo '>Toluca de Lerdo </option>
                                                    <option value='Ciudad López Mateos '>Ciudad López Mateos </option>
                                                    <option value='Cuautitlán Izcalli '>Cuautitlán Izcalli </option>
                                                    <option value='Apodaca '>Apodaca </option>
                                                    <option value='Heroica Matamoros '>Heroica Matamoros </option>
                                                    <option value='San Nicolás de los Garza '>San Nicolás de los Garza </option>
                                                    <option value='Veracruz '>Veracruz </option>
                                                    <option value='Xalapa '>Xalapa </option>
                                                    <option value='Tonalá '>Tonalá </option>
                                                    <option value='Mazatlán '>Mazatlán </option>
                                                    <option value='Irapuato '>Irapuato </option>
                                                    <option value='Nuevo Laredo '>Nuevo Laredo </option>
                                                    <option value='Xico '>Xico </option>
                                                    <option value='Villahermosa '>Villahermosa </option>
                                                    <option value='General Escobedo '>General Escobedo </option>
                                                    <option value='Celaya '>Celaya </option>
                                                    <option value='Cuernavaca '>Cuernavaca </option>
                                                    <option value='Tepic '>Tepic </option>
                                                    <option value='Ixtapaluca '>Ixtapaluca </option>
                                                    <option value='Ciudad Victoria '>Ciudad Victoria </option>
                                                    <option value='Ciudad Obregón '>Ciudad Obregón </option>
                                                    <option value='Tampico '>Tampico </option>
                                                    <option value='Villa Nicolás Romero '>Villa Nicolás Romero </option>
                                                    <option value='Ensenada '>Ensenada </option>
                                                    <option value='San Francisco Coacalco '>San Francisco Coacalco </option>
                                                    <option value='Santa Catarina '>Santa Catarina </option>
                                                    <option value='Uruapan '>Uruapan </option>
                                                    <option value='Gómez Palacio '>Gómez Palacio </option>
                                                    <option value='Los Mochis '>Los Mochis </option>
                                                    <option value='Pachuca de Soto '>Pachuca de Soto </option>
                                                    <option value='Oaxaca de Juárez '>Oaxaca de Juárez </option>
                                                    <option value='Soledad de Graciano Sánchez '>Soledad de Graciano Sánchez </option>
                                                    <option value='Tehuacán '>Tehuacán </option>
                                                    <option value='Ojo de Agua '>Ojo de Agua </option>
                                                    <option value='Coatzacoalcos '>Coatzacoalcos </option>
                                                    <option value='San Francisco de Campeche '>San Francisco de Campeche </option>
                                                    <option value='Monclova '>Monclova </option>
                                                    <option value='La Paz '>La Paz </option>
                                                    <option value='Heroica Nogales '>Heroica Nogales </option>
                                                    <option value='Buenavista '>Buenavista </option>
                                                    <option value='Puerto Vallarta '>Puerto Vallarta </option>
                                                    <option value='Tapachula '>Tapachula </option>
                                                    <option value='Ciudad Madero '>Ciudad Madero </option>
                                                    <option value='San Pablo de las Salinas '>San Pablo de las Salinas </option>
                                                    <option value='Chilpancingo de los Bravo '>Chilpancingo de los Bravo </option>
                                                    <option value='Poza Rica de Hidalgo '>Poza Rica de Hidalgo </option>
                                                    <option value='Chicoloapan '>Chicoloapan </option>
                                                    <option value='Ciudad del Carmen '>Ciudad del Carmen </option>
                                                    <option value='Chalco de Díaz Covarrubias '>Chalco de Díaz Covarrubias </option>
                                                    <option value='Jiutepec '>Jiutepec </option>
                                                    <option value='Salamanca '>Salamanca </option>
                                                    <option value='San Luis Río Colorado '>San Luis Río Colorado </option>
                                                    <option value='San Cristóbal de las Casas '>San Cristóbal de las Casas </option>
                                                    <option value='Cuautla de Morelos '>Cuautla de Morelos </option>
                                                    <option value='Juárez '>Juárez </option>
                                                    <option value='Chetumal '>Chetumal </option>
                                                    <option value='Piedras Negras '>Piedras Negras </option>
                                                    <option value='Playa del Carmen '>Playa del Carmen </option>
                                                    <option value='Zamora '>Zamora </option>
                                                    <option value='Córdoba '>Córdoba </option>
                                                    <option value='San Juan del Río '>San Juan del Río </option>
                                                    <option value='Colima '>Colima </option>
                                                    <option value='Ciudad Acuña '>Ciudad Acuña </option>
                                                    <option value='Manzanillo '>Manzanillo </option>
                                                    <option value='Zacatecas '>Zacatecas </option>
                                                    <option value='Veracruz '>Veracruz </option>
                                                    <option value='Ciudad Valles '>Ciudad Valles </option>
                                                    <option value='Guadalupe '>Guadalupe </option>
                                                    <option value='San Pedro Garza García '>San Pedro Garza García </option>
                                                    <option value='Naucalpan de Juárez '>Naucalpan de Juárez </option>
                                                    <option value='Fresnillo '>Fresnillo </option>
                                                    <option value='Orizaba '>Orizaba </option>
                                                    <option value='Miramar '>Miramar </option>
                                                    <option value='Iguala '>Iguala </option>
                                                    <option value='Delicias '>Delicias </option>
                                                    <option value='Villa de Álvarez '>Villa de Álvarez </option>
                                                    <option value='Ciudad Cuauhtémoc '>Ciudad Cuauhtémoc </option>
                                                    <option value='Navojoa '>Navojoa </option>
                                                    <option value='Guaymas '>Guaymas </option>
                                                    <option value='Minatitlán '>Minatitlán </option>
                                                    <option value='Cuautitlán '>Cuautitlán </option>
                                                    <option value='Texcoco de Mora '>Texcoco de Mora </option>
                                                    <option value='Hidalgo del Parral '>Hidalgo del Parral </option>
                                                    <option value='Tepexpan '>Tepexpan </option>
                                                    <option value='Tulancingo de Bravo '>Tulancingo de Bravo </option>
                                                    <option value='San Juan Bautista Tuxtepec '>San Juan Bautista Tuxtepec </option>
                                                </select>                                                 
                                            </th>
                                            <th scope="col">
                                                <select class="custom-select" id="mts">
                                                    <option selected>Mts2...</option>
                                                    <option value="1">0-200</option>
                                                    <option value="2">200-1000</option>
                                                    <option value="2">1000-10000</option>
                                                    <option value="2">10000+</option>
                                                </select>                                                 
                                            </th>
                                            <th scope="col">
                                                <select class="custom-select" id="precio">
                                                    <option selected>Precio...</option>
                                                    <option value="1">0-500</option>
                                                    <option value="2">500-1000</option>
                                                    <option value="2">1000-10000</option>
                                                    <option value="2">10000+</option>
                                                </select>                                                 
                                            </th>
                                            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Campos</td>
                                            <td>Mexico</td>
                                            <td>D.F.</td>
                                            <td>180</td>
                                            <td>1,2000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Altaea</td>
                                            <td>Monterrey</td>
                                            <td>Garza Garcia</td>
                                            <td>220</td>
                                            <td>1,6000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Sur</td>
                                            <td>Quintan Roo</td>
                                            <td>Playa del Carmen</td>
                                            <td>280</td>
                                            <td>2,1000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Pacifico</td>
                                            <td>Oaxaca</td>
                                            <td>Huatulco</td>
                                            <td>1600</td>
                                            <td>10,2000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Centro</td>
                                            <td>Aguascalientes</td>
                                            <td>Aguascalientes</td>
                                            <td>320</td>
                                            <td>2,2000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="height:55px;">Desarrollo Occidental</td>
                                            <td>Jalisco</td>
                                            <td>Zapopan</td>
                                            <td>300</td>
                                            <td>2,6000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Desarrollo Solario</td>
                                            <td>Nayarit</td>
                                            <td>Tepic</td>
                                            <td>180</td>
                                            <td>1,2000.00</td>
                                            <td>
                                                <a href="{{route('detalle') }}">
                                                    <img src="{{ asset('images/icon-eye.png') }}" class="img-fluid" width="18px"> Ver mas
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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