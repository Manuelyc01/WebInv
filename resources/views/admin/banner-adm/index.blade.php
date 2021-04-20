@extends('adminems::panel')

@section('content')

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Banners </h2>
                <a href="{{ route('banner-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                    <th> Banner Desktop </th>
                    <th> Banner Mobile </th>
                    <th> Título </th>
                    <th> Descripción </th>
                    <th class="tbl-action-col">  Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        <tr data-id="{{ $element->id }}">
                            <td> <img src="{{ asset($element->fondoDesktop) }}" alt="" class="ic-img"> </td>
                            <td> <img src="{{ asset($element->fondoMobile) }}" alt="" class="ic-img"> </td>
                        <td> {{ $element->titulo }}</td>
                        <td> {!! $element->des !!}</td>
                            <td class="tbl-action-col">
                                <a href="{{ route('banner-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
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