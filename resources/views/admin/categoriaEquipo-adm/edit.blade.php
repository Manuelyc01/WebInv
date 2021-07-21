@extends('adminems::panel')

@section('content')
    @if(isset($element))
        {!! Form::model($element, [ 'route' => ['categoriaEquipo-adm.update', $element->id_cat_equipos], 'method' => 'PUT', 'id' => 'admin-form' ]) !!}
    @else
        {!! Form::open(['route' => 'categoriaEquipo-adm.store', 'method' => 'POST' , 'id' => 'admin-form']) !!}
    @endif

    @include('admin.categoriaEquipo-adm.forms.form')
    {!! Form::close() !!}

    @isset($element)
        {{ Form::open(['route' => ['categoriaEquipo-adm.destroy' , $element->id_cat_equipos] , 'method' => 'DELETE', 'id' => 'form-delete-detail']) }}
        {{ Form::close() }}
    @endisset

    <div class="col-md-12">
        <button id="submit-btn" class="btn btn-success btn-addon m-b-sm"><i class="glyphicon glyphicon-floppy-disk"></i>
        <b>Guardar cambios</b> </button>
        @isset($element)
            <button id="delete-btn" class="btn btn-danger btn-addon m-b-sm" data-toggle="modal" data-target="#delete-modal">
                <i class="glyphicon glyphicon-trash"></i> Eliminar </button>
        @endisset
        <a class="btn btn-info btn-addon m-b-sm" href="{{ route('categoriaEquipo-adm.index') }}">
        <i class="glyphicon glyphicon-circle-arrow-left"></i> <b>Volver al listado</b> </a>
    </div>
@stop
