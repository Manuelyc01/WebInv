@extends('adminems::panel')

@section('content')
@php
    $locale = app()->getLocale();
    $locale == 'es' ? $newLocale = 'en' : $newLocale = 'es';
    print_r($locale);
@endphp

    <div class="col-md-12">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h2 class="panel-title form-title"> Banners Industrial </h2>
                <a href="{{ route('industrial-banner-adm.create') }}" type="a" class="btn btn-success pull-right btn-addon m-b-sm btn-rounded btn-md"><i class="fa
                fa-plus"></i>
                Añadir
                nuevo </a>
            </div>

            <div class="panel-body">
                <table id="table" class="display table table-hover dataTable">
                    <thead>
                        
                     <th> Banner </th>
                     <th> Acciones </th>
                    </thead>
                    
                    <tbody>
                    @foreach ($elements as $element)
                        @if($element->locale==$locale)
                        <tr data-id="{{ $element->id }}">
                            <td> <img src="{{ asset($element->banner) }}" alt="" class="ic-img"> </td>
                            <td class="tbl-action-col">
                                <a href="{{ route('industrial-banner-adm.edit' , ['slug' => $element->id]) }}" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('adminems::preview')

@stop