@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Contactos - Sugerencias </h2>
                <a href="{{ route('csv-contacto-sugerencia') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
					fa-download"></i>
					Exportar Excel </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Tipo </th>
                    <th> Correo </th>
                    <th> Nombres </th>
                    <th> Teléfono </th>
                    <th> Nro. Documento </th>
                    <th> Nacionalidad </th>
                    <th> Mensaje </th>
                    <th> Forma Contacto </th>
                    <th> Fecha </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                            <td> {{ $element->tipo }} </td>
                            <td> {{ $element->correo }} </td>
                            <td> {{ $element->nombres }} </td>
                            <td> {{ $element->telefono }} </td>
                            <td> {{ $element->documento }} </td>
                            <td> {{ $element->nacionalidad }} </td>
                            <td> {{ $element->mensaje }} </td>
                            <td> {{ $element->formaContacto }} </td>
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