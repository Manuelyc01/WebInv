@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Gestion nivel 2 </h2>
                <a href="{{ route('gestion-nivel2-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Título </th>
                    <th> Descripción </th>
                    <th> Cantidad Archivos </th>
                    <th> Gestión Nivel 1 </th>
                    <th class="tbl-action-col">  Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                        <td> {{ $element->titulo }}</td>
                        <td> {!! $element->des !!}</td>
                        <td> 
                            @if ($element->array != null)
                                {{ count($element->array) }}
                            @else
                                0
                            @endif                            
                        </td>
                        <td> {{ $element->GestionNivel1->nombre }}</td>
                            <td class="tbl-action-col">
                                <a href="{{ route('gestion-nivel2-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('adminems::preview')

@stop