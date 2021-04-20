@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Contactos - Globales </h2>
                <a href="{{ route('csv-contacto-global') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
					fa-download"></i>
					Exportar Excel </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Nombres </th>
                    <th> Apellidos </th>
                    <th> Empresa </th>
                    <th> RUC </th>
                    <th> Teléfono </th>
                    <th> Correo </th>
                    <th> Prod. Industrial </th>
                    <th> Fecha </th>
                    <th> Mensaje </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                            <td> {{ $element->nombres }} </td>
                            <td> {{ $element->apellidos }} </td>
                            <td> {{ $element->empresa }} </td>
                            <td> {{ $element->ruc }} </td>
                            <td> {{ $element->telefono }} </td>
                            <td> {{ $element->correo }} </td>
                            <td> {{ $element->producto }} </td>
                            <td> {{ $element->fecha }} </td>
                            <td> {{ $element->mensaje }} </td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('adminems::preview')

@stop