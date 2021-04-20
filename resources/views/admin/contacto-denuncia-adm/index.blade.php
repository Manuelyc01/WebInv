@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Contactos - Denuncias </h2>
                <a href="{{ route('csv-contacto-denuncia') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
					fa-download"></i>
					Exportar Excel </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> ID </th>
                    <th> Sede </th>
                    <th> Tipo </th>
                    <th> ¿Desea Identificarse? </th>
                    <th> Nombres </th>
                    <th> DNI </th>
                    <th> Teléfono </th>
                    <th> Correo </th>
                    <th> Involucrados </th>
                    <th> ¿Sospecha Jefe Inmediato?</th>
                    <th> Mensaje Denuncia</th>
                    <th> Archivo Adjunto</th>
                    <th> Fecha</th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                            <td> {{ $element->identificador }} </td>
                            <td> {{ $element->sede }} </td>
                            <td> {{ $element->tipo }} </td>
                            <td> {{ $element->identificarse }} </td>
                            <td> {{ $element->nombres }} </td>
                            <td> {{ $element->dni }} </td>
                            <td> {{ $element->telefono }} </td>
                            <td> {{ $element->correo }} </td>
                            <td> 
                                @if ($element->arrayInvolucrados != null)
                                    @foreach ($element->arrayInvolucrados as $item)
                                        Tipo: {{ $item['tipo'] }}, 
                                        Nombres: {{ $item['nombres'] }}, 
                                        Apellidos: {{ $item['apellidos'] }}, 
                                        Relación Empresa: {{ $item['relacion'] }}, 
                                        Cargo: {{ $item['cargo'] }}, 
                                        Datos Adicional: {{ $item['adicional'] }}
                                    @endforeach  
                                @else  
                                    No hay involucrados.       
                                @endif
                                                     
                            </td>
                            <td> {{ $element->sospecha }} </td>
                            <td> {{ $element->denunciaMensaje }} </td>
                            <td> <a href="{{ $element->archivo }}" target="_blank"><i class="fa
                                fa-download"></i></a> </td>
                            <td> {{ $element->fecha }} </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('adminems::preview')

@stop