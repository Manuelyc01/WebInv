@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Cargos </h2>
                <a href="{{ route('cargo-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Nombre </th>
                    <th class="tbl-action-col">  Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <td> {{ $element->nombre }}</td>
                            <td class="tbl-action-col">
                                <a href="{{ route('cargo-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
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