@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Integrantes </h2>
                <a href="{{ route('integrante-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Nombre Completo </th>
                    <th> Imagen </th>
                    <th> Cargo </th>
                    <th> Orden </th>
                    <th class="tbl-action-col">  Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                            
                        <td> {{ $element->nombreCompleto }}</td>
                        <td> <img src="{{ asset($element->imagen) }}" alt="" class="ic-img"> </td>
                        <td>  @if($element->Cargo){{ $element->Cargo->nombre }}@endif</td>
                        <td> {{ $element->orden }}</td>
                            <td class="tbl-action-col">
                                <a href="{{ route('integrante-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
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